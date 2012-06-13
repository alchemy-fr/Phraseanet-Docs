Databox TermsOfUse
===================

About
-----

  Return Terms Of Use in all languages available on specified databox

  .. code-block:: bash

    /api/v1/databoxes/{databox_id}/termsOfUse/

  ======================== =====
   Informations
  ======================== =====
   HTTP Method              GET
   Requires Authentication  Yes
  ======================== =====

Parameters
----------

  ======================== ============== =============
   Parameters               Value          Information
  ======================== ============== =============
   databox_id               94             The databox id on which the request is done
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
            "api_version": "1.2",
            "request": "GET /api/v1/databoxes/1/termsOfUse/",
            "response_time": "2011-07-27T11:27:28+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "termsOfuse" : {
                "ar_SA": {
                    "locale": "ar_SA",
                    "terms": ""
                },
                "de_DE": {
                    "locale": "de_DE",
                    "terms": ""
                },
                "en_GB": {
                    "locale": "en_GB",
                    "terms": "<p>You can do what you want</p>"
                },
                "fr_FR": {
                    "locale": "fr_FR",
                    "terms": "<p>Vous pouvez faire ce quez vous voulez</p><p>Voil&agrave;</p>"
                }
            }
        }
    }