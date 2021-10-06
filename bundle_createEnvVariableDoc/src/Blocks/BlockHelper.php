<?php


class BlockHelper
{
	const LF = "\n";
	/** @var TemplateHtmlGenerator */
	private $templateHtmlGenerator;

	public function __construct()
	{
	}

	public function generateHTML($rawString)
	{
		$rawString .= self::LF;

		$rawString = $this->removeDoubleSharpEmptyLines($rawString);

		$rawString = $this->generateSubTitletitle_V1($rawString);

		$rawString = $this->generateSubTitletitle_V2($rawString);

		$rawString = $this->injectBreakLines($rawString);

		$rawString = $this->addUL($rawString);
		$rawString = $this->addLI($rawString);

		$rawString = $this->convertURL($rawString);

		$rawString = $this->injectBreakLinesOnEmptySharp($rawString);
		$rawString = $this->removeBeginingSharps($rawString);

		$exploded = explode("\n", $rawString);

		$rawString = join('', $exploded);

		$rawString = $this->removeBRAfterUL($rawString);

		return($rawString);
	}

	/**
	 * @param $rawString
	 * @return string
	 */
	private function convertURL($rawString)
	{
		$pattern="~"
			."(\[)([^|]*)\|([^\]]*)(\])"
			."~m";

		$tmp = '$3';
		$rawString = preg_replace($pattern, '<a href="'.$tmp.'" title="">$2</a>', $rawString);

		return($rawString);
	}

	/**
	 * Add ul markers :
	 *
	 * # lorem ipsum :
	 * # - something
	 * # - something on
	 * # two lines
	 * #
	 *
	 * ->
	 *
	 * # lorem ipsum :
	 * <ul>
	 * # - something
	 * # - something on
	 * # two lines
	 * </ul>
	 * #
	 * @param $rawString
	 * @return string
	 */
	private function addUL($rawString)
	{
		$LF = self::LF;

		$pattern="~"
			."(#[\t ]*-[\t ][\s\S]*?)(\n#[[:space:]]*\n)"
			."~m";

		$rawString = preg_replace($pattern, $LF.'<ul>'.$LF.'$1'.$LF.'</ul>'.$LF.'$2', $rawString);

		return($rawString);
	}

	/**
	 * @param $rawString
	 * @return string
	 */
	private function addLI($rawString)
	{
		$pattern="~"
			."(#[ \t]*-[ \t])([\s\S]*?)(?=(#[ \t]*-|<\/ul))"
			."~m";

		$rawString = preg_replace_callback($pattern,
			function($match)
			{
				return ('<li>'.str_replace("\n#", '', trim($match[2])).'</li>'."\n");
			},
			$rawString);

		return($rawString);
	}


	/**
	 * @param $rawString
	 * @return string
	 */
	private function removeDoubleSharpEmptyLines($rawString)
	{
		$pattern="~"
			."(##\s*\n)"
			."~m";

		$rawString = preg_replace($pattern, "\n", $rawString);

		return($rawString);
	}

	private function removeBeginingSharps($rawString)
	{
		$pattern="~"
			."(^#)(.*)$"
			."~m";

		$rawString = preg_replace($pattern, '$2', $rawString);

		return($rawString);
	}

	private function injectBreakLinesOnEmptySharp($rawString)
	{
		$pattern="~"
			."^(#)$"
			."~m";

		$rawString = preg_replace($pattern, '$1<br>', $rawString);

		return($rawString);
	}

	private function injectBreakLines($rawString)
	{
		$pattern="~"
			."(\.|\:|\.\.\.)( *)(\n)(?!# -)"
			."~m";

		$rawString = preg_replace($pattern, '$1$2<br>$3', $rawString);

		return($rawString);
	}

	/*
	private function generateParagraph($rawString)
	{
		$pattern="~"
			//."(^#\s)([^-].*)\.$"
			."(#[\t ])(.)([\s\S]*?)(?=\.\n)(.)"
			."~m";

		$rawString = preg_replace($pattern, '$1<p>$2$3$4</p>', $rawString);

		return($rawString);
	}
	*/

	private function generateSubTitletitle_V1($rawString)
	{
		$templateHtmlGenerator = $this->templateHtmlGenerator;

		$pattern="~"
			."^(##)\s*(.*)$"
			."~m";

		$rawString = preg_replace_callback($pattern,
			function($match) use ($templateHtmlGenerator)
			{
				return (
					$templateHtmlGenerator->getHtmlFromTemplate('subtitle',
						array(
							'$anchor' => str_replace(' ', '-', trim($match[2])),
							'$title' => trim($match[2]),
							'$permanentLinkLib' => 'Permanent link',
						))
				);
			},
			$rawString);

		return($rawString);
	}

	private function generateSubTitletitle_V2($rawString)
	{
		$templateHtmlGenerator = $this->templateHtmlGenerator;

		$pattern="~"
			."^(#\s*-{3,}\s*)([^-]*)(\s-{3,})\s*$"
			."~m";

		$rawString = preg_replace_callback($pattern,
			function($match) use ($templateHtmlGenerator)
			{
				return (
				$templateHtmlGenerator->getHtmlFromTemplate('subtitle',
					array(
						'$anchor' => str_replace(' ', '-', trim($match[2])),
						'$title' => trim($match[2]),
						'$permanentLinkLib' => 'Permanent link',
					))
				);
			},
			$rawString);

		return($rawString);
	}

	private function removeEmptyEntries($list)
	{
		return(array_filter($list, function($value) { return !is_null($value) && $value !== ''; }));
	}
	private function removeBRAfterUL($rawString)
	{
		$rawString = str_replace(array('</ul><br>', '</ul><br>'), array('</ul>', '</ul>'), $rawString);
		return($rawString);
	}

	/**
	 * @param TemplateHtmlGenerator $templateHtmlGenerator
	 * @return BlockHelper
	 */
	public function setTemplateHtmlGenerator(TemplateHtmlGenerator $templateHtmlGenerator): BlockHelper
	{
		$this->templateHtmlGenerator = $templateHtmlGenerator;
		return $this;
	}
}