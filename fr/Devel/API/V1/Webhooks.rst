Webhooks
========

Chaque application cliente oauth2 de Phraseanet à la possibilité de recevoir des informations de la part de Phraseanet
par l'intérmédiaire des "webhooks", il s'agit  d'envoyer une requête HTTP avec le verbe POST vers une URL donnée
quand un évènement se produit sur Phraseanet.
Ces "webhooks" peuvent être utilisés pour effectuer des actions particulières, des envoies de mails, des mises à jours etc...
afin d'étendre les fonctionnalités d'une application cliente. Par exemple notifier tous les utilisateurs lorsqu'un
nouveaux flux est disponible.

Evènements
----------

Un "webhook"  peut être configuré pour être déclencher pour un ou plusieurs événements en particulier.
L'application cliente doit prendre en charge l'écoute de l'événement que l'on souhaite déclencher.

.. note::

    Pour l'instant Phraseanet ne déclenche un "webhooks" que lorsqu'une nouvelle entrée d'un flux RSS est créée.
    Il n'est donc pas encore possible de configurer le type d'évnèment à déclencher. Mais il faut se tenir
    préparé à cette eventualité dans un futur proche.

**Liste des évènements**

+------------------------------+--------------------------------------------------------------------------------------+
| Name                         | Description                                                                          |
+==============================+======================================================================================+
| new_feed_entry               | Une nouvelle entrée d'un flux RSS est créée.                                         |
+------------------------------+--------------------------------------------------------------------------------------+

Les données
-----------

Les données envoyées pour chaque évènement sont au format JSON.
Chaque évènement possède un schema JSON similaire.

Représentation commune d'un objet JSON envoyé par Phraseanet.

.. code-block:: javascript

    {
        "name" : ":event_name",
        "data" : {}
    }

Seul les données utiles diffèrent, elle sont définis par la propriété "data" de l'objet JSON.

**Liste des objets de données utiles par évènement**

* NewFeedEntry

.. code-block:: javascript

    {
        "feed": {
            "title": "Cannes Festival",
            "description": "Your everyday news about cannes festival",
            "is_public": false
        },
        "entry": {
            "author": {
                "name": "nicolas@fdc.fr",
                "email": "nicolas@fdc.fr"
            },
            "title": "PRESS CONFERENCE - Winners",
            "description": "At the end of the Closing Ceremony, the winners have come, each in turn, speak to the press."
        },
        "users": [
            {
                "mail": "bradley72@yahoo.com",
                "firstname": "John",
                "lastname": "Bradley"
            },
            {
                "mail": "king.benett@movie-news.org",
                "firstname": "Johnatan",
                "lastname": "Benett"
            }
        ]
    }
