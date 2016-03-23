Ajout d'un reportage
====================

A propos
--------

Ajout de reportages

.. code-block:: bash

    /api/v1/stories

======================== ==================
 Informations
======================== ==================
 HTTP Method              POST
 Requires Authentication  Oui
 Content-Type             application/json
======================== ==================

Paramètres
----------

Les paramètres doivent être encodés en json et passés dans le "body" de la requête.

Plusieurs reportages peuvent être créés par une seule requête, le paramètre "stories" est donc un tableau de reportages.

============= ============== =======================================================================================
 Paramètre     Type           Information
============= ============== =======================================================================================
 title         chaîne         Le titre du reportage
 base_id       entier         L'identifiant de base, comme retourné par :doc:`Databox Collections <../Databox/Collections>`
============= ============== =======================================================================================

.. code-block:: javascript

    {
        "stories": [
            {
                "title": "Story 1",
                "base_id": 494,
            },
            {
                "title": "Story 2",
                "base_id": 495
            }
        ]
    }


Paramètre optionnel : metadatas
-------------------------------

Les métadonnées peuvent être initialisée pour le reportage créé, les champs peuvent être spécifiés par nom ou par id
(comme retournés par la route :doc:`Structure documentaire <../Databox/Metadatas>`) :


============== ============== ============================================================
 Paramètres     Type           Information
============== ============== ============================================================
 metadatas      objet         | champs à initialiser
                              | - clé : nom ou id de champ
                              | - valeur : valeur du champ, peut être un tableau pour les champs multivalués
============== ============== ============================================================

.. code-block:: javascript

    ...
    {
        "title": "Story 1",
        "base_id": 494,
        "metadatas": {
            "City": "Paris",
            "Country": "France",
            "7": "John",
            "Keywords": [
                "Eiffel tower",
                "Champs Elysées",
                "Arc de Triomphe"
            ]
        }
    },
    ...


Paramètre optionnel : Elements de reportage / Image représentative
------------------------------------------------------------------

Chaque reportage à créer peut être alimenté avec des documents existants :

============== ============== ========================================================
 Paramètres     Type           Information
============== ============== ========================================================
 databox_id     entier         Le databox_id du document à ajouter au reportage
 record_id      entier         Le record_id du document à ajouter
 use_as_cover   booléen        Utiliser ce document comme image représentative
============== ============== ========================================================

.. code-block:: javascript

    ...
    {
        "title": "Story 1",
        "base_id": 494,
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
    ...

.. note:: Seuls les documents de type "image" peuvent être utilisés comme image représentative pour un reportage.
    Pour faciliter la création, le paramètre "use_as_cover" peut être spécifié pour plusieurs (ou tous) documents :
    Le premier document de type "image" sera élu. Si aucun document ne convient cela ne déclenche pas d'erreur
    mais le reportage créé sera représenté par une icone de "dossier".


.. seealso:: :doc:`Ajouter des documents à un reportage <./AddRecords>`

Example de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.4.1",
            "request": "POST /api/v1/stories",
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