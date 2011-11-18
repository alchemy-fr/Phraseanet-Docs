Aperçu de l'API v1
==================

L'API Phraseanet tend à utiliser un maximum de standard que vous 
trouverez ailleurs.
Les requêtes sont en HTPP POST ou GET et retournent des réponses au 
format YAML, Json ou JSonP.

Les paramètres doivent êtres envoyés en tant que clefs/valeurs HTTP.

Etant donné que Phrasenet utilise oAuth2 comme protocole d'authentification, 
il estimportant que votre serveur soit configuré pour supporter les requêtes 
authentifiées (https)

Quotas
------

Il n'y a pas de quotas en v1, vous pouvez faire autant de requêtes 
que vous le souhaitez

Acces anonyme
-------------

Il n'y a pas d'accès anonyme / public à l'API Phraseanet pour le moment.

Réponses
--------

Toutes les réponses sont encapsulées dans un objet contenant 
deux champs : response et meta
All responses are wrapped in an object containing two fields : response and meta.
Les réponses sont renvoyés en Json par défaut.


YAML
~~~~

As of HTTP specification, you have to set an 'Accept' header if you want to fetch YAML.

Requête :

.. code-block:: bash

    curl -H 'Accept: application/yaml' ... 

Réponse :

.. code-block:: yaml

    meta:
      api_version: '1.0'
      request: 'GET /api/v1/feeds/288/content/'
      response_time: '2011-07-27T16:36:33+02:00'
      http_code: 200
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
            "api_version": "1.0",
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
    }

JsonP
~~~~~~

In order to fetch JSONP, you just have to add a callback HTTP parameter to your request.


Requête :

.. code-block:: bash

    curl -H 'Accept: application/json' /api/v1/my/request/?callback=foobar 


Please note that in the case of JSONP, the API **always** returns 200 
(except for HTTP 500's) so your code can proceed the results ; you can have 
the true HTTP Code in the meta section.

Réponse :

.. code-block:: javascript

    foobar({
        "meta": {
            "api_version": "1.0",
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

The meta section contains few values, among "http_code", "error_message" and "error details".

Phraseanet API uses the appropriate HTTP status codes. 

This code is repeated in the meta of the response, and the error_message is added.

You will find explanation below:

=========== =======
HTTP Code   Meaning
=========== =======
400         Parameter is invalid or missing 
401         The OAuth token was provided but was invalid 
403         Access to the requested resource is forbidden
404         Requested resource is not found
405         Attempting to use POST with a GET-only endpoint, or vice versa
500         Internal Server Error
=========== =======
