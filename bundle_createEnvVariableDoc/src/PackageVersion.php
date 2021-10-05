<?php


class PackageVersion
{
	private $versionFilePath;

	public function __construct()
	{
	}

	/**
	 * Return package version e.g. "4.1"
	 *
	 * @return string
	 */
	public function getPackageVersion() : string
	{
		$raw = file_get_contents($this->versionFilePath);
		$exploded = explode('=',$raw);
		$packageVersion = trim($exploded[1]);
		return($packageVersion);
	}

	/**
	 * @param mixed $versionFilePath
	 * @return PackageVersion
	 */
	public function setVersionFilePath($versionFilePath)
	{
		$this->versionFilePath = $versionFilePath;
		return $this;
	}
}