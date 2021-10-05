<?php


class GithubLoader
{
	private $repoName;
	private $targetVersion;

	/** @var LogCLI */
	private $logCli;

	public function __construct()
	{
	}

	public function getFile($repoName, $repoVersion, $githubPathFile)
	{
		$url = 'https://raw.githubusercontent.com/'.$repoName.'/'.$repoVersion.$githubPathFile;
		$this->logCli->log('download file: '.$url);

		$rawFile = file_get_contents($url);
		return($rawFile);
	}

	/**
	 * @return string
	 * @throws Exception
	 */
	public function getLastPatchVersion()
	{
		$tagList = $this->getGithubTagsList($this->repoName);
		$lastTag = $this->getLastTag($tagList, $this->targetVersion);
		return($lastTag);
	}

	/**
	 * @param $tagList
	 * @param $targetVersion
	 * @return string
	 * @throws Exception
	 */
	private function getLastTag($tagList, $targetVersion)
	{
		$patchNumberList = [];

		$targetVersion .= '.';
		$lenTargetVersion = strlen($targetVersion);

		foreach ($tagList as $tag)
		{
			if(substr($tag, 0, $lenTargetVersion) === $targetVersion)
			{
				$patchNumberList[] = substr($tag, $lenTargetVersion);
			}
		}

		if(count($patchNumberList) == 0)
		{
			throw new Exception('No version found for targetVersion: '.$targetVersion);
		}

		// order array and extract last entry
		sort($patchNumberList);
		$hiNumber = array_pop($patchNumberList);

		$lastTag = $targetVersion . $hiNumber;

		return($lastTag);
	}

	/**
	 * Return tag list
	 *
	 * @param $repoName
	 *
	 * @example output : [
	 * "v3.1.10"
	 * "v3.1.9"
	 * "v3.1.8"
	 * "4.1.0"
     * ]
	 *
	 * @return array
	 */
	private function getGithubTagsList($repoName)
	{
		$url = 'https://api.github.com/repos/'.$repoName.'/tags';

		$opts = [
			'http' => [
				'method' => 'GET',
				'header' => [
					'User-Agent: PHP'
				]
			]
		];

		$context = stream_context_create($opts);
		$content = file_get_contents($url, false, $context);

		$json = json_decode($content);

		$tagList = [];

		foreach ($json as $entry)
		{
			$tagList[] = $entry->name;
		}

		return($tagList);
	}

	/**
	 * @param mixed $targetVersion
	 * @return GithubLoader
	 */
	public function setTargetVersion($targetVersion)
	{
		$this->targetVersion = $targetVersion;
		return $this;
	}

	/**
	 * @param mixed $repoName
	 * @return GithubLoader
	 */
	public function setRepoName($repoName)
	{
		$this->repoName = $repoName;
		return $this;
	}

	/**
	 * @param LogCLI $logCli
	 * @return self
	 */
	public function setLogCli(LogCLI $logCli)
	{
		$this->logCli = $logCli;
		return $this;
	}


}