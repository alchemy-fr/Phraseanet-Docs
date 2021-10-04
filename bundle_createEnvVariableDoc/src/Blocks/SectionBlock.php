<?php


class SectionBlock
{
	/** @var string */
	private $headerRaw;

	/** @var string comment HTML generated from headerRaw*/
	private $comment;

	/** @var VariableBlock[] */
	private $variableBlockList;

	/** @var BlockHelper */
	private $blockHelper;

	public function __construct()
	{
		$this->headerRaw = '';
		$this->comment = '';
		$this->variableBlockList = [];
	}

	public function addVariableBlock(VariableBlock $variableBlock)
	{
		$this->variableBlockList[] = $variableBlock;
	}

	private function generateComment($headerRaw)
	{
		$comment = $this->blockHelper->generateHTML($headerRaw);
		return($comment);
	}

	/**
	 * @param string $headerRaw
	 * @return SectionBlock
	 */
	public function setHeaderRaw(string $headerRaw): SectionBlock
	{
		$this->headerRaw = $headerRaw;
		$this->comment = $this->generateComment($this->headerRaw);
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
	 * @return VariableBlock[]
	 */
	public function getVariableBlockList(): array
	{
		return $this->variableBlockList;
	}

	/**
	 * @param BlockHelper $blockHelper
	 * @return SectionBlock
	 */
	public function setBlockHelper(BlockHelper $blockHelper): SectionBlock
	{
		$this->blockHelper = $blockHelper;
		return $this;
	}

}