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

Default url is 

http://127.0.0.1:4041/en/index.html

or 

http://127.0.0.1:4041/fr/index.html


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

## About Phraseanet source files import

Some Phraseanet source files can be integrated in documentation from Github.

E.g with `/lib/conf.d//configuration.yml` YAML file :
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


> Note that `include-phraseanet-sources.sh` target the last minor version tag on Github. E.g : 
> for a documentation defined for Phraseanet 4.0 (see `__version__.inc`), it will target 4.0.12 tag.
 


