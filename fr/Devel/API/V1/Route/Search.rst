Recherche
=========

A propos
--------

Retourne la liste des objets trouvés.

Cette route est distincte de :doc:`records/search <Records/Search>` car elle
groupe les objets par type.

Bien que cette route retourne différents types de resultats (enregistrements,
reportages), la recherche simultanée de ces différents types n'est pas
encore supportée.

.. code-block:: bash

    /api/v1/search/

========================== ======
 Informations
========================== ======
 Méthode HTTP               POST
 Authentification requise   Oui
========================== ======

Paramètres
----------

============= =========== ========= =============
 Paramètres    Type        Exemple   Information
============= =========== ========= =============
 query         chaîne                La requête de recherche est la même syntaxe que dans Phraseanet, La valeur par défaut est une chaîne égale à "all records"
 bases         tableau               Un tableau d'identifiants de collections. Si aucun identifiant de collection n'est donné, la requête est exécutée sur toute les collections disponibles.
 offset_start  entier         1      Le numéro de la page recherchée (La première page est la page 1)
 per_page      entier         10     Le nombre d'items à retourner
 sort          chaîne                Trier les résultats selon ce champ (type "date" ou "number")
 ord           chaîne                Ordre de tri, "asc" ou "desc"
 record_type   chaîne                Le type de document recherché. Les valeurs disponibles sont "audio", "video", "image", "document" et "flash"
 search_type   entier         0      "0" pour rechercher des documents et "1" pour rechercher des reportages
 date_field    chaîne                Sélectionner un champ pour rechercher avec les filtres "date_min" et "date_max"
 date_min      chaîne                La date minimum sous la forme 'Y/m/d' (Le paramètre "date_field" doit être renseigné)
 date_max      chaîne                La date maximum sous la forme 'Y/m/d' (Le paramètre "date_field" doit être renseigné)
 status        tableau               Un tableau qui restreint les documents recherchés aux status donnés
 fields        tableau               un tableau qui restreint le champ de recherche aux champs sélectionnés
============= =========== ========= =============

Attribut de la réponse
----------------------

================== ================================
 Attribut              Description
================== ================================
offset_start        Le numéro du premier document recherché
per_page            Le nombre de résultats par page
available_results   La quantité de résultats disponibles dans la requête. Ce nombre peut être inférieur à celui des résultats disponibles. Le moteur de recherche "Sphinx" limite par défaut le nombre de résultats à 1000. Toutefois, cette limite est paramétrable.
total_results       Le nombre total des résultats disponibles
error               Erreur du moteur de recherche sous la forme d'une chaîne si il y a
warning             Avertissement du moteur de recherche sous la forme d'une chaîne si il y a
query_time          Le temps d'éxécution de la requête exprimé en secondes
search_indexes      Les index de recherche utilisés par le moteur de recherche
results             La liste des enregistrements trouvés
query               La requête envoyée
suggestions         La liste des suggestions proposées par le moteur de recherche
================== ================================

Exemple de requête
------------------

Rechercher tous les enregistrements qui se trouvent dans la databox 58 et qui ont le status 4 à "on"
ainsi que tous les enregistrements de la databox 52 qui ont le status 5 à "off"

.. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&status[4][on][]=58&status[5][off][]=52" https://mydomain.tld/api/v1/search/

Rechercher tous les enregistrements sur la collection 85:

.. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&bases[]=85" https://mydomain.tld/api/v1/search/

Rechercher les enregistrements qui correspondent à la requête "house" dans les champs "Object" ou "Credit"

.. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&fields[]=Objet&fields[]=Credit&query=house" https://mydomain.tld/api/v1/search/

Exemple de réponse
------------------

