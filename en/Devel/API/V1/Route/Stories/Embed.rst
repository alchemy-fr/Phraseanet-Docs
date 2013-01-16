Stories Embed
=============

About
-----

  Returns permalinks to medias attached to the story.

.. code-block:: bash

    /api/v1/stories/{databox_id}/{story_id}/embed/

  ======================== =====
   Informations
  ======================== =====
   HTTP Method              GET
   Requires Authentication  Yes
  ======================== =====

Parameters
----------

If you want to retrieve all HTML5 videos for mobile, you have to provide the
following parameters :

.. code-block:: bash

    devices[]=mobile&mimes[]=video/mp4&mimes[]=video/ogg&mimes[]=video/webm

  ======================== ============== ==============================
   Parameters               Type           Information
  ======================== ============== ==============================
   databox_id               integer        The databox id of the story
   story_id                 integer        The story_id
   devices                  array          An array of devices to restrict the list (optionnal)
   mimes                    array          An array of mime type to restrict the list (optionnal)
  ======================== ============== ==============================

Response Fields
---------------

  ========== ================================
   Field      Description
  ========== ================================
    embed     The list of the sub views of the story
  ========== ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/stories/1/99/embed/",
            "response_time": "2012-12-19T18:46:17+01:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "embed": [
                {
                    "name": "preview",
                    "permalink": {
                        "created_on": "2012-12-19T18:46:17+01:00",
                        "id": 249,
                        "is_activated": true,
                        "label": "SUPER",
                        "updated_on": "2012-12-19T18:46:17+01:00",
                        "page_url": "http://local.phrasea/permalink/v1/SUPER/1/99/9p6yOZMJ/preview/view/",
                        "url": "http://local.phrasea/permalink/v1/SUPER/1/99/9p6yOZMJ/preview/"
                    },
                    "height": 533,
                    "width": 800,
                    "filesize": 26853,
                    "devices": [],
                    "player_type": "IMAGE",
                    "mime_type": "image/jpeg"
                },
                {
                    "name": "thumbnail",
                    "permalink": {
                        "created_on": "2012-12-19T18:22:31+01:00",
                        "id": 248,
                        "is_activated": true,
                        "label": "SUPER",
                        "updated_on": "2012-12-19T18:22:31+01:00",
                        "page_url": "http://local.phrasea/permalink/v1/SUPER/1/99/YQlcZVsV/thumbnail/view/",
                        "url": "http://local.phrasea/permalink/v1/SUPER/1/99/YQlcZVsV/thumbnail/"
                    },
                    "height": 133,
                    "width": 200,
                    "filesize": 3566,
                    "devices": [],
                    "player_type": "IMAGE",
                    "mime_type": "image/jpeg"
                }
            ]
        }
    }
