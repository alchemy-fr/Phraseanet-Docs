Modifier une métadonnée d'un document
=====================================

A propos
--------

  Modifie, ajoute une métadonnée à un document

  .. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/setmetadatas/

  ========================== =====
   Informations
  ========================== =====
   Méthode HTTP              POST
   Authentification requise  Oui
  ========================== =====

Paramètres
----------

  ================== ========= =============
   Paramètres         Type      Information
  ================== ========= =============
   databox_id         entier    L'identifiant de la databox auquel appartient le document
   record_id          entier    L'identifiant du document sélectionné
   metadatas          tableau   Un tableau de métadonnées. Chaque métadonnées est un tableau avec trois clés : meta_struct_id (entier), meta_id (entier ou null) and value (tableau)
  ================== ========= =============

Attribut de la réponse
----------------------

  ================== ================================
   Attribut            Description
  ================== ================================
   record_metadatas    La liste des métadonnées
  ================== ================================

** Exemple **

  .. code-block:: javascript

    metadatas[0][meta_struct_id]=1&
    metadatas[0][meta_id]=&
    metadatas[0][value]=prettystring&
    metadatas[1][meta_struct_id]=3&
    metadatas[1][meta_id]=487&
    metadatas[1][value]=onekeyword&
    metadatas[2][meta_struct_id]=3&
    metadatas[2][meta_id]=488&
    metadatas[2][value]=twokeyword&
    metadatas[3][meta_struct_id]=7&
    metadatas[3][meta_id]=489&
    metadatas[3][value]=&

est équivalent à

  .. code-block:: javascript

    record_metadatas = {
        {
            meta_struct_id: 1,        // La metadonnée se referre à la meta_struct_id '1' ; voir [[routes:databoxes:metadatas]]
            meta_id: null,            // La metadonnée se referre au champs de légende meta_id ; voir [[routes:records:metadatas]] ; ce cas, meta_id est nul car il n'y a actuellement aucune valeur définie, le champ sera créé
            value : 'A pretty string' // 'value' est toujours une chaîne
        },
        {
            meta_struct_id: 3,
            meta_id: 487,          // meta_id n'est pas nul car il ya actuellement déjà des données, le champ sera mis à jour
            value: 'one key word'
        },
        {
            meta_struct_id: 3,
            meta_id: 488,
            value: 'two key word'
        },
        {
            meta_struct_id: 7,
            meta_id: 489,
            value: ''              // La valeur est vide, le champ sera supprimé
        }
    }

Exemple de réponse
------------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/records/52/5780/metadatas/",
            "response_time": "2011-07-27T12:55:47+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "metadatas": {
                "6271": {
                    "meta_id": 6271,
                    "meta_structure_id": 1,
                    "name": "Objet",
                    "value": "prettystring"
                },
                "487": {
                    "meta_id": 487,
                    "meta_structure_id": 3,
                    "name": "Categorie",
                    "value": "onekeyword"
                },
                "488": {
                    "meta_id": 488,
                    "meta_structure_id": 3,
                    "name": "Categorie",
                    "value": "twokeyword"
                }
            }
        }
    }