Aperçu de l'API v1
==================

L’API Phraseanet tend à utiliser un maximum de standards courants.
Les requêtes sont en HTTP POST ou GET et retournent des réponses au
format Json, JSonP, YAML.

Les paramètres doivent êtres envoyés en tant que clefs/valeurs HTTP.

Etant donné que Phraseanet utilise :doc:`oAuth2 <Authentification>` comme
protocole d'authentification, il est important que votre serveur soit configuré
pour supporter les requêtes authentifiées (https ou HTTPS)

Quotas
------

Il n'y a pas de quotas en v1, Le nombre de requêtes n'est pas limité.

Accés anonyme
-------------

Il n’y a pas d’accès anonyme ou public dans l’API Phraseanet V1.

Réponses
--------

Toutes les réponses sont encapsulées dans un objet contenant
deux champs : response et meta.

Les réponses sont renvoyés par défaut dans un format Json.

.. note::

    Un champ optionnel **timers**, fournissant un tableau de timers, peut être
    obtenu en activant cette fonctionalité. Consulter le chapitre
    :doc:`configuration <../../../Admin/Configuration>` pour activer ce service.

    exemple de timer :

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

YAML
~~~~

Comme le précise les spécifications HTTP, Pour obtenir une réponse au format YAML
Il faut définir un paramétre 'Accept' dans l'en-tête de la requête HTTP.

Requête :

.. code-block:: bash

    curl -H 'Accept: application/yaml' ...

Réponse :

.. code-block:: yaml

    meta:
      api_version: '1.2'
      request: 'GET /api/v1/feeds/288/content/'
      response_time: '2011-07-27T16:36:33+02:00'
      http_code: 200
      error_type: null,
      error_message: null
      error_details: null
      charset: UTF-8
    response:
      ....

Json
~~~~

Requête :

.. code-block:: bash

    curl -H 'Accept: application/json' ...

Réponse :

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

JsonP
~~~~~~

Pour obtenir une réponse au format JSONP, ajouter un paramètre HTTP 'callback'
à la requête.

Requête :

.. code-block:: bash

    curl -H 'Accept: application/json' /api/v1/my/request/?callback=foobar

.. note::

    Dans le cas d’une réponse au format JsonP, l’Api retourne toujours
    un code de réponse HTTP 200 (à l’exception du code 500) dans le champ Response.
    Cela a pour conséquence de permettre l'exécution du code exploitant la requête.
    Le code de réponse HTTP le plus significatif se trouve dans le champ Meta.

Réponse :

.. code-block:: javascript

    foobar({
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/feeds/288/content/",
            "response_time": "2011-07-27T15:52:04+02:00",
            "http_code": 200,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            ....
        }
    })

Erreurs
-------

Le champ Meta contient des données comme les “http_code”, “error_message” et
“error_details”.

L’API Phraseanet utilise les codes de réponse HTTP.
Ces codes sont présents dans le champ Meta des réponses auxquels s’ajoutent les
messages d’erreur.

Le tableau ci-dessous liste et décrit les principaux codes d’erreurs.

HTTP Code   Sens
400         Un paramètre de la requête est manquant ou invalide
401         Le token d'authentification fournit n'est pas valide
403         L'accés aux ressources demandées n'est pas authorisé.
404         La ressource demandée n'a pas été trouvé.
405         Utilisation d'une requête POST au lieu d'une requête GET, et vice versa
500         Erreur interne du serveur
