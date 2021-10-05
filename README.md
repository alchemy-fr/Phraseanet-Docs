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

## About environment variable documentation generation

[See dedicated page](bundle_createEnvVariableDoc/README.md)