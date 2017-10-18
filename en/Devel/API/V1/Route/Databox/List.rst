Databox List
============

About
-----

Returns available *databoxes*.

.. code-block:: bash

    /api/v1/databoxes/list/

======================== =====
 Information
======================== =====
 HTTP Method              GET
 Requires Authentication  Yes
======================== =====

Parameters
----------

No parameters for this route

Response Fields
---------------

========== ================================
Field       Description
========== ================================
databoxes   The list of available databoxes
========== ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "2.0.0",
            "request": "GET /api/v1/databoxes/list/",
            "response_time": "2017-10-06T16:01:43+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "databoxes": {
                "1": {
                    "databox_id": 1,
                    "name": "db_alch_demoelastic",
                    "viewname": "Base DemoElastic (L'alias)",
                    "labels": {
                        "en": "Base DemoElastic (Trad EN)",
                        "de": "Demoelasticken databazer (Trad DE)",
                        "fr": "Base DemoElastic (Trad FR)",
                        "nl": "Base DemoElastic (Trad NL)"
                    },
                    "version": "4.0.0-alpha.8"
                },
                "2": {
                    "databox_id": 2,
                    "name": "db_alch_demobetaelastic",
                    "viewname": "Base BETA 3.0 Demoelastic (L'alias)",
                    "labels": {
                        "en": "Base BETA 3.0 Demoelastic (Trad EN)",
                        "de": "Base BETA 3.0 Demoelastic (Trad DE)",
                        "fr": "Base BETA 3.0 Demoelastic (Trad FR)",
                        "nl": "BETA 3.0 Demoelastic (Trad NL)"
                    },
                    "version": "4.0.0-alpha.8"
                }
            }
        }
    }


