<?php


class LogCLI
{
	public function __construct()
	{
	}

	public function log($message)
	{
		echo $message."\n";
	}

	public function logTitle($title)
	{
		$title = ' '.$title.' ';

		$hyphen = str_repeat('─', strlen($title));

		$CR = "\n";

		echo '┌'.$hyphen.'┐'
			.$CR.'│'.$title.'│'
			.$CR.'└'.$hyphen.'┘'
			.$CR;
	}
}