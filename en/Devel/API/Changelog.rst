API Changelog
=============

1.3
---

Version 1.3 of Phraseanet API is brought with Phraseanet 3.7.5.
This upgrade is fully backward compatible and introduces the concept of Story to
the API.

New routes
**********

- :doc:`stories/story <V1/Route/Stories/Story>` Story route.
- :doc:`stories/story <V1/Route/Stories/Embed>` Story embed.
- :doc:`search <V1/Route/Search>` The new search engine compatible with stories.

Deprecated routes
*****************

- :doc:`records/search <V1/Route/Records/Search>`. We
  strongly encourage developers to upgrade their code to support the new API.

Updated routes
**************

- :doc:`records/search <V1/Route/Records/Related>` now list related stories as
  long as baskets.

1.2
---

Version 1.2 of Phraseanet API is not backward compatible with the previous one.

- A bug has been fixed in :doc:`feed content <V1/Route/Feeds/Content>` and the
  route :doc:`feeds/content <V1/Route/Feeds/Content>` has been updated.

- A couple routes have been updated

    - Record subdefinition :doc:`record/embed <V1/Route/Records/Embed>`
    - Record metadatas :doc:`record/metadatas <V1/Route/Records/Metadatas>`
    - Record caption :doc:`record/caption <V1/Route/Records/Caption>`
    - Record search :doc:`record/search <V1/Route/Records/Search>`
    - Databox document structure :doc:`databox/metadatas <V1/Route/Databox/Metadatas>`
    - Task description :doc:`monitor/tasks <V1/Route/Monitor/Tasks>`
      & :doc:`monitor/task <V1/Route/Monitor/Task>`
    - Basket description :doc:`basket/list <V1/Route/Baskets/List>`
    - Basket element description :doc:`basket/content <V1/Route/Baskets/Content>`

- Object with numeric attributes have been removed. All collection objects are
  now presented as an array of objects.

**Before**

.. code-block:: javascript

    "response": {
        "items": {
            "1" : {
                "item_id": 1,
            },
            "3" : {
                "item_id" : 3
            }
        }
    }

**version 1.2**

.. code-block:: javascript

    "response": {
        "items": [
            {
                "item_id": 1,
            },
            {
                "item_id" : 3
            }
        ]
    }

Entries response from aggregated feeds
**************************************

Attribute **feed_id** has been added, it describes the feed identifier of the
entry.

Record response
***************

Attribute **last_modification** has been replaced by **updated_on**.

Permalink response
******************

Attribute **last_modified** has been replaced by **updated_on**.

Embedable medias response
*************************

The embedable media is now an array of embedable objects.

The **name** attribute has been added.

**Before**