Exemple retournant des enregistrements :

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "POST /api/v1/records/search/",
            "response_time": "2012-06-29T18:12:19+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "offset_start": 0,
            "per_page": 10,
            "available_results": 1,
            "total_results": 1,
            "error": "",
            "warning": "",
            "query_time": 0.0003,
            "search_indexes": "",
            "suggestions": [],
            "results": {
                "records": [
                    {
                        "databox_id": 1,
                        "record_id": 644,
                        "mime_type": "image/jpeg",
                        "title": "0050.JPG",
                        "original_name": "0050.JPG",
                        "updated-on": "2012-06-22T21:22:08+02:00",
                        "created_on": "2012-06-22T21:22:08+02:00",
                        "collection_id": 2,
                        "sha256": "9f44884438cab8ad6a8a557c4101ec866e0af2eb58b890c9c0e9cad385181fb8",
                        "thumbnail": {
                            "name": "thumbnail",
                            "permalink": {
                                "created_on": "2012-06-25T18:05:20+02:00",
                                "id": 2016,
                                "is_activated": true,
                                "label": "0050JPG",
                                "updated_on": "2012-06-25T18:05:20+02:00",
                                "page_url": "http://domain.tld/permalink/v1/1/644/thumbnail/?token=m466mwxi",
                                "url": "http://domain.tld/permalink/v1/1/644/thumbnail/0050.JPG?token=m466mwxi",
                                "download_url": "http://domain.tld/permalink/v1/1/644/thumbnail/0050.JPG?token=m466mwxi&download"
                            },
                            "height": 100,
                            "width": 150,
                            "filesize": 3436,
                            "devices": [
                                "screen"
                            ],
                            "player_type": "IMAGE",
                            "mime_type": "image/jpeg"
                        },
                        "technical_informations": [
                            {
                                "name": "Aperture",
                                "value": 5
                            },
                            {
                                "name": "CameraModel",
                                "value": "NIKON D700"
                            },
                            {
                                "name": "Channels",
                                "value": 3
                            },
                            {
                                "name": "ColorDepth",
                                "value": 8
                            },
                            {
                                "name": "ColorSpace",
                                "value": "RGB"
                            },
                            {
                                "name": "FileSize",
                                "value": 3221035
                            },
                            {
                                "name": "FlashFired",
                                "value": 1
                            },
                            {
                                "name": "FocalLength",
                                "value": 70
                            },
                            {
                                "name": "Height",
                                "value": 2832
                            },
                            {
                                "name": "HyperfocalDistance",
                                "value": 32.616371538043
                            },
                            {
                                "name": "LightValue",
                                "value": 11.940613708927
                            },
                            {
                                "name": "MimeType",
                                "value": "image/jpeg"
                            },
                            {
                                "name": "ShutterSpeed",
                                "value": 0.004
                            },
                            {
                                "name": "Width",
                                "value": 4256
                            }
                        ],
                        "phrasea_type": "image",
                        "uuid": "fc766012-a9c8-49eb-bcbd-c6f5270cb6f5"
                    }
                ],
                "stories": []
            },
            "query": "all"
        }
    }

