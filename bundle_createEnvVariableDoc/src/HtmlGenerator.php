<?php


class HtmlGenerator
{
	/** @var EnvFileParser */
	private $envFileParser;

	/** @var TemplateHtmlGenerator */
	private $templateHtmlGenerator;

	public function __construct()
	{
	}

	/**
	 * @return string
	 * @throws Exception
	 */
	public function build()
	{
		$header1Lib = 'Name';
		$header2Lib = 'Type';
		$header3Lib = 'Comment';

		$html = '';

		foreach ($this->envFileParser->getSectionBlockList() as $sectionBlock)
		{
			$html .= $sectionBlock->getComment();

			$variableBlockList = $sectionBlock->getVariableBlockList();

			if(count($variableBlockList) > 0)
			{
				$html .= $this->getHtmlFromTemplate('table_start',
					array(
						'$captionLib' => 'myLib'
					));

				$html .= $this->getHtmlFromTemplate('table_header_start', array());

				$html .= $this->getHtmlFromTemplate('table_header_col',array('$headerLib' => $header1Lib));
				$html .= $this->getHtmlFromTemplate('table_header_col',array('$headerLib' => $header2Lib));
				$html .= $this->getHtmlFromTemplate('table_header_col',array('$headerLib' => $header3Lib));

				$html .= $this->getHtmlFromTemplate('table_header_end', array());
				$html .= $this->getHtmlFromTemplate('table_body_start', array());

				foreach ($variableBlockList as $variableBlock)
				{
					$html .= $this->getHtmlFromTemplate('table_body_line_start', array());

					// Col Variable Name
					if($variableBlock->isTagDeprecated())
					{
						$html .= $this->getHtmlFromTemplate('table_body_cell_var_flag',
							array(
								'$flagCSS' => 'red',
								'$flagLib' => 'deprecated',
								'$text' => $variableBlock->getVarName(),
								'$defaultValue' => $variableBlock->getDefaultValue(),
								));
					}
					else
					{
						$html .= $this->getHtmlFromTemplate('table_body_cell_text', array('$text' => $variableBlock->getVarName()));
					}


					// Col Docker Flag
					$html .= $this->getHtmlFromTemplate('table_body_cell_flag', array('$flagCSS' => $variableBlock->getCSSDockerTag(), '$flagLib' => $variableBlock->getCSSDockerTag()));

					// Col Comment
					$html .= $this->getHtmlFromTemplate('table_body_cell_text', array('$text' => $variableBlock->getComment()));

					$html .= $this->getHtmlFromTemplate('table_body_line_end', array());
				}

				$html .= $this->getHtmlFromTemplate('table_body_end', array());
				$html .= $this->getHtmlFromTemplate('table_end', array());
			}

		}

		$html = '<div class="environment-variable-generation">'.$html.'</div>';

		return $html;
	}

	/**
	 * @param $templateName
	 * @param $parmList
	 * @return string
	 * @throws Exception
	 */
	private function getHtmlFromTemplate($templateName, $parmList)
	{
		return($this->templateHtmlGenerator->getHtmlFromTemplate($templateName, $parmList));
	}

	/**
	 * @param EnvFileParser $envFileParser
	 * @return HtmlGenerator
	 */
	public function setEnvFileParser(EnvFileParser $envFileParser): HtmlGenerator
	{
		$this->envFileParser = $envFileParser;
		return $this;
	}

	/**
	 * @param TemplateHtmlGenerator $templateHtmlGenerator
	 * @return HtmlGenerator
	 */
	public function setTemplateHtmlGenerator(TemplateHtmlGenerator $templateHtmlGenerator): HtmlGenerator
	{
		$this->templateHtmlGenerator = $templateHtmlGenerator;
		return $this;
	}


}