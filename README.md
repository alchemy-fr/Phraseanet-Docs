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
docker-compose up
```


### Workflow 

Made your change on RST file 

and launch for see modification

```
docker-compose build 
docker-compose up -d
```

## How to Generate
```
apt-get install python25 python25-dev
easy_install sphinx
make html
```

See http://sphinx.pocoo.org/ for documentation

