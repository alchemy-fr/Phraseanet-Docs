Monitorer Phraseanet
====================

A propos
--------

Retourne la configuration de Phraseanet

.. code-block:: bash

    /api/v1/monitor/phraseanet/

========================== =====
 Informations
========================== =====
 Méthode HTTP               GET
 Authentification requise   Oui
========================== =====

Paramètres
----------

Aucun paramètre

Attribut de la réponse
----------------------

=============== ======================================
 Attribut           Description
=============== ======================================
 phraseanet      Information A propos de l'installation de Phraseanet
 cache           Information A propos du cache Phraseanet
 global_values   Liste des variables de configuration
=============== ======================================

Exemple de réponse
------------------

.. code-block:: json

    {
      "meta": {
        "api_version": "2.0.0",
        "request": "GET /api/v1/monitor/phraseanet/",
        "response_time": "2021-07-02T15:32:25+02:00",
        "http_code": 200,
        "error_type": null,
        "error_message": null,
        "error_details": null,
        "charset": "UTF-8"
      },
      "response": {
        "phraseanet": {
          "version": {
            "name": "Buxus",
            "number": "4.1.3"
          },
          "environment": "prod",
          "debug": false,
          "maintenance": false,
          "errorsLog": false,
          "serverName": "https://demo.alchemyasp.com/"
        },
        "cache": {
          "main": {
            "type": "redis",
            "online": true,
            "stats": {
              "hits": false,
              "misses": false,
              "uptime": 86676690,
              "memory_usage": 12510208,
              "memory_available": false
            }
          },
          "op_code": {
            "type": "array",
            "online": true,
            "stats": {
              "hits": 0,
              "misses": 0,
              "uptime": 1625232745,
              "memory_usage": null,
              "memory_available": null
            }
          },
          "doctrine_metadatas": null,
          "doctrine_query": null,
          "doctrine_result": {
            "type": "redis",
            "online": true,
            "stats": {
              "hits": false,
              "misses": false,
              "uptime": 86676690,
              "memory_usage": 12510208,
              "memory_available": false
            }
          }
        },
        "global_values": {
          "serverName": "https://demo.alchemyasp.com/",
          "title": "Demo Phraseanet",
          "keywords": "phrasea, phraseanet, alchemy,dam, phototheque, photo, photographie, photography, demo,Digital asset Management",
          "description": "Site de demo du logiciel Phraseanet",
          "httpServer": {
            "phpTimezone": "Europe/Paris",
            "siteId": "PhraseanetIVDemo",
            "defaultLanguage": "fr",
            "allowIndexing": true,
            "modes": {
              "XsendFile": false,
              "XsendFileMapping": [],
              "h264Streaming": false,
              "authTokenDirectory": null,
              "authTokenDirectoryPath": null,
              "authTokenPassphrase": null
            }
          },
          "maintenance": {
            "alertMessage": "The application is down for maintenance",
            "displayMessage": false
          },
          "webServices": {
            "googleApi": true,
            "googleAnalyticsId": "UA-3475486-6",
            "i18nWebService": "https://geonames.alchemyasp.com",
            "recaptacha": {
              "active": null,
              "publicKey": "",
              "privateKey": ""
            },
            "youtube": {
              "active": true,
              "clientId": "815071393317-ubbvhsh2719olu208i5nnkrs4la5i01q.apps.googleusercontent.com",
              "clientSecret": "IyGbMKG0MtkPC2vkpAWay_0f",
              "devKey": "AI39si41k9lBXIOB81HbzezvzQ0k4EE9RvRQq2is4r_UvcfZvxU_Az8VKPJnaQBu_4tYod0eJpYzkuenSqeq5_dcZCDB93u3Uw"
            },
            "flickr": {
              "active": true,
              "clientId": "619fd87254fb1f70b1c6ed042cdd99b3",
              "clientSecret": "b13cc4d7ce1eee82"
            },
            "dailymtotion": {
              "active": true,
              "clientId": "1c0d55ee32873e880e35",
              "clientSecret": "6e2f506e35aabac1bc3e9d0b57979c6ceb0df1b1"
            }
          },
          "navigator": {
            "active": true
          },
          "office-plugin": {
            "active": true
          },
          "homepage": {
            "viewType": "GALLERIA"
          },
          "report": {
            "anonymous": false
          },
          "storage": {
            "documents": "/space/ofs/demo/datas"
          },
          "searchEngine": {
            "configuration": {
              "defaultQuery": "",
              "defaultQueryType": 0,
              "minChar": 1
            },
            "engine": {
              "type": "ElasticSearch",
              "status": [
                [
                  "name",
                  "Threnody"
                ],
                [
                  "cluster_name",
                  "122649456891:preprod-23"
                ],
                [
                  "tagline",
                  "You Know, for Search"
                ],
                [
                  "version:number",
                  "2.3.2"
                ],
                [
                  "version:build_hash",
                  "62bfc1a3d7348a45970caf96b393a6536132d15a"
                ],
                [
                  "version:build_timestamp",
                  "2019-03-26T04:15:51Z"
                ],
                [
                  "version:build_snapshot",
                  false
                ],
                [
                  "version:lucene_version",
                  "5.5.0"
                ]
              ],
              "configuration": null
            }
          },
          "binary": {
            "phpCli": "/usr/bin/php",
            "phpIni": null,
            "swfExtract": "/opt/swftools/bin/swfextract",
            "pdf2swf": "/opt/swftools/bin/pdf2swf",
            "swfRender": "/opt/swftools/bin/swfrender",
            "unoconv": "/usr/bin/unoconv",
            "ffmpeg": "/usr/bin/ffmpeg",
            "ffprobe": "/usr/bin/ffprobe",
            "mp4box": "/usr/bin/MP4Box",
            "pdftotext": "/usr/bin/pdftotext",
            "pdfmaxpages": 5
          },
          "mainConfiguration": {
            "viewBasAndCollName": null,
            "chooseExportTitle": false,
            "defaultExportTitle": "title",
            "socialTools": "publishers"
          },
          "modules": {
            "thesaurus": true,
            "storyMode": true,
            "docSubsitution": true,
            "subdefSubstitution": true
          },
          "email": {
            "defaultMailAddress": "instance+demo@alchemy.fr",
            "smtp": {
              "active": false,
              "auth": false,
              "host": null,
              "port": null,
              "secure": "ssl",
              "user": "alchemy",
              "password": "amtfr23i30"
            }
          },
          "custom-links": [
            {
              "linkName": "Phraseanet store",
              "linkLanguage": "all",
              "linkUrl": "https://www.alchemy.fr/fr/rubrique/store/",
              "linkLocation": "help-menu",
              "linkOrder": 1,
              "linkBold": false,
              "linkColor": ""
            }
          ],
          "ftp": {
            "active": false,
            "activeForUser": false
          },
          "client": {
            "maxSizeDownload": 120,
            "tabSearchMode": null,
            "tabAdvSearchPosition": null,
            "tabTopicsPosition": null,
            "tabOngActifPosition": null,
            "renderTopicsMode": null,
            "displayRolloverPreview": null,
            "displayRolloverBasket": null,
            "collRenderMode": null,
            "viewSizeBaket": null,
            "clientAutoShowProposals": null,
            "needAuth2DL": true
          },
          "inscription": {
            "autoSelectDB": true,
            "autoRegister": false
          },
          "push": {
            "validationReminder": null,
            "expirationValue": 10
          }
        }
      }
    }
