Databox TermsOfUse
===================

About
-----

Returns *Terms Of Use* in all available languages for a specified databox.

.. code-block:: bash

    /api/v1/databoxes/{databox_id}/termsOfUse/

======================== =====
 Information
======================== =====
 HTTP Method              GET
 Requires Authentication  Yes
======================== =====

Parameters
----------

======================== ============== =============
 Parameters               Type           Information
======================== ============== =============
 databox_id               integer        The databox id on which the request is done
======================== ============== =============

Response Fields
---------------

============ ================================
Field         Description
============ ================================
 termsOfUse   The list of Terms of Use by locale
============ ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/databoxes/1/termsOfUse/",
            "response_time": "2012-09-27T16:49:20+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "termsOfUse": [
                {
                    "locale": "ar_SA",
                    "terms": "<p>يمكنك أن تفعل ما تريد</p>"
                },
                {
                    "locale": "de_DE",
                    "terms": "<p>Sie können tun, was Sie wollen</p>"
                },
                {
                    "locale": "en_GB",
                    "terms": "<p>You can do what you want</p>"
                },
                {
                    "locale": "es_ES",
                    "terms": "<p>Puedes hacer lo que quieras</p>"
                },
                {
                    "locale": "fr_FR",
                    "terms": "<p>Vous pouvez faire ce quez vous voulez</p>"
                }
            ]
        }
    }
