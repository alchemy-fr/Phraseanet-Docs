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

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/monitor/phraseanet/",
            "response_time": "2012-06-13T14:50:42+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "phraseanet": {
                "version": {
                    "name": "Carnosaurus",
                    "number": "3.7.0.0.a7"
                },
                "environment": "prod",
                "debug": false,
                "maintenance": false,
                "errorsLog": false,
                "serverName": "https://library.net/"
            },
            "cache": {
                "main": {
                    "type": "memcache",
                    "stats": {
                        "hits": "26",
                        "misses": "74",
                        "uptime": "75335",
                        "memory_usage": "22622",
                        "memory_available": "67108864"
                    }
                },
                "op_code": {
                    "type": "memcache",
                    "stats": {
                        "hits": 0,
                        "misses": 2,
                        "uptime": 1339591842,
                        "memory_usage": 53760,
                        "memory_available": 22837792
                    }
                }
            },
            "global_values": {
                "serverName": "https://library.net/",
                "title": "Phraseanet",
                "keywords": "",
                "description": "",
                "httpServer": {
                    "logErrors": false,
                    "phpTimezone": "Europe/Paris",
                    "siteId": "2eff18ac12e65da2b49bc48f98fdb11f",
                    "staticUrl": "",
                    "defaultLanguage": false,
                    "allowIndexing": false,
                    "modes": {
                        "XsendFile": false,
                        "nginxXAccelRedirect": "",
                        "nginxXAccelRedirectMountPoint": "noweb",
                        "h264Streaming": false,
                        "authTokenDirectory": "",
                        "authTokenDirectoryPath": "",
                        "authTokenPassphrase": ""
                    },
                    "files": {
                        "owner": "",
                        "group": ""
                    }
                },
                "maintenance": {
                    "alertMessage": "May the force be with you",
                    "displayMessage": false
                },
                "webServices": {
                    "googleApi": false,
                    "googleAnalyticsId": "",
                    "googleChromeFrameDisclaimer": false,
                    "i18nWebService": "http://localization.webservice.alchemyasp.com/",
                    "recaptacha": {
                        "active": false,
                        "publicKey": "",
                        "privateKey": ""
                    },
                    "youtube": {
                        "active": false,
                        "clientId": "",
                        "clientSecret": "",
                        "devKey": ""
                    },
                    "flickr": {
                        "active": false,
                        "clientId": "",
                        "clientSecret": ""
                    },
                    "dailymtotion": {
                        "active": false,
                        "clientId": "",
                        "clientSecret": ""
                    }
                },
                "navigator": {
                    "active": false
                },
                "homepage": {
                    "viewType": "COOLIRIS"
                },
                "report": {
                    "anonymous": false
                },
                "events": {
                    "events": [
                        "eventsmanager_event_test"
                    ],
                    "notifications": [
                        "eventsmanager_notify_feed",
                        "eventsmanager_notify_validationreminder",
                        "eventsmanager_notify_ordernotdelivered",
                        "eventsmanager_notify_autoregister",
                        "eventsmanager_notify_order",
                        "eventsmanager_notify_downloadmailfail",
                        "eventsmanager_notify_register",
                        "eventsmanager_notify_push",
                        "eventsmanager_notify_orderdeliver",
                        "eventsmanager_notify_bridgeuploadfail",
                        "eventsmanager_notify_validate",
                        "eventsmanager_notify_validationdone"
                    ]
                },
                "upload": {
                    "allowedFileExtension": false
                },
                "filesystem": {
                    "noWeb": "/home/grosroro/Documents/workspace/Phraseanet/datas/noweb/"
                },
                "searchEngine": {
                    "configuration": {
                        "defaultQuery": "all",
                        "defaultQueryType": "0"
                    },
                    "sphinx": {
                        "active": false,
                        "host": "127.0.0.1",
                        "port": 9306,
                        "realtimeHost": "127.0.0.1",
                        "realtimePort": 9308
                    },
                    "phrasea": {
                        "minChar": 1,
                        "sort": ""
                    }
                },
                "binary": {
                    "phpCli": "/usr/bin/php",
                    "phpIni": "",
                    "imagick": "/usr/bin/convert",
                    "swfExtract": "",
                    "pdf2swf": "",
                    "swfRender": "",
                    "unoconv": "",
                    "ffmpeg": "",
                    "mp4box": "",
                    "pdftotext": "",
                    "pdfmaxpages": 5
                },
                "mainConfiguration": {
                    "adminMail": "support@alchemy.fr",
                    "viewBasAndCollName": false,
                    "chooseExportTitle": false,
                    "defaultExportTitle": "support@alchemy.fr",
                    "socialTools": "none"
                },
                "modules": {
                    "thesaurus": false,
                    "storyMode": false,
                    "docSubsitution": false,
                    "subdefSubstitution": false
                },
                "email": {
                    "defaultMailAddress": "phraseanet@example.com",
                    "smtp": {
                        "active": false,
                        "auth": false,
                        "host": "",
                        "port": "",
                        "secure": false,
                        "user": "",
                        "password": ""
                    }
                },
                "ftp": {
                    "active": false,
                    "activeForUser": false
                },
                "client": {
                    "maxSizeDownload": 120,
                    "tabSearchMode": 1,
                    "tabAdvSearchPosition": 2,
                    "tabTopicsPosition": 0,
                    "tabOngActifPosition": 1,
                    "renderTopicsMode": "tree",
                    "displayRolloverPreview": false,
                    "displayRolloverBasket": false,
                    "collRenderMode": "checkbox",
                    "viewSizeBaket": false,
                    "clientAutoShowProposals": false,
                    "needAuth2DL": false
                },
                "inscription": {
                    "autoSelectDB": false,
                    "autoRegister": false
                },
                "push": {
                    "validationReminder": 2,
                    "expirationValue": 10
                }
            }
        }
    }