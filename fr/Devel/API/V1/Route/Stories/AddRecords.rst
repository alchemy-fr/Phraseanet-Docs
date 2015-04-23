Ajouter des documents à un reportage
====================================

About
-----

Ajouter des documents à un reportage existant

.. code-block:: bash

    /api/v1/stories/{databox_id}/{story_id}/addrecords

======================== ==================
 Informations
======================== ==================
 HTTP Method              POST
 Requires Authentication  Oui
 Content-Type             application/json
======================== ==================

Paramètres
----------

============== ============== ========================================================
 Paramètres     Type           Information
============== ============== ========================================================
 databox_id     entier         L'identifiant de la databox contenant le reportage
 story_id       entier         L'identifiant du reportage
============== ============== ========================================================

D'autres paramètres (documents à ajouter au reportage) doivent être encodés en json et passés dans le "body" de la requète.

============== ============== ========================================================
 Paramètres     Type           Information
============== ============== ========================================================
 databox_id     entier         L'identifiant de la databox contenant le document à insérer dans le reportage
 record_id      entier         L'identifiant du document à insérer
 use_as_cover   booléen        Utiliser ce document comme image représentative
============== ============== ========================================================

.. code-block:: javascript

    {
        "story_records": [
            {
                "databox_id": 3,
                "record_id": 209,
            },
            {
                "databox_id": 3,
                "record_id": 210,
                "use_as_cover": true
            }
        ]
    }

.. note:: Seuls les documents de type "image" peuvent être utilisés comme image représentative pour un reportage.
    Pour faciliter la création, le paramètre "use_as_cover" peut être spécifié pour plusieurs (ou tous) documents :
    Le premier document de type "image" sera élu. Si aucun document ne convient cela ne déclenche pas d'erreur
    mais le reportage créé sera représenté par une icone de "dossier".



Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.4.1",
            "request": "POST /api/v1/stories/3/281/addrecords",
            "response_time": "2015-04-22T13:31:46+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "stories": [
                "/stories/3/291/",
                "/stories/3/292/"
            ]
        }
    }