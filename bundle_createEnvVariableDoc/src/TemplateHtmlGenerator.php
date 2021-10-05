<?php


class TemplateHtmlGenerator
{
	private $templatePath;

	/** @var TemplateHtml[] */
	private $templateList;

	public function __construct()
	{
	}

	/**
	 * Parse Html template file and hydrate $templateList
	 *
	 * @return $this
	 * @throws Exception
	 */
	public function load()
	{
		$raw = file_get_contents($this->templatePath);

		$pattern="~"
			."\s*template\s([^\s]+)\s*\[*(.*(?!--\>)*)\]*--\>([\s\S]*?)<!--"
			."~m";

		preg_match_all($pattern, $raw, $matchesAll, PREG_PATTERN_ORDER);

		if(! is_array($matchesAll))
		{
			throw new Exception('Wrong template. No match found.');
		}

		if(count($matchesAll) != 4)
		{
			throw new Exception('Wrong template. 4 matches supposed found. Found:'.count($matchesAll));
		}

		$nbItem = count($matchesAll[0]);

		for($n=0; $n<$nbItem; $n++)
		{
			$templateName = $matchesAll[1][$n];
			$parm = $matchesAll[2][$n];
			$html = $matchesAll[3][$n];

			$parm = str_replace(array(' ', ']'), array('', ''), $parm);
			if($parm != '')
			{
				$parm = array_flip(explode(',', $parm));
			}


			$templateHtml = new TemplateHtml();
			$templateHtml->setName($templateName);
			if(is_array($parm))
			{
				$templateHtml->setParm($parm);
			}

			$templateHtml->setHtml($html);
			$this->templateList[$templateName] = $templateHtml;
		}

		return $this;
	}

	/**
	 * @param mixed $templatePath
	 * @return TemplateHtmlGenerator
	 */
	public function setTemplatePath($templatePath)
	{
		$this->templatePath = $templatePath;
		return $this;
	}

	/**
	 * @param $templateName
	 * @param $parmList
	 * @return string
	 * @throws Exception
	 */
	public function getHtmlFromTemplate($templateName, $parmList)
	{
		if(!isset($this->templateList[$templateName]))
		{
			throw new Exception('HTML Template "'.$templateName.'" not defined.');
		}

		$template = $this->templateList[$templateName];

		$html = $template->getHtml();

		foreach ($template->getParm() as $parm => $index)
		{
			if(!isset($parmList[$parm]))
			{
				throw new Exception('Parameter "'.$parm.'" missing while using template "'.$templateName.'"');
			}

			$html = str_replace($parm, $parmList[$parm], $html);
		}

		return($html);
	}
}