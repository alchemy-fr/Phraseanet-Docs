Présentation de l'API v2
========================

L'API Phraseanet utilise le standard HTTP v1.1. Les requêtes sont de type
GET, POST, PUT ou POST, et retournent une réponse en JSON.

Les paramètres doivent être envoyés en tant que paramètres de requête JSON Body
ou HTTP selon la route utilisée.
Le Client *DOIT* paramétrer le header Content-Type à application/json lorsqu'une
requête JSON est requise.
Le Client *DOIT* paraméter le header Accept à application/json pour toutes
les requêtes.

L'API Phraseanet utilisant oAuth2 pour l'authentification, le serveur web doit
être paramétré pour utiliser le protocole HTTPS.

Quotas
------

Il n'y a pas de quota ou de limite dans l'API v2.

Accès public
------------

Il n'y a pas d'accès public aux ressources exposées par l'API.

Réponses
--------

Toutes les réponses sont fournies comme un objet contenant deux champs :
**response** et **meta**.
Response est adressé comme donnée JSON.

.. note::

    Des champs **timers** fournissant des données temporelles peuvent être activés dans la configuration Phraseanet. Se reporter à
    :doc:`cette page <../../../Admin/Configuration>` pour l'activer.

Exemple avec les *timers* activés :

.. code-block:: javascript

    {
        "meta": {
            ....
        },
        "response": {
            ....
        },
        "timers": [
            {
              "name": "api.load.end",
              "memory": 1908328,
              "time": 0.0025968551635742
            },
            {
              "name": "api.result",
              "memory": 3885680,
              "time": 0.033026933670044
            }
        ]
    }

Json
~~~~

Requête:

.. code-block:: bash

    curl -H 'Accept: application/json' ...

Réponse:

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/feeds/288/content/",
            "response_time": "2011-07-27T15:52:04+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            ....
        }
    }

Erreurs
-------

Le section meta fournit des informations comme les codes de retour HTTP, les
messages d'erreur ou des détails sur les erreurs.

L'API Phrasenaet utilise les codes de statut HTTP.

Le code de statut est retourné dans la section meta de la réponse (http_code),
et, s'il y a lieu, un message d'erreur peut être donné (error_message).

Aperçu des codes d'erreurs HTTP retournés :

=========== =======
HTTP Code   Meaning
=========== =======
400         La syntaxe de la requête est erronée, Paramètre de la requête invalide ou manquant
401         L'authentification est nécessaire pour accéder à la ressource Le jeton OAuth fournis est invalide
403         Le serveur a compris la requête, mais refuse de l'exécuter
404         Ressource non trouvée
405         Méthode de requête non autorisée (POST est utilisé à la place de GET, ou inversement)
500         Erreur interne du serveur
=========== =======

