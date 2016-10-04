Delete Record
=============

About
-----

Delete one record.

.. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/

======================== ========
 Information
======================== ========
 HTTP Method              DELETE
 Requires Authentication  Yes
======================== ========

Parameters
----------

======================== ============== ==============================
 Parameters               Type           Information
======================== ============== ==============================
 databox_id               integer        The databox id of the record to delete
 record_id                integer        The record_id
======================== ============== ==============================


Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "DELETE /api/v1/records/1/633/",
            "response_time": "2012-06-29T18:06:39+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        }
    }