.. code-block:: javascript

    "response": {
            "embed": {
              "document": {
                    "permalink": {
                        "created_on": "2012-06-22T21:20:55+02:00",
                        "id": 1972,
                        "is_activated": true,
                        "label": "0113JPG",
                        "updated_on": "2012-06-22T21:20:55+02:00",
                        "page_url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/gAZMiywc/document/view/",
                        "url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/gAZMiywc/document/"
                    },
                    "height": 4256,
                    "width": 2832,
                    "filesize": 1101093,
                    "devices": [
                    "all"
                    ],
                    "player_type": "IMAGE",
                    "mime_type": "image/jpeg"
                }
        }

**version 1.2**

.. code-block:: javascript

    "response": {
            "embed": [
            {
                "name": "document",
                "permalink": {
                    "created_on": "2012-06-22T21:20:55+02:00",
                    "id": 1972,
                    "is_activated": true,
                    "label": "0113JPG",
                    "updated_on": "2012-06-22T21:20:55+02:00",
                    "page_url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/gAZMiywc/document/view/",
                    "url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/gAZMiywc/document/"
                },
                "height": 4256,
                "width": 2832,
                "filesize": 1101093,
                "devices": [
                "all"
                ],
                "player_type": "IMAGE",
                "mime_type": "image/jpeg"
            }

Record metadatas response
*************************

The response of a record metadatas is now contained in a **record_metadatas**
attribute.

.. code-block:: javascript

    "response": {
        "record_metadatas": [
        {
            "meta_id": 4437,
            "meta_structure_id": 1,
            "name": "Object",
            "value": "smoke"
        },
        {
            "meta_id": 4438,
            "meta_structure_id": 4,
            "name": "Keywords",
            "value": "fumée"
        }
        ]
    }

Databox document structure response
***********************************

The response of a databox document structure is now contained in a
**document_metadatas** attribute.

.. code-block:: javascript

   "response": {
            "document_metadatas": [
            {
                "id": 1,
                "namespace": "IPTC",
                "source": "IPTC:ObjectName",
                "tagname": "ObjectName",
                "name": "Object",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            },
            {
                "id": 2,
                "namespace": "IPTC",
                "source": "IPTC:Category",
                "tagname": "Category",
                "name": "Category",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            }
        ]
    }

Task response
*************

Three fields have been added to the response that describe a task.

- **auto_start**
- **runner**
- **crash_counter**

.. code-block:: javascript

    "response": {
        "task": {
            "id": 2,
            "name": "Subviews creation",
            "state": "started",
            "pid": 15705,
            "title": "Subviews creation",
            "last_exec_time": "2012-06-13T14:38:38+02:00",
            "auto_start": true,
            "runner": "scheduler",
            "crash_counter": 0
        }
    }

Caption record response
***********************

The response of a caption record is now contained in **caption_metadas** attribute

.. code-block:: javascript

    "response": {
        "caption_metadatas": [
            {
                "meta_structure_id": 29,
                "name": "Bits",
                "value": "8"
            },
            {
                "meta_structure_id": 30,
                "name": "Channels",
                "value": "3"
            }
        ]
    }

Basket response
***************

A **validation_basket** attribute has been added to the
basket response, it indicates whether it is a validation basket or not.

.. code-block:: javascript

    "response": {
        "basket": {
            "basket_id": 144,
            "created_on": "2012-06-18T16:29:37+02:00",
            "description": "",
            "name": "hello",
            "pusher_usr_id": null,
            "ssel_id": 144,
            "updated_on": "2012-06-18T16:29:37+02:00",
            "unread": false,
            "validation_basket": false
        }
    }

Basket content response
***********************

The **basket_elements** at the root of the response returns only an array of
basket elements.

A **basket** attribute has been added to the root of the response and
describes the requested basket.

.. code-block:: javascript

    "response": {
        "basket_elements": [
            {
                "basket_element_id": 9,
                "order": 4,
                "record": {

                }
            }
        ],
        "basket": {
            "basket_id": 144,
            "created_on": "2012-06-18T16:29:37+02:00",
            "description": "",
            "name": "hello",
            "pusher_usr_id": null,
            "ssel_id": 144,
            "updated_on": "2012-06-18T16:29:37+02:00",
            "unread": false,
            "validation_basket": false
        }
    }

The **choice** attribute has been replace by **validation_choices** which now
contains an array of validation choice with a new **validation_user** attribute.

**version 1.2**

.. code-block:: javascript

    {
        "basket_element_id": 25,
        "order": 7,
        "phrasea_type": "image",
        "uuid": "fc766012-a9c8-49eb-bcbd-c6f5270cb6f5"
        "validation_item": true,
        "record": {
            ...
        },
        "technical_informations": [
            ...
        ],
        "validation_choices": [
        {
            "validation_user": {
                "usr_id": 3,
                "usr_name": "durand.t@gmail.com",
                "confirmed": false,
                "can_agree": true,
                "can_see_others": true,
                "readonly": false
            },
            "agreement": null,
            "updated_on": "2012-06-29T16:32:50+02:00",
            "note": ""
        },
        {
            "validation_user": {
                "usr_id": 722,
                "usr_name": "martin.s@yahoo.com",
                "confirmed": false,
                "can_agree": true,
                "can_see_others": true,
                "readonly": true
            },
            "agreement": null,
            "updated_on": "2012-06-29T16:32:50+02:00",
            "note": ""
        }
        ],
        "agreement": null,
        "note": ""
    }

Searching for a records
***********************

Some parameters from :doc:`records/search <V1/Route/Records/Search>` have been
renamed :

- datefield => date_field
- datemin   => date_min
- datemax   => date_max

The **page** parameter from the request and the associated response field have
been replaced by **offset_start**

.. code-block:: javascript

    "response": {
        "offset_start": 0,
        "per_page": 10,
        "available_results": 1,
        "total_results": 1,
        "error": "",
        "warning": "",
        "query_time": 0.000342,
        "search_indexes": "",
        "suggestions": [],
        "results": [{
            ....
         }]
    }

Feeds response
**************

Attribute *is_mine* has been removed and is replaced by two new attributes :
*readonly* and *deletable*.

.. code-block:: javascript

    "feeds": {
        "288": {
            "id": 288,
            "title": "News",
            "subtitle": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. ",
            "total_entries": 0,
            "icon": "/skins/icons/rss32.gif",
            "public": false,
            "readonly": true,
            "deletable": false,
            "created_on": "2011-07-20T18:45:20+02:00",
            "updated_on": "2011-07-20T18:45:20+02:00"
        },

.. note::

    These attributes have also been added in :doc:`feeds/list <V1/Route/Feeds/List>`.

Bug fix
*******

:doc:`feed content <V1/Route/Feeds/Content>` route response was looking like

.. code-block:: javascript

    "response": {
        "offset_start": 0,
        "entries": {
            "offset_start": 0,
            "entries": {
                ...
            }
        }
    }

This wrong behavior has been fixed and the response is correctly returned as of
1.2.

.. code-block:: javascript

    "response": {
        "offset_start": 0,
        "entries": {
            ...
        }
    }

Route add
*********

- Add route :doc:`/ <Root>`
- Add route :doc:`/records/add/ <V1/Route/Records/Add>`
- Add route :doc:`/quarantine/list/ <V1/Route/Quarantine/List>`
- Add route :doc:`/quarantine/item/ <V1/Route/Quarantine/Item>`
- Add route :doc:`/monitor/scheduler/ <V1/Route/Monitor/Scheduler>`
- Add route :doc:`/monitor/phraseanet/ <V1/Route/Monitor/Phraseanet>`
- Add route :doc:`/monitor/tasks/ <V1/Route/Monitor/Tasks>`
- Add route :doc:`/monitor/task/ <V1/Route/Monitor/Task>`
- Add route :doc:`/monitor/task/start/ <V1/Route/Monitor/TaskStart>`
- Add route :doc:`/monitor/task/stop/ <V1/Route/Monitor/TaskStop>`
- Add route :doc:`/feeds/content/ <V1/Route/Feeds/Aggregated>`
- Add route :doc:`/feeds/entry/ <V1/Route/Feeds/Entry>`

Thumbnails
**********

Before 1.2, a substitution file was provided by the API when a record thumbnail
was not available.
This substitution file is not provided anymore. Thus, the thumbnail key can
be *null* :

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/records/2/132/",
            "response_time": "2012-06-13T14:06:21+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "record": {
                "databox_id": 2,
                "record_id": 132,
                "mime_type": "image/jpeg",
                "title": "photo03.JPG",
                "original_name": "photo03.JPG",
                "last_modification": "2012-06-13T13:50:29+02:00",
                "created_on": "2012-06-13T13:49:29+02:00",
                "collection_id": 1,
                "sha256": "60691f538bdac78197004edcfb77dc772d824daeca54bd13e59f6b485f0293bc",
                "thumbnail": null,
                "technical_informations": {
                    "Height": 2448,
                    "Width": 3264
                },
                "phrasea_type": "image",
                "uuid": "d91372ec-ea94-4e8a-bf26-065ad8684180"
            }
        }
    }

Embeddables
***********

Embeddable media now provides a list of supported devices. This devices are
compatible with CSS2 specification.

.. seealso::

    http://www.w3.org/TR/CSS2/media.html#media-types

The following thumbnail is compatible with a screen display

.. code-block:: javascript

    "thumbnail": {
        "width": 150,
        "filesize": 4271,
        "devices": [
            "screen"
        ],
        "mime_type": "image/jpeg"
    },

Hypermedia links
****************

Some hypermedia links have appeared in responses. For example, in the response
of :doc:`feed/content <V1/Route/Feeds/Content>`, a link to the corresponding
:doc:`feed/entry <V1/Route/Feeds/Entry>` is given for each entry.

Request a media depending on device and/or mime type
****************************************************

You can now restrict to some devices and/or mime types in the
:doc:`records/embed <V1/Route/Records/Embed>` route.

1.1
---

A major schema enhancement happens for meta values. Multivalued stored
serialized are now stored separatly.
Two routes are modified : records/metadatas and records/setmetadatas.
A route has been added to make it easy to display caption : records/caption.

This enhancement allows to store ressource in multivalued fields like users,
geoname entities, Thesaurus entries...

The main consequence is a change in two API routes : records/metadatas and
records/setmetadatas, therefore the upgrade of API to version 1.1.

Route records/metadatas
***********************

Route records/metadatas was returning results like :

.. code-block:: javascript

    "6272": {                    //Monovalued field
        "meta_id": 6272,
        "meta_structure_id": 2,
        "name": "Categorie",
        "value": "paysages"
    },
    "6273": {                    //Monovalued field
        "meta_id": 6273,
        "meta_structure_id": 4,
        "name": "MotsCles",
        "value": [
            "ciel",
            "météo",
            "nuage"
        ]
    }

Responses in API 1.1 are now like :

.. code-block:: javascript

    "6272": {                    //Monovalued field value
        "meta_id": 6272,
        "meta_structure_id": 2,
        "name": "Categorie",
        "value": "paysages"
    },
    "6273": {                    //Multivalued field value
        "meta_id": 6273,
        "meta_structure_id": 4,
        "name": "MotsCles",
        "value": "ciel"
    },
    "6274": {                    //Multivalued field value
        "meta_id": 6274,
        "meta_structure_id": 4,
        "name": "MotsCles",
        "value": "météo"
    },
    "6275": {                    //Multivalued field value
        "meta_id": 6275,
        "meta_structure_id": 4,
        "name": "MotsCles",
        "value": "nuage"
    }

Route records/caption
*********************

For developers who were using this route to display caption, we add the route
:doc:`records/caption </Devel/API/V1/Route/Records/Caption>` which is easier
in that case. You should use records/metadatas when you're planning to edit
metadatas.

.. code-block:: javascript

    "2": {                         //Monovalued field value
        "meta_structure_id": 2,
        "name": "Categorie",
        "value": "paysages"
    },
    "4": {                         //Multivalued field serialized
        "meta_structure_id": 4,
        "name": "MotsCles",
        "value": "ciel ; météo ; nuage"
    }

.. seealso::

    complete documentation for route
    :doc:`records/caption </Devel/API/V1/Route/Records/Caption>`

Route records/setmetadatas
**************************

La route records/setmetadatas was working like this :

.. code-block:: javascript

    // HTTP parameters :
    metadatas = {
        //Add a value in a monovalued field
        {
            meta_struct_id: 1,
            meta_id: null,
            value : [
                'A pretty string'
            ]
        },
        //Update a value in a multivalued field
        {
            meta_struct_id: 3,
            meta_id: 487,
            value: [
                'one key word',
                'two key word'
            ]
        },
        //Delete a value
        {
            meta_struct_id: 7,
            meta_id: 489,
            value: []
        }
    }

Now, you must use it like this :

.. code-block:: javascript

    metadatas = {
        //Add a value in a monovalued field
        {
            meta_struct_id: 1,
            meta_id: "",
            value : 'A pretty string'
        },
        //Update a value in a multivalued field
        {
            meta_struct_id: 3, //champ multivalué
            meta_id: 487,
            value: 'one key word'
        },
        //Add a value in a multivalued field
        {
            meta_struct_id: 3, //champ multivalué
            meta_id: "",
            value: 'second key word'
        },
        //Delete a value in a multivalued field
        {
            meta_struct_id: 3, //champ multivalué
            meta_id: 487,
            value: ""
        },
        //Add a value in a monovalued field
        {
            meta_struct_id: 7,
            meta_id: 489,
            value: ""
        }
    }

1.0
---

First stable version of Phraseanet API. The API uses OAuth2 as authentication
and provides GET/POST routes to access ressources.
