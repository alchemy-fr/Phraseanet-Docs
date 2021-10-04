<?php

class IncludeEnvVariable
{
	/** @var string */
	private $versionFilePath;

	/** @var string */
	private $templateHtmlPath;

	/** @var array */
	private $fileToIncludeList;

	/** @var string e.g. 'alchemy-fr/Phraseanet' */
	private $repoName;

	/** @var string */
	private $bundleDirectory;

	public function __construct()
	{

	}

	/**
	 * @return IncludeEnvVariable
	 * @throws Exception
	 */
	public function start()
	{
		$logCLI = new LogCLI();
		$logCLI->log('Start PHP create environment variable documentation');

		$templateHtmlGenerator = (new TemplateHtmlGenerator())
			->setTemplatePath($this->templateHtmlPath)
			->load();

		/**
		 * Get target version from __include__.php file
		 */
		$targetVersion = (new PackageVersion())
			->setVersionFilePath($this->versionFilePath)
			->getPackageVersion();

		$logCLI->log('Package version found: '.$targetVersion);

		/**
		 * Get last patched version (e.g. 4.1.3) of
		 * repo from target version number (e.g. 4.1)
		 */
		$githubLoader = (new GithubLoader())
			->setLogCli($logCLI)
			->setRepoName($this->repoName)
			->setTargetVersion($targetVersion);

		$lastPatchVersion = $githubLoader->getLastPatchVersion();

		$logCLI->log('Last patched version founded: '.$lastPatchVersion);

		/**
		 * Get & parse repo file and produce html file
		 */
		foreach ($this->fileToIncludeList as $fileToInclude)
		{

			$githubPath = $fileToInclude['githubPath'];
			$localPath = $fileToInclude['localPath'];

			$logCLI->log('Github Path: '.$githubPath);
			$logCLI->log('Local Path: '.$localPath);

			$rawData = $githubLoader->getFile($this->repoName, $lastPatchVersion, $githubPath);
			//$rawData = file_get_contents($this->bundleDirectory.'/test/.envTest2.txt');

			$rawData = "\n# <!-- environment variable -->\n\n".$rawData;

			$envFileParser = (new EnvFileParser())
				->setBlockHelper((new BlockHelper())->setTemplateHtmlGenerator($templateHtmlGenerator))
				->setLogCLI($logCLI)
				->setRawData($rawData)
				->parse();

			$logCLI->log('Generating HTML page');

			$html = (new HtmlGenerator())
				->setTemplateHtmlGenerator($templateHtmlGenerator)
				->setEnvFileParser($envFileParser)
				->build();


			$this->writeFile($localPath, $html);
			//echo $html;
		}

		$logCLI->log('');
		return($this);
	}

	private function writeFile($pathFile, $data)
	{
		$directory = dirname($pathFile);
		if(! is_dir($directory))
		{
			mkdir($directory, 0777, true);
		}

		file_put_contents($pathFile, $data);
	}

	/**
	 * @param mixed $versionFilePath
	 * @return IncludeEnvVariable
	 */
	public function setVersionFilePath($versionFilePath)
	{
		$this->versionFilePath = $versionFilePath;
		return $this;
	}

	/**
	 * @param array $fileToIncludeList
	 * @return IncludeEnvVariable
	 */
	public function setFileToIncludeList(array $fileToIncludeList): IncludeEnvVariable
	{
		$this->fileToIncludeList = $fileToIncludeList;
		return $this;
	}

	/**
	 * @param string $repoName
	 * @return IncludeEnvVariable
	 */
	public function setRepoName(string $repoName): IncludeEnvVariable
	{
		$this->repoName = $repoName;
		return $this;
	}

	/**
	 * @param string $templateHtmlPath
	 * @return IncludeEnvVariable
	 */
	public function setTemplateHtmlPath(string $templateHtmlPath): IncludeEnvVariable
	{
		$this->templateHtmlPath = $templateHtmlPath;
		return $this;
	}

	/**
	 * @param string $bundleDirectory
	 * @return IncludeEnvVariable
	 */
	public function setBundleDirectory(string $bundleDirectory): IncludeEnvVariable
	{
		$this->bundleDirectory = $bundleDirectory;
		return $this;
	}
}