Me accès collections
====================

A propos
--------

Retourne la liste des collections pour l'utilisateur authentifié, liste les collections
auxquelles il a accès ainsi que les droits dont il dispose.

.. code-block:: bash

    /api/v1/me/collections

======================== ======
 Informations
======================== ======
 HTTP Method              GET
 Requires Authentication  Yes
======================== ======

Les informations retournées sur les collections sont plus complètes que celles de la `route Me <Me.html>`_. Les attributs supplémentaires sont :

* **name** : nom de la collection
* **logo** : chemin du logo représentant la collection
* **labels** : tableau des labels utilisés pour chacune des langue

Attribut de la réponse
----------------------

================== ================================
 Attribut           Description
================== ================================
 collections        Informations sur les collections
================== ================================

Exemple de requête
------------------

.. code-block:: bash

    curl -v https://mydomain.tld/api/v1/me/collections?oauth_token=xxxxxxx

Exemple de réponse
------------------

.. note::

    Pour l'ensemble des requêtes de l'API nécessitant un numéro de collection, utilisez l'attribut **base_id** (et non pas **collection_id**).

.. code-block:: json

    {
      "meta": {
        "api_version": "2.0.0",
        "request": "GET /api/v1/me/collections/",
        "response_time": "2021-06-23T18:43:44+02:00",
        "http_code": 200,
        "error_type": null,
        "error_message": null,
        "error_details": null,
        "charset": "UTF-8"
      },
      "response": {
        "collections": [
          {
            "databox_id": 1,
            "base_id": 2,
            "collection_id": 1,
            "name": "Demo Online",
            "logo": "",
            "labels": {
              "fr": "Demo Online",
              "en": "Demo Online",
              "de": "Demo Online",
              "nl": "Demo Online"
            },
            "rights": [
              "actif",
              "canaddrecord",
              "canadmin",
              "cancmd",
              "candeleterecord",
              "candwnldhd",
              "candwnldpreview",
              "canmodifrecord",
              "canpush",
              "canputinalbum",
              "canreport",
              "chgstatus",
              "imgtools",
              "manage",
              "modify_struct",
              "nowatermark"
            ],
            "statuses": [
              {
                "position": 5,
                "labels": {
                  "on": {
                    "de": "Exclu",
                    "en": "Exclu",
                    "fr": "Exclu",
                    "nl": "Exclu"
                  },
                  "off": {
                    "de": "Libre",
                    "en": "Libre",
                    "fr": "Libre",
                    "nl": "Libre"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              },
              {
                "position": 6,
                "labels": {
                  "on": {
                    "de": "Légende OK",
                    "en": "Légende OK",
                    "fr": "Légende OK",
                    "nl": "Légende OK"
                  },
                  "off": {
                    "de": "Légende à éditer",
                    "en": "Légende à éditer",
                    "fr": "Légende à éditer",
                    "nl": "Légende à éditer"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              },
              {
                "position": 7,
                "labels": {
                  "on": {
                    "de": "Mots clés OK",
                    "en": "Mots clés OK",
                    "fr": "Mots clés OK",
                    "nl": "Mots clés OK"
                  },
                  "off": {
                    "de": "Mots clés à vérifier",
                    "en": "Mots clés à vérifier",
                    "fr": "Mots clés à vérifier",
                    "nl": "Mots clés à vérifier"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              },
              {
                "position": 8,
                "labels": {
                  "on": {
                    "de": "Public",
                    "en": "Public",
                    "fr": "Public",
                    "nl": "Public"
                  },
                  "off": {
                    "de": "Privé",
                    "en": "Privé",
                    "fr": "Privé",
                    "nl": "Privé"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              }
            ]
          }
        ]
      }
    }