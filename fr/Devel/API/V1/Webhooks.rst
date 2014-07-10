Webhooks
========

Chaque application cliente oauth2 a la possibilité de recevoir des informations de la part de Phraseanet
par l'intermédiaire des *webhooks*. Il s'agit d'envoyer une requête HTTP avec le verbe POST vers une URL donnée quand
un évènement se produit sur Phraseanet.
Ces *webhooks* peuvent être utilisés pour effectuer des actions particulières comme l'envois d'e-mails,
l'exécution de mises à jours, la notification de nouveaux flux...etc. afin d'étendre les fonctionnalités d'une
application cliente.

Evénements
----------

Un *webhook* peut être configuré pour déclencher un ou plusieurs événements en particulier.
L'application cliente doit prendre en charge l'écoute de l'événement à déclencher.

.. note::

    Pour l'instant Phraseanet ne déclenche de *webhooks* que lorsqu'une nouvelle entrée est créée dans un flux RSS.
    Il n'est donc pas à ce jour possible de configurer le type d'événement à déclencher. Mais il faut se tenir préparé à
    cette éventualité dans un futur proche.

**Un seul événement disponible**

+------------------------------+--------------------------------------------------------------------------------------+
| Name                         | Description                                                                          |
+==============================+======================================================================================+
| new_feed_entry               | Une nouvelle entrée d'un flux RSS est créée.                                         |
+------------------------------+--------------------------------------------------------------------------------------+

Les données
-----------

Les données envoyées pour chaque événement sont au format JSON.
Chaque événement possède un schéma JSON avec pour une clé "name" pour représenter le type d'évènement.

Exemple d'objet JSON envoyé par Phraseanet.

.. code-block:: javascript

    {
        "name" : ":event_name",
        ...
    }

Seules les données utiles diffèrent.

**Liste des objets de données utiles par évènement**

* **NewFeedEntry**

.. code-block:: javascript

    {
        "name": "new_feed_entry",
        "users_were_notified": false,
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
