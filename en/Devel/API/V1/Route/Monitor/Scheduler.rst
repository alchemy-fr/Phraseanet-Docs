Scheduler Monitor
=================

About
-----

  Returns Scheduler informations for monitoring

  .. code-block:: bash

    /api/v1/monitor/scheduler/

  ======================== =====
   Informations
  ======================== =====
   HTTP Method              GET
   Requires Authentication  Yes
  ======================== =====

Parameters
----------

  No parameters for this route

Response Fields
---------------

  =============== ======================================
   Field           Description
  =============== ======================================
   scheduler       Scheduler informations
  =============== ======================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/monitor/scheduler/",
            "response_time": "2012-08-31T15:55:06+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "scheduler": {
                "updated_on": "2012-08-31T15:28:29+02:00",
                "pid": "90555",
                "state": "started"
            }
        }
    }
