<?php

class EnvFileParser
{
	/** @var string */
	private $rawData;

	/** @var SectionBlock[] */
	private $sectionBlockList;

	/** @var LogCLI */
	private $logCLI;

	/** @var BlockHelper */
	private $blockHelper;

	public function __construct()
	{

	}

	/**
	 * @return $this
	 * @throws Exception
	 */
	public function parse(): EnvFileParser
	{
		$this->rawData = $this->removeSpacesBeforeSharp($this->rawData);
		$this->rawData = $this->removeEnvSpecificComment($this->rawData);
		$this->rawData = $this->addMissingLineFeedAfterTitle($this->rawData);

		//$this->rawData = str_replace("\n\n\n", "\n\n", $this->rawData);

		$this->logCLI->log('Build variables blocks');
		$varBlockList = $this->getVarBlockList();

		$this->logCLI->log('Build sections blocks');
		$this->buildSection($varBlockList);

		return $this;
	}

	private function addMissingLineFeedAfterTitle($rawString)
	{
		$pattern="~"
			."^(#\s*-{3,}\s*)([^-]*)(\s-{3,})[\t ]*\n([^\n])"
			."~m";

		$rawString = preg_replace($pattern, '$1$2$3'."\n\n".'$4', $rawString);

		return($rawString);
	}

	/**
	 * Build sections.
	 * A section is defined by one or many "\n\n" sequence on top of each variable header.
	 *
	 * @param $varBlockList
	 */
	private function buildSection($varBlockList)
	{
		$delimiter = "\n\n";

		$sectionBlock = (new SectionBlock())
			->setBlockHelper($this->blockHelper);
		$isFirstPass = true;

		foreach ($varBlockList as $varBlock)
		{
			$headerRaw = $varBlock['headerRaw'];
			$varName = $varBlock['varName'];
			$defaultValue = $varBlock['defaultValue'];

			$exploded = explode($delimiter, $headerRaw);
			if(is_array($exploded))
			{
				while( ($exploded[0] == '') && (count($exploded) > 1))
				{
					array_shift($exploded);
				}

				if( (count($exploded) > 1) && ($exploded[0] != '') )
				{
					if(! $isFirstPass)
					{
						$this->sectionBlockList[] = $sectionBlock;
						$sectionBlock = (new SectionBlock())
							->setBlockHelper($this->blockHelper);
					}
					$isFirstPass = false;

					$headerRaw = array_pop($exploded);
					$sectionHeaderRaw = implode($delimiter, $exploded);

					$sectionBlock->setHeaderRaw($sectionHeaderRaw);
				}
			}

			$sectionBlock->addVariableBlock(
				(new VariableBlock())
					->setBlockHelper($this->blockHelper)
					->setVarName($varName)
					->setDefaultValue($defaultValue)
					->setHeaderRaw($headerRaw));

		}
		$this->sectionBlockList[] = $sectionBlock;
	}

	/**
	 * Remove space before Sharp
	 * e.g :
	 * - " # xx"     -> "# xx"
	 * - "     # xx" -> "# xx"
	 *
	 * @param $data
	 * @return string|string[]|null
	 */
	private function removeSpacesBeforeSharp($data)
	{
		$pattern="~"
			."^([\t ]*)(#.*)$"
			."~m";

		$result = preg_replace($pattern, '$2', $data);

		return($result);
	}

	/**
	 * Remove specific content dedicated for .env file
	 *
	 * @param $data
	 * @return string|string[]|null
	 */
	private function removeEnvSpecificComment($data)
	{
		$pattern="~"
			."(###[\s\S]*?[\n][\n])"
			."~m";

		$result = preg_replace($pattern, '', $data);

		return($result);
	}

	/**
	 * Return a array represent var list, default value and their header content.
	 *
	 * @throws Exception
	 */
	private function getVarBlockList()
	{
		$pattern="~"
			//."([\s\S]*?)\n\s*([^\s]*)\s?=\s?(.*)"
			//."([\s\S]*?\s*)([^\s]*)\s?=\s?(.*)"
			//."([\s\S]*?\n)([^\s]*)=\s?(.*)"
			."([\s\S]*?\n)([^\s]*)=[[[:blank:]]*(.*)"
			."~m";

		preg_match_all($pattern, $this->rawData, $matchesAll, PREG_PATTERN_ORDER);

		if(! is_array($matchesAll))
		{
			throw new Exception('Wrong template. No match found.');
		}

		if(count($matchesAll) != 4)
		{
			throw new Exception('Wrong template. 4 matches supposed found. Found:'.count($matchesAll));
		}

		$nbItem = count($matchesAll[0]);
		$varBlockList = [];

		for($n=0; $n<$nbItem; $n++)
		{
			$varBlockList[] = array(
				'headerRaw' => $matchesAll[1][$n],
				'varName' => $matchesAll[2][$n],
				'defaultValue' => $matchesAll[3][$n],
			);
		}

		return $varBlockList;
	}

	/**
	 * @return SectionBlock[]
	 */
	public function getSectionBlockList(): array
	{
		return $this->sectionBlockList;
	}

	/**
	 * @param string $rawData
	 * @return EnvFileParser
	 */
	public function setRawData(string $rawData): EnvFileParser
	{
		$this->rawData = $rawData;
		return $this;
	}

	/**
	 * @param LogCLI $logCLI
	 * @return EnvFileParser
	 */
	public function setLogCLI(LogCLI $logCLI): EnvFileParser
	{
		$this->logCLI = $logCLI;
		return $this;
	}

	/**
	 * @param BlockHelper $blockHelper
	 * @return EnvFileParser
	 */
	public function setBlockHelper(BlockHelper $blockHelper): EnvFileParser
	{
		$this->blockHelper = $blockHelper;
		return $this;
	}


}