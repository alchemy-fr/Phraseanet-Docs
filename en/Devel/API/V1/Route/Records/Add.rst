Add record
==========

About
-----

  Add a record to Phraseanet. If the file does not fit all install constraints,
  it goes to the quarantine. This behavior can be bypassed with the optionnal
  *forceBehavior* parameter

  .. code-block:: bash

    /api/v1/records/add/

  ======================== ======
   Informations
  ======================== ======
   HTTP Method              POST
   Requires Authentication  Yes
  ======================== ======

Parameters
----------

  =============== =========== =============
   Parameters      Type        Information
  =============== =========== =============
   file            file        Mandatory - The file related to the record to add
   base_id         integer     Mandatory - The base_id related to the destination collection
   status          string      64 bit format binary string (optionnal)
   forceBehavior   integer     0 : force record ; 1 : force quarantine(optionnal)
  =============== =========== =============

Response Fields
---------------

In case a record is created, the following

  ================== ================================
   Field              Description
  ================== ================================
   entity             A code corresponding to the created entity (record => 0 ; quarantine => 1)
   url                The url of the created item
  ================== ================================


Response sample
---------------

  .. code-block:: javascript
    
    {
        "meta": {
            "api_version": "1.2",
            "request": "POST /api/v1/records/add/",
            "response_time": "2012-06-13T15:59:58+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "entity": 1,
            "url": '/quarantine/item/136/',
        }
    }
