Webhooks
========

Each OAuth2 client application can receive information from Phraseanet through
*Webhooks*. Its purpose is to send HTTP requests with the POST verb to a given
URL when an event occurs in Phraseanet.
These *Webhooks* can be used to perform specific actions in client application
such as sending emails, running updates, notifiying of new flows...etc.
Webhooks extend functionalities of the client application.

Events
------

A *webhook* can be configured to trigger one or more events.
The client application must support the listening to these events.

.. note::

    Phraseanet trigger *webhooks* only when a new entry is created in a
    RSS feed.
    For instant, It is not possible to configure the type of event to trigger.
    But we stand prepared for this possibility in the near future.

**One event available**

+------------------------------+--------------------------------------------------------------------------------------+
| Name                         | Description                                                                          |
+==============================+======================================================================================+
| new_feed_entry               | A new entry of a RSS feed is created.                                                |
+------------------------------+--------------------------------------------------------------------------------------+

Data
----

The data sent for each event are in JSON format.
Each event has a JSON schema with a "name" key to represent the type of event.

Example of JSON object sent by Phraseanet.

.. code-block:: javascript

    {
        "name" : ":event_name",
        ...
    }

Only relevant data differ.

**List of useful data objects per event**

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
