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

	/** @var string */
	private $testFilePath;

	/** @var string */
	private $appTitle;

	public function __construct()
	{
		$this->appTitle = 'PHP create environment variable documentation';
	}

	/**
	 * @return IncludeEnvVariable
	 * @throws Exception
	 */
	public function start()
	{
		$logCLI = new LogCLI();
		$logCLI->log('');
		$logCLI->logTitle($this->appTitle.' | Start');

		$templateHtmlGenerator = (new TemplateHtmlGenerator())
			->setTemplatePath($this->templateHtmlPath)
			->load();

		if($this->testFilePath !== '')
		{
			$logCLI->log('Test file mode');
		}
		else
		{

			/**
			 * Get target version from __include__.php file
			 */
			$targetVersionOrBranchName = (new PackageVersion())
				->setVersionFilePath($this->versionFilePath)
				->getPackageVersion();

			$logCLI->log('Package version found: '.$targetVersionOrBranchName);

			$githubLoader = (new GithubLoader())
				->setLogCli($logCLI)
				->setRepoName($this->repoName)
				->setTargetVersion($targetVersionOrBranchName);

			if($this->isTargetVersionIsBranchName($targetVersionOrBranchName))
			{
				$lastPatchVersion = $targetVersionOrBranchName;
				$logCLI->log('Branch mode: '.$lastPatchVersion);
			}
			else
			{
				/**
				 * Get last patched version (e.g. 4.1.3) of
				 * repo from target version number (e.g. 4.1)
				 */
				try
				{
					$lastPatchVersion = $githubLoader->getLastPatchVersion();
				}
				catch (Exception $exception)
				{
					$logCLI->log('Github access error: '.$exception->getMessage());
					return ($this);
				}

				$logCLI->log('Last patched version founded: '.$lastPatchVersion);
			}
		}

		/**
		 * Get & parse repo file and produce html file
		 */
		foreach ($this->fileToIncludeList as $fileToInclude)
		{
			$githubPath = $fileToInclude['githubPath'];
			$localPath = $fileToInclude['localPath'];

			$logCLI->log('Local Path: '.$localPath);

			if($this->testFilePath !== '')
			{
				$logCLI->log('Test file provided: '.$this->testFilePath);
				$rawData = file_get_contents($this->testFilePath);
			}
			else
			{
				$logCLI->log('Github Path: '.$githubPath);
				$rawData = $githubLoader->getFile($this->repoName, $lastPatchVersion, $githubPath);
				if(!$rawData)
				{
					throw new Exception('Github access error. Abort.');
				}
				$logCLI->log('Loaded '.strlen($rawData).' bytes from Github.');
			}

			$tmp = explode(' ', microtime());
			$microseconds = substr($tmp[0],2,3);
			$date = date("Y-m-d_H:i:s");
			$datetime = $date.'.'.$microseconds;

			$rawData = "\n# <!-- environment variable generated on ".$datetime." -->\n\n".$rawData;

			$envFileParser = (new EnvFileParser())
				->setBlockHelper((new BlockHelper())->setTemplateHtmlGenerator($templateHtmlGenerator))
				->setLogCLI($logCLI)
				->setRawData($rawData)
				->parse();

			$logCLI->log('Generating HTML page...');

			$html = (new HtmlGenerator())
				->setTemplateHtmlGenerator($templateHtmlGenerator)
				->setEnvFileParser($envFileParser)
				->build();

			$this->writeFile($localPath, $html);
			$logCLI->log('HTML page generated in: '.realpath($localPath));
			$logCLI->log('HTML page data md5 hash: '.md5($html));
		}

		$logCLI->logTitle($this->appTitle.' | End');
		return($this);
	}

	/**
	 * Return true if $pPackageVersion is
	 * not a version number ("4.2", "3.12", "98.90", etc.)
	 *
	 * @param $pPackageVersion
	 * @return bool
	 */
	private function isTargetVersionIsBranchName($pPackageVersion)
	{
		$pattern="~"
				."^[0-9]{1,}\.[0-9]{1,}$"
				."~m";

		return(! preg_match($pattern, $pPackageVersion));
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

	/**
	 * @param string $testFilePath
	 * @return $this
	 * @throws Exception
	 */
	public function setTestFilePath(string $testFilePath): IncludeEnvVariable
	{
		if($testFilePath != '')
		{
			if(! file_exists($testFilePath))
			{
				throw new Exception('Test file path not found: '.$testFilePath);
			}
		}
		$this->testFilePath = $testFilePath;
		return $this;
	}
}