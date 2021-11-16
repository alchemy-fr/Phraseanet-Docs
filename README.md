# Phraseanet Documentation
(c) 2004 Alchemy / Phraseanet Team

[![Build Status](https://secure.travis-ci.org/alchemy-fr/Phraseanet-Docs.png)](http://travis-ci.org/alchemy-fr/Phraseanet-Docs)

Thanks to CakePHP Team for their multinlingual Makefile script !

## How to use with docker 

git clone 

git checkout the branch you want to work on.

adapt .env to your local setting

```
docker-compose build 
docker-compose up -d
```

The stack url with default port mapping is 

http://127.0.0.1:8680/en/index.html

or 

http://127.0.0.1:8680/fr/index.html


### Workflow 

Make your changes to the RST files.
To view the changes, run:

```
docker-compose build 
docker-compose up -d
```

## How to Generate in traditional environment

```
apt-get install python25 python25-dev
easy_install sphinx
make html
```

See http://sphinx.pocoo.org/ for documentation

## About environment variable documentation generation

[See dedicated page](bundle_createEnvVariableDoc/README.md)

## About Phraseanet source files import

Some Phraseanet source files can be integrated in documentation from Github.

E.g with `/lib/conf.d/configuration.yml` YAML file :
```
.. literalinclude:: ../../common/github_source/lib/conf.d//configuration.yml
    :language: yaml
```
    
This integration is based on a link to a local file which is downloaded during the build.
Downloaded files are defined in `include-phraseanet-sources.sh`:
```
GITHUB_FILE_LIST=(
    "/lib/conf.d/configuration.yml" \
  )
```

`include-phraseanet-sources.sh` mode is based on `CURRENT_VERSION` value located in `__version__.inc` file:

**Mode 'Phraseanet version'**
 
`CURRENT_VERSION` represent a Phraseanet minor version (e.g. "4.1")
> Note that `include-phraseanet-sources.sh` target the last minor version tag on Github. E.g : 
> for a documentation defined for Phraseanet 4.0 (`CURRENT_VERSION=4.0` in `__version__.inc` file), it will target 4.0.12 tag.

**Mode 'Phraseanet branch'**

`CURRENT_VERSION` represent a Phraseanet branch (e.g. "master")
