Supprimer un document
=====================

A propos
--------

Supprime un document.

.. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/

======================== ========
 Information
======================== ========
 HTTP Method              DELETE
 Requires Authentication  Yes
======================== ========

Paramètres
----------

======================== ============== ==============================
 Paramètres               Type           Information
======================== ============== ==============================
 databox_id               entier         L'identifiant de la databox auquel appartient le document
 record_id                entier         L'identifiant du document à supprimer
======================== ============== ==============================


Exemple de réponse
------------------

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
