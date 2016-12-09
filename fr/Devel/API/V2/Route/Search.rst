Rechercher
==========

A propos
--------

Retourne la liste des enregistrements pour une recherche dont les paramètres
sont donnés en arguments.

.. code-block:: bash

    /api/v2/search/

============================ ======
 Information
============================ ======
 Méthode HTTP                 POST
 Authentification requise     Oui
============================ ======

Paramètres de la requête
------------------------

============= =========== ========= =============
 Paramètres    Type        Exemple   Information
============= =========== ========= =============
 query         string                Equation de recherche ; sa syntaxe est la même que dans Phraseanet. Default value is a string, which equals “all records”
 bases         array                 Un tableau de base_ids ; en l'absence de tableau, la recherche est effectuée sur toutes les collections
 offset_start  int         0         L'offset du premier enregistrement retourné. L'offset de l'enregistrement initial est 0 (et non 1).
 per_page      int         10        Le maximum d'enregistrements à retourner.
 ord           string                Available values are “asc” and “desc”
 sort          string                Available values are “relevance” and “created_on” and “random”
 record_type   string                Pour une recherche sur des documents Phrasenaet, le type documents à filtrer. Les valeurs disponibles sont “audio”, “video”, “image”, “document” et “flash”
 search_type   int         0         Une bascule pour interroger les enregistrements de type Documents ou de type Reportage. La valeur 0 permet la recherche de Documents ; La valeur 1 permet la recherche de Reportages
 date_field    string                Sélectionne le champ de type date sur lequel portent les valeurs des arguments datemin et datemax
 date_min      string                La date minimum contenue dans le champ inscrit comme valeur de l'argument date_field. Cette date est une chaine formatée 'Y/m/d'
 date_max      string                La date maximum contenue dans le champ inscrit comme valeur de l'argument date_field. Cette date est une chaine formatée 'Y/m/d'
 status        array
 fields        array
============= =========== ========= =============

Champs de la corps de la réponse
--------------------------------

================== ================================
 Champ              Description
================== ================================
offset_start        Le début de l'offset
per_page            Le nombre de résultats par page
available_results   Le nombre de résultats disponibles. This number may be lower than available results
total_results       Le nombre de résultats disponibles
error               Le message d'erreur retourné par le moteur de recherche s'il y a lieu
warning             Le message d'alerte retourné par le moteur de recherche s'il y a lieu
query_time          Le temps de traitement de la recherche pour le moteur de recherche exprimé en seconde
search_indexes      Le nom de l'index de recherche utilisé par le moteur de recherche
results             La liste des collections disponibles
query               La question adressée au moteur de recherche
facets
================== ================================

Exemple de requêtes
-------------------

Request all records, filter those on databox_id 58 on status 4 and those
on databox_id 52 on status 5: On databox_id 52, only records
with status number 5 “off” are returned, and on databox_id 58,
only records with status number 4 “on” are returned.

.. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&status[4][on][]=58&status[5][off][]=52" https://mydomain.tld/api/v2/search/

Recherche tous les enregistrements de la collection dont le base_id est 85 :

.. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&bases[]=85" https://mydomain.tld/api/v2/search/

Recherche le terme “house” dans les champs “Object” ou “Credit” :

.. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&fields[]=Objet&fields[]=Credit&query=house" https://mydomain.tld/api/v2/search/

Exemple de réponse
------------------

Exemple retournant trois enregistrements :

.. code-block:: javascript

    {
      "meta": {
        "api_version": "2.0.0",
        "request": "GET /api/v2/search/",
        "response_time": "2016-03-23T18:30:24+01:00",
        "http_code": 200,
        "error_type": null,
        "error_message": null,
        "error_details": null,
        "charset": "UTF-8"
      },
      "response": {
        "offset_start": 0,
        "per_page": 100,
        "available_results": 35,
        "total_results": 35,
        "error": "",
        "warning": "",
        "query_time": 37,
        "search_indexes": "phraseanet_syzwivun7cz8w5zd",
        "facets": [
          {
            "name": "Colorimetrie",
            "values": [
              {
                "value": "Couleurs",
                "count": 2,
                "query": "field.Colorimetrie = Couleurs"
              },
              {
                "value": "N&B",
                "count": 1,
                "query": "field.Colorimetrie = N&B"
              }
            ]
          },
          {
            "name": "Base_Name",
            "values": [
              {
                "value": "db_master",
                "count": 35,
                "query": "database:db_master"
              }
            ]
          },
          {
            "name": "Type_Name",
            "values": [
              {
                "value": "image",
                "count": 33,
                "query": "type:image"
              },
              {
                "value": "video",
                "count": 2,
                "query": "type:video"
              }
            ]
          },
          {
            "name": "TypeLicence",
            "values": [
              {
                "value": "Droits gérés",
                "count": 3,
                "query": "field.TypeLicence = \"Droits gérés\""
              }
            ]
          },
          {
            "name": "Collection_Name",
            "values": [
              {
                "value": "Support Alchemy",
                "count": 35,
                "query": "collection:\"Support Alchemy\""
              }
            ]
          },
          {
            "name": "MotsCles",
            "values": [
              {
                "value": "COSTUME",
                "count": 2,
                "query": "field.MotsCles = COSTUME"
              },
              {
                "value": "Singers",
                "count": 1,
                "query": "field.MotsCles = Singers"
              }
            ]
          }
        ],
        "results": [
          {
            "databox_id": 1,
            "record_id": 117,
            "collection_id": 1,
            "version": 1457687077
          },
          {
            "databox_id": 1,
            "record_id": 114,
            "collection_id": 1,
            "version": 1457615017
          },
          {
            "databox_id": 1,
            "record_id": 86,
            "collection_id": 1,
            "version": 1457687314
          }
        ],
        "search_type": 0
      }
    }
