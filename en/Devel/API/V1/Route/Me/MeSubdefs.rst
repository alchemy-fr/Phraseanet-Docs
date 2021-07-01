Me sub-definition access
========================

About
-----

Returns all sub-definition available for authenticated user.

.. code-block:: bash

    /api/v1/me/subdefs

======================== ======
 Informations
======================== ======
 HTTP Method              GET
 Requires Authentication  Yes
======================== ======

Response Fields
---------------

================== ==========================================
 Field              Description
================== ==========================================
 subdefs            Sub-definition informations
================== ==========================================

Query Sample
------------

.. code-block:: bash

    curl -v https://mydomain.tld/api/v1/me/subdefs?oauth_token=xxxxxxx

Response sample
---------------

.. code-block:: json

    {
      "meta": {
        "api_version": "2.0.0",
        "request": "GET /api/v1/me/subdefs/",
        "response_time": "2021-06-29T10:12:16+02:00",
        "http_code": 200,
        "error_type": null,
        "error_message": null,
        "error_details": null,
        "charset": "UTF-8"
      },
      "response": {
        "subdefs": {
          "image": {
            "preview": {
              "name": "preview",
              "databox_id": 55,
              "class": "preview",
              "preset": null,
              "downloadable": true,
              "devices": [
                "screen"
              ],
              "labels": {
                "fr": "preview",
                "en": "preview",
                "de": "preview",
                "nl": "preview"
              },
              "options": {
                "size": 800,
                "resolution": 72,
                "strip": false,
                "flatten": true,
                "quality": 75,
                "icodec": "jpeg"
              }
            },
            "thumbnail": {
              "name": "thumbnail",
              "databox_id": 55,
              "class": "thumbnail",
              "preset": null,
              "downloadable": true,
              "devices": [
                "screen"
              ],
              "labels": {
                "fr": "thumbnail",
                "en": "thumbnail",
                "de": "thumbnail",
                "nl": "thumbnail"
              },
              "options": {
                "size": 200,
                "resolution": 72,
                "strip": false,
                "flatten": true,
                "quality": 75,
                "icodec": "jpeg"
              }
            }
          },
          "video": {
            "thumbnail": {
              "name": "thumbnail",
              "databox_id": 55,
              "class": "thumbnail",
              "preset": null,
              "downloadable": true,
              "devices": [
                "screen"
              ],
              "labels": {
                "fr": "thumbnail",
                "en": "thumbnail",
                "de": "thumbnail",
                "nl": "thumbnail"
              },
              "options": {
                "size": 200,
                "resolution": 72,
                "strip": true,
                "flatten": false,
                "quality": 75,
                "icodec": "jpeg"
              }
            },
            "preview_webm": {
              "name": "preview_webm",
              "databox_id": 55,
              "class": "preview",
              "preset": null,
              "downloadable": false,
              "devices": [
                "screen"
              ],
              "labels": {
                "fr": "preview_webm",
                "en": "preview_webm",
                "de": "preview_webm",
                "nl": "preview_webm"
              },
              "options": {
                "audiobitrate": 128,
                "audiosamplerate": null,
                "audiochannel": null,
                "bitrate": 1000,
                "GOPsize": 25,
                "size": 800,
                "fps": 15,
                "vcodec": "libvpx",
                "acodec": "libvorbis"
              }
            }
          },
          "audio": {
            "thumbnail": {
              "name": "thumbnail",
              "databox_id": 55,
              "class": "thumbnail",
              "preset": null,
              "downloadable": true,
              "devices": [
                "screen"
              ],
              "labels": {
                "fr": "thumbnail",
                "en": "thumbnail",
                "de": "thumbnail",
                "nl": "thumbnail"
              },
              "options": {
                "size": 200,
                "resolution": 72,
                "strip": true,
                "flatten": false,
                "quality": 75,
                "icodec": "jpeg"
              }
            }
          },
          "document": {
            "thumbnail": {
              "name": "thumbnail",
              "databox_id": 55,
              "class": "thumbnail",
              "preset": null,
              "downloadable": true,
              "devices": [
                "screen"
              ],
              "labels": {
                "fr": "thumbnail",
                "en": "thumbnail",
                "de": "thumbnail",
                "nl": "thumbnail"
              },
              "options": {
                "size": 200,
                "resolution": 72,
                "strip": true,
                "flatten": true,
                "quality": 75,
                "icodec": "jpeg"
              }
            },
            "preview": {
              "name": "preview",
              "databox_id": 55,
              "class": "preview",
              "preset": null,
              "downloadable": true,
              "devices": [
                "screen"
              ],
              "labels": {
                "fr": "preview",
                "en": "preview",
                "de": "preview",
                "nl": "preview"
              },
              "options": []
            }
          }
        }
      }
    }