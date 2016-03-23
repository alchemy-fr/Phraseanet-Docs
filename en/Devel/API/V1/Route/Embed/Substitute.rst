Embed Substitute
================

About
-----

Substitutes (or adds) an embed file (subdef) to a record.
Allows to inject an embed file built out of Phraseanet when a document has been
added with the parameter "nosubdefs".

.. seealso:: :doc:`Add record <../Records/Add>`


========================== ======
 Information
========================== ======
 HTTP Method                POST
 Requires Authentication    Yes
========================== ======

Parameters
----------

=============== =========== =============
 Parameter       Type        Information
=============== =========== =============
 file            file        Mandatory - The embed file to add/replace
 databox_id      integer     Mandatory - Id of the databox containig the record to be changed
 record_id       integer     Mandatory - Id of the record to be changed
 name            string      Mandatory - The name of the subdef to change (as defined in the databox structure)
 adapt           integer     Optional  - 0 : keep the uploaded file 'as is' ; 1 [default] : adapt the file
                             to the settings (size, type, ...) defined in the structure.
=============== =========== =============

.. note::

    The *adapt* parameter is intended only for image type documents.

Response samples
----------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.4.1",
            "request": "POST /api/v1/embed/substitute/",
            "response_time": "2015-04-22T19:16:24+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "0": {
                "name": "preview",
                "substituted": true,
                "created_on": "2015-02-23T11:23:40+01:00",
                "updated_on": "2015-04-22T19:16:24+02:00",
                "permalink": {
                    "created_on": "2015-04-14T11:24:59+02:00",
                    "id": 847,
                    "is_activated": true,
                    "label": "IMG_5281",
                    "updated_on": "2015-04-14T11:24:59+02:00",
                    "page_url": "http://domain.tld/permalink/v1/3/230/preview/?token=2dXGRr5P",
                    "download_url": "http://domain.tld/permalink/v1/3/230/preview/IMG_5281.?token=2dXGRr5P&download=1",
                    "url": "http://domain.tld/permalink/v1/3/230/preview/IMG_5281.?token=2dXGRr5P"
                },
                "height": 16,
                "width": 16,
                "filesize": 60,
                "devices": [
                    "screen"
                ],
                "player_type": "IMAGE",
                "mime_type": "image/gif"
            },
            "adapt": false
        }
    }

.. note:: because subdefs are resized asynchronously, no information about the embed can be returned if
    "adapt":true is specified.

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.4.1",
            "request": "POST /api/v1/embed/substitute/",
            "response_time": "2015-04-22T19:16:24+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "adapt": true
        }
    }


.. Seealso:: :doc:`Records Eembed <../Records/Embed>`


