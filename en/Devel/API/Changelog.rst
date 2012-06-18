API Changelog
=============

1.2
---

Version 1.2 of Phraseanet API is not backward compatible with the previous one. 

A bug has been fixed in :doc:`feed content <V1/Route/Feeds/Content>` and the 
route :doc:`feeds/content <Route/Feeds/Content>` has been updated.

Description de flux
*******************

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

.. note:: These attributes have also been added in 
:doc:`feeds/list <Route/Feeds/List>`.


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
            "api_version": "1.2",
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

Major API upgrade. This version is not fully backward compatible with 1.0. See
the complete :doc:`documentation <V1/Upgrade/1.1>` before upgrading.

  - Change in route :doc:`records/metadatas <V1/Route/Records/Metadatas>`
  - Change in route :doc:`records/setmetadatas <V1/Route/Records/SetMetadatas>`
  - Add route :doc:`records/caption <V1/Route/Records/Caption>`

1.0
---

First stable version of Phraseanet API. The API uses OAuth2 as authentication
and provides GET/POST routes to access ressources.
