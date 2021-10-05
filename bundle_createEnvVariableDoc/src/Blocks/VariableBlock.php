<?php


class VariableBlock
{
	const TAG_DOCKER_RUN 		= '@run';
	const TAG_DOCKER_BUILD 		= '@build';
	const TAG_DOCKER_INSTALL 	= '@install';
	const TAG_DEPRECATED 		= '@deprecated';

	/** @var string comment HTML generated from headerRaw*/
	private $comment;

	/** @var string */
	private $varName;

	/** @var string */
	private $defaultValue;

	/** @var bool */
	private $isTagDeprecated;

	/** @var bool */
	private $isTagDockerRun;

	/** @var bool */
	private $isTagDockerBuild;

	/** @var bool */
	private $isTagDockerInstall;

	/** @var BlockHelper */
	private $blockHelper;

	public function __construct()
	{
		$this->isTagDeprecated = false;
		$this->isTagDockerRun = false;
		$this->isTagDockerBuild = false;
		$this->isTagDockerInstall = false;
	}

	/**
	 * Assign Tags
	 *
	 * @param $headerRaw
	 * @return string
	 */
	private function extractTags($headerRaw)
	{
		$exploded = explode("\n", $headerRaw);

		if(count($exploded) > 1)
		{
			array_pop($exploded);
			$tagLine = array_pop($exploded);

			if(strpos($tagLine, self::TAG_DOCKER_RUN))
			{
				$this->isTagDockerRun = true;
			}

			if(strpos($tagLine, self::TAG_DOCKER_BUILD))
			{
				$this->isTagDockerBuild = true;
			}

			if(strpos($tagLine, self::TAG_DOCKER_INSTALL))
			{
				$this->isTagDockerInstall = true;
			}

			if(strpos($tagLine, self::TAG_DEPRECATED))
			{
				$this->isTagDeprecated = true;
			}

			/**
			 * If no tags found, the supposed tagLine is probably a comment.
			 * Then repush the popped tagline to exploded array
			 */
			if(!($this->isTagDockerRun || $this->isTagDockerBuild || $this->isTagDockerInstall || $this->isTagDeprecated))
			{
				$exploded[] = $tagLine;
			}
			$exploded[] = '';
			$headerRaw = join("\n", $exploded);
		}
		return($headerRaw);
	}

	private function generateComment($headerRaw)
	{
		$comment = $this->blockHelper->generateHTML($headerRaw);
		return($comment);
	}

	/*
	private function removeEmptyLines($headerRaw)
	{
		$exploded = explode("\n", $headerRaw);

		while( ($exploded[count($exploded)-1] == '') && (count($exploded) > 1))
		{
			array_pop($exploded);
		}

		$headerRaw = join("\n", $exploded);

		return($headerRaw);
	}
	*/

	/**
	 * @param string $headerRaw
	 * @return VariableBlock
	 */
	public function setHeaderRaw(string $headerRaw): VariableBlock
	{
		$headerRaw = $this->extractTags($headerRaw);
		$this->comment = $this->generateComment($headerRaw);

		return $this;
	}

	/**
	 * @param string $varName
	 * @return VariableBlock
	 */
	public function setVarName(string $varName): VariableBlock
	{
		$this->varName = $varName;
		return $this;
	}

	/**
	 * @param string $defaultValue
	 * @return VariableBlock
	 */
	public function setDefaultValue(string $defaultValue): VariableBlock
	{
		$this->defaultValue = $defaultValue;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getComment(): string
	{
		return $this->comment;
	}

	/**
	 * @return string
	 */
	public function getVarName(): string
	{
		return $this->varName;
	}

	/**
	 * @return string
	 */
	public function getDefaultValue(): string
	{
		return $this->defaultValue;
	}

	public function getCSSDockerTag()
	{
		if($this->isTagDockerRun) {return 'run';}
		if($this->isTagDockerInstall) {return 'install';}
		if($this->isTagDockerBuild) {return 'build';}
		return('none');
	}

	/**
	 * @return bool
	 */
	public function isTagDeprecated(): bool
	{
		return $this->isTagDeprecated;
	}

	/**
	 * @param BlockHelper $blockHelper
	 * @return VariableBlock
	 */
	public function setBlockHelper(BlockHelper $blockHelper): VariableBlock
	{
		$this->blockHelper = $blockHelper;
		return $this;
	}
}