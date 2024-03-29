#!/usr/bin/env php
<?php

$bundleDirectory = __DIR__;

$versionFilePath = $bundleDirectory.'/../__version__.inc';

$repoName = 'alchemy-fr/Phraseanet';

$templateHtmlPath = $bundleDirectory.'/template/environment_variable_template.html';

$fileToIncludeList = [
		['githubPath' => '/.env',
		'localPath' => $bundleDirectory.'/../common/docker_env_variable.html']
];

$srcPath = $bundleDirectory.'/src/';

include($srcPath . 'LogCLI.php');
include($srcPath . 'PackageVersion.php');
include($srcPath . 'GithubLoader.php');
include($srcPath . 'TemplateHtml.php');
include($srcPath . 'TemplateHtmlGenerator.php');
include($srcPath . 'IncludeEnvVariable.php');
include($srcPath . 'EnvFileParser.php');
include($srcPath . 'Blocks/VariableBlock.php');
include($srcPath . 'Blocks/SectionBlock.php');
include($srcPath . 'Blocks/BlockHelper.php');
include($srcPath . 'HtmlGenerator.php');

/**
 * Get first parameter if exist
 */
$localFileTestPath = '';
if(isset ($argv[1]))
{
	$localFileTestPath = $argv[1];
}

try
{
	$includeEnvVariable = (new IncludeEnvVariable())
		->setBundleDirectory($bundleDirectory)
		->setTemplateHtmlPath($templateHtmlPath)
		->setVersionFilePath($versionFilePath)
		->setRepoName($repoName)
		->setFileToIncludeList($fileToIncludeList)
		->setTestFilePath($localFileTestPath)
		->start();
}
catch (Exception $exception)
{
	echo ('Html generation process error: '.$exception->getMessage());
}