Exemple retournant des reportages :

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "POST /api/v1/search/",
            "response_time": "2012-12-19T18:57:12+01:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "offset_start": 0,
            "per_page": 10,
            "available_results": 35,
            "total_results": 35,
            "error": "",
            "warning": "",
            "query_time": 0.000443,
            "search_indexes": "",
            "suggestions": [],
            "results": {
                "records": [],
                "stories": [
                    {
                        "databox_id": 1,
                        "story_id": 99,
                        "updated_on": "2012-12-19T18:13:46+01:00",
                        "created_on": "2012-12-19T17:07:25+01:00",
                        "collection_id": 2,
                        "thumbnail": {
                            "name": "thumbnail",
                            "permalink": {
                                "created_on": "2012-12-19T18:22:31+01:00",
                                "id": 248,
                                "is_activated": true,
                                "label": "SUPER",
                                "updated_on": "2012-12-19T18:22:31+01:00",
                                "page_url": "http://domain.tld/permalink/v1/1/99/thumbnail/?token=YQlcZVsV",
                                "url": "http://domain.tld/permalink/v1/1/99/thumbnail/SUPER.jpg?token=YQlcZVsV",
                                "download_url": "http://domain.tld/permalink/v1/1/99/thumbnail/SUPER.jpg?token=YQlcZVsV&download"
                            },
                            "height": 133,
                            "width": 200,
                            "filesize": 3566,
                            "devices": [],
                            "player_type": "IMAGE",
                            "mime_type": "image/jpeg"
                        },
                        "uuid": "8142d86b-25e7-4491-8097-18e3af424307",
                        "metadatas": {
                            "dc:contributor": "animals",
                            "dc:coverage": "zoology",
                            "dc:creator": "dolphins ; tigers",
                            "dc:date": null,
                            "dc:description": "SUPER",
                            "dc:format": null,
                            "dc:identifier": null,
                            "dc:language": null,
                            "dc:publisher": null,
                            "dc:relation": null,
                            "dc:rights": null,
                            "dc:source": null,
                            "dc:subject": null,
                            "dc:title": null,
                            "dc:type": null
                        },
                        "records": [
                            {
                                "databox_id": 1,
                                "record_id": 124,
                                "mime_type": "image/jpeg",
                                "title": "upload.jpg",
                                "original_name": "upload.jpg",
                                "updated_on": "2012-12-19T17:44:38+01:00",
                                "created_on": "2012-12-19T17:44:38+01:00",
                                "collection_id": 2,
                                "sha256": "a7f3ec01c4c5efcadc639d494d432006f13b28b9a576afaee4d3b7508c4be074",
                                "thumbnail": null,
                                "technical_informations": [
                                    {
                                        "name": "Aperture",
                                        "value": 2.8
                                    },
                                    {
                                        "name": "CameraModel",
                                        "value": "iPhone 3GS"
                                    },
                                    {
                                        "name": "Channels",
                                        "value": 3
                                    },
                                    {
                                        "name": "ColorDepth",
                                        "value": 8
                                    },
                                    {
                                        "name": "ColorSpace",
                                        "value": "RGB"
                                    },
                                    {
                                        "name": "FileSize",
                                        "value": 81742
                                    },
                                    {
                                        "name": "FlashFired",
                                        "value": 0
                                    },
                                    {
                                        "name": "FocalLength",
                                        "value": 3.85
                                    },
                                    {
                                        "name": "Height",
                                        "value": 800
                                    },
                                    {
                                        "name": "ISO",
                                        "value": 1016
                                    },
                                    {
                                        "name": "Latitude",
                                        "value": 48.874166666667
                                    },
                                    {
                                        "name": "LightValue",
                                        "value": 2.9479532522304
                                    },
                                    {
                                        "name": "Longitude",
                                        "value": 2.3333333333333
                                    },
                                    {
                                        "name": "MimeType",
                                        "value": "image/jpeg"
                                    },
                                    {
                                        "name": "ShutterSpeed",
                                        "value": 0.1
                                    },
                                    {
                                        "name": "Width",
                                        "value": 600
                                    }
                                ],
                                "phrasea_type": "image",
                                "uuid": "4d006e01-bc38-4aac-9a5b-2c90ffe3a8a2"
                            },
                            {
                                "databox_id": 1,
                                "record_id": 57,
                                "mime_type": "image/x-tika-canon",
                                "title": "test001.CR2",
                                "original_name": "test001.CR2",
                                "updated_on": "2012-12-19T16:43:23+01:00",
                                "created_on": "2012-12-19T16:43:23+01:00",
                                "collection_id": 2,
                                "sha256": "450cf64049dcbab04f38a496464d30a0dcef60db25cf1af4ca7161b9ab753311",
                                "thumbnail": {
                                    "name": "thumbnail",
                                    "permalink": {
                                        "created_on": "2012-12-19T16:43:27+01:00",
                                        "id": 144,
                                        "is_activated": true,
                                        "label": "test001CR2",
                                        "updated_on": "2012-12-19T16:43:27+01:00",
                                        "page_url": "http://domain.tld/permalink/v1/1/57/thumbnail/?token=PZDiY5iQ",
                                        "url": "http://domain.tld/permalink/v1/1/57/thumbnail/test001.CR2?token=PZDiY5iQ",
                                        "download_url": "http://domain.tld/permalink/v1/1/57/thumbnail/test001.CR2?token=PZDiY5iQ&download"
                                    },
                                    "height": 133,
                                    "width": 200,
                                    "filesize": 3573,
                                    "devices": [
                                        "screen"
                                    ],
                                    "player_type": "IMAGE",
                                    "mime_type": "image/jpeg"
                                },
                                "technical_informations": [
                                    {
                                        "name": "Aperture",
                                        "value": 22
                                    },
                                    {
                                        "name": "CameraModel",
                                        "value": "Canon EOS-1Ds Mark III"
                                    },
                                    {
                                        "name": "ColorDepth",
                                        "value": 8
                                    },
                                    {
                                        "name": "FileSize",
                                        "value": 12719738
                                    },
                                    {
                                        "name": "FlashFired",
                                        "value": 0
                                    },
                                    {
                                        "name": "FocalLength",
                                        "value": 67
                                    },
                                    {
                                        "name": "Height",
                                        "value": 1856
                                    },
                                    {
                                        "name": "HyperfocalDistance",
                                        "value": 6.7852227790319
                                    },
                                    {
                                        "name": "ISO",
                                        "value": 100
                                    },
                                    {
                                        "name": "LightValue",
                                        "value": 15.884647521937
                                    },
                                    {
                                        "name": "MimeType",
                                        "value": "image/x-tika-canon"
                                    },
                                    {
                                        "name": "ShutterSpeed",
                                        "value": 0.008
                                    },
                                    {
                                        "name": "Width",
                                        "value": 2784
                                    }
                                ],
                                "phrasea_type": "image",
                                "uuid": "7b8ef0e3-dc8f-4b66-9e2f-bd049d175124"
                            },
                            {
                                "databox_id": 1,
                                "record_id": 40,
                                "mime_type": "image/jpeg",
                                "title": "iphone_pic.jpg",
                                "original_name": "iphone_pic.jpg",
                                "updated_on": "2012-12-18T12:38:49+01:00",
                                "created_on": "2012-12-18T12:38:49+01:00",
                                "collection_id": 2,
                                "sha256": "a7f3ec01c4c5efcadc639d494d432006f13b28b9a576afaee4d3b7508c4be074",
                                "thumbnail": {
                                    "name": "thumbnail",
                                    "permalink": {
                                        "created_on": "2012-12-18T12:38:51+01:00",
                                        "id": 77,
                                        "is_activated": true,
                                        "label": "iphone_picjpg",
                                        "updated_on": "2012-12-18T12:38:51+01:00",
                                        "page_url": "http://domain.tld/permalink/v1/1/40/thumbnail/?token=KDWnu5xc",
                                        "url": "http://domain.tld/permalink/v1/1/40/thumbnail/iphone_pic.jpg?token=KDWnu5xc",
                                        "download_url": "http://domain.tld/permalink/v1/1/40/thumbnail/iphone_pic.jpg?token=KDWnu5xc&download"
                                    },
                                    "height": 200,
                                    "width": 150,
                                    "filesize": 0,
                                    "devices": [
                                        "screen"
                                    ],
                                    "player_type": "IMAGE",
                                    "mime_type": "image/jpeg"
                                },
                                "technical_informations": [
                                    {
                                        "name": "Aperture",
                                        "value": 2.8
                                    },
                                    {
                                        "name": "CameraModel",
                                        "value": "iPhone 3GS"
                                    },
                                    {
                                        "name": "Channels",
                                        "value": 3
                                    },
                                    {
                                        "name": "ColorDepth",
                                        "value": 8
                                    },
                                    {
                                        "name": "ColorSpace",
                                        "value": "RGB"
                                    },
                                    {
                                        "name": "FileSize",
                                        "value": 81728
                                    },
                                    {
                                        "name": "FlashFired",
                                        "value": 0
                                    },
                                    {
                                        "name": "FocalLength",
                                        "value": 3.85
                                    },
                                    {
                                        "name": "Height",
                                        "value": 800
                                    },
                                    {
                                        "name": "ISO",
                                        "value": 1016
                                    },
                                    {
                                        "name": "Latitude",
                                        "value": 48.874166666667
                                    },
                                    {
                                        "name": "LightValue",
                                        "value": 2.9479532522304
                                    },
                                    {
                                        "name": "Longitude",
                                        "value": 2.3333333333333
                                    },
                                    {
                                        "name": "MimeType",
                                        "value": "image/jpeg"
                                    },
                                    {
                                        "name": "ShutterSpeed",
                                        "value": 0.1
                                    },
                                    {
                                        "name": "Width",
                                        "value": 600
                                    }
                                ],
                                "phrasea_type": "image",
                                "uuid": "4d006e01-bc38-4aac-9a5b-2c90ffe3a8a2"
                            }
                        ]
                    },
                    {
                        "databox_id": 1,
                        "story_id": 98,
                        "updated_on": "2012-12-19T17:07:25+01:00",
                        "created_on": "2012-12-19T17:07:25+01:00",
                        "collection_id": 2,
                        "thumbnail": null,
                        "uuid": "03cc8432-ef81-435d-bf6f-ef03556ad141",
                        "metadatas": {
                            "dc:contributor": null,
                            "dc:coverage": null,
                            "dc:creator": null,
                            "dc:date": null,
                            "dc:description": null,
                            "dc:format": null,
                            "dc:identifier": null,
                            "dc:language": null,
                            "dc:publisher": null,
                            "dc:relation": null,
                            "dc:rights": null,
                            "dc:source": null,
                            "dc:subject": null,
                            "dc:title": null,
                            "dc:type": null
                        },
                        "records": []
                    }
                ]
            },
            "query": "all"
        }
    }
