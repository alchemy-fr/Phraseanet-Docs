<?php


class TemplateHtml
{
	/** @var string */
	private $name;
	/** @var array */
	private $parm;
	/** @var string */
	private $html;

	public function __construct()
	{
		$this->parm = [];
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return TemplateHtml
	 */
	public function setName(string $name): TemplateHtml
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getParm(): array
	{
		return $this->parm;
	}

	/**
	 * @param array $parm
	 * @return TemplateHtml
	 */
	public function setParm(array $parm): TemplateHtml
	{
		$this->parm = $parm;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getHtml(): string
	{
		return $this->html;
	}

	/**
	 * @param string $html
	 * @return TemplateHtml
	 */
	public function setHtml(string $html): TemplateHtml
	{
		$this->html = $html;
		return $this;
	}
}