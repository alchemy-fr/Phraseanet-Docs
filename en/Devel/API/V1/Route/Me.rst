Me
==

About
-----

Returns information about the authenticated user, lists collections he has
access and the user's rights he has on them.

.. code-block:: bash

    /api/v1/me/

======================== ======
 Information
======================== ======
 HTTP Method              GET
 Requires Authentication  Yes
======================== ======


Response Fields
---------------

================== ================================
 Field              Description
================== ================================
user                User's information
================== ================================

Query Sample
------------

.. code-block:: bash

    curl -v https://mydomain.tld/api/v1/me/?oauth_token=xxxxxxx

Response sample
---------------

.. code-block:: javascript


    {
      "meta": {
        "api_version": "2.0.0",
        "request": "GET /api/v1/me/",
        "response_time": "2016-06-16T18:59:59+02:00",
        "http_code": 200,
        "error_type": null,
        "error_message": null,
        "error_details": null,
        "charset": "UTF-8"
      },
      "response": {
        "user": {
          "@entity@": "http://api.phraseanet.com/api/objects/user",
          "id": 3,
          "email": "louiselaferriere@alchemy.fr",
          "login": "admin",
          "first_name": "Louise",
          "last_name": "Laferrière",
          "display_name": "Louise Laferrière",
          "gender": "Miss",
          "address": "30 place Saint Georges",
          "zip_code": "75009",
          "city": "Paris",
          "country": "FR",
          "phone": "01 53 20 43 80",
          "fax": "01 53 20 43 81",
          "job": null,
          "position": "Documentaliste",
          "company": "Alchemy",
          "geoname_id": 2988507,
          "last_connection": "-0001-11-30T00:00:00+00:09",
          "created_on": "2013-11-06T08:54:32+01:00",
          "updated_on": "2016-06-16T13:22:03+02:00",
          "locale": "en"
        },
        "collections": [
          {
            "databox_id": 3,
            "base_id": 21,
            "collection_id": 1,
            "rights": [
              "actif",
              "canaddrecord",
              "canadmin",
              "cancmd",
              "candeleterecord",
              "candwnldhd",
              "candwnldpreview",
              "canmodifrecord",
              "canpush",
              "canputinalbum",
              "canreport",
              "chgstatus",
              "imgtools",
              "manage",
              "modify_struct",
              "nowatermark"
            ],
            "statuses": [
              {
                "position": 4,
                "labels": {
                  "on": {
                    "de": "Gefüllt",
                    "en": "Caption filled",
                    "fr": "Média renseigné",
                    "nl": "Caption filled"
                  },
                  "off": {
                    "de": "Nicht gefüllt",
                    "en": "Caption not filled",
                    "fr": "Média non renseigné",
                    "nl": "Caption not filled"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              },
              {
                "position": 5,
                "labels": {
                  "on": {
                    "de": "License -90 days",
                    "en": "License ending soon",
                    "fr": "Droits expirant bientôt",
                    "nl": "License -90 days"
                  },
                  "off": {
                    "de": "License -90 days",
                    "en": "License OK",
                    "fr": "Droits valides",
                    "nl": "License -90 days"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              },
              {
                "position": 6,
                "labels": {
                  "on": {
                    "de": "License expired",
                    "en": "License expired",
                    "fr": "Droits expirés",
                    "nl": "License expired"
                  },
                  "off": {
                    "de": "License OK",
                    "en": "License OK",
                    "fr": "Droits valides",
                    "nl": "License OK"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              },
              {
                "position": 7,
                "labels": {
                  "on": {
                    "de": "Rights Managed",
                    "en": "Rights Managed",
                    "fr": "Droits gérés",
                    "nl": "Rights Managed"
                  },
                  "off": {
                    "de": "Royalty free",
                    "en": "Royalty free",
                    "fr": "Usage libre",
                    "nl": "Royalty free"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              }
            ]
          },
          {
            "databox_id": 3,
            "base_id": 22,
            "collection_id": 2,
            "rights": [
              "actif",
              "canaddrecord",
              "canadmin",
              "cancmd",
              "candeleterecord",
              "candwnldhd",
              "candwnldpreview",
              "canmodifrecord",
              "canpush",
              "canputinalbum",
              "canreport",
              "chgstatus",
              "imgtools",
              "manage",
              "modify_struct",
              "nowatermark"
            ],
            "statuses": [
              {
                "position": 4,
                "labels": {
                  "on": {
                    "de": "Gefüllt",
                    "en": "Caption filled",
                    "fr": "Média renseigné",
                    "nl": "Caption filled"
                  },
                  "off": {
                    "de": "Nicht gefüllt",
                    "en": "Caption not filled",
                    "fr": "Média non renseigné",
                    "nl": "Caption not filled"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              },
              {
                "position": 5,
                "labels": {
                  "on": {
                    "de": "License -90 days",
                    "en": "License ending soon",
                    "fr": "Droits expirant bientôt",
                    "nl": "License -90 days"
                  },
                  "off": {
                    "de": "License -90 days",
                    "en": "License OK",
                    "fr": "Droits valides",
                    "nl": "License -90 days"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              },
              {
                "position": 6,
                "labels": {
                  "on": {
                    "de": "License expired",
                    "en": "License expired",
                    "fr": "Droits expirés",
                    "nl": "License expired"
                  },
                  "off": {
                    "de": "License OK",
                    "en": "License OK",
                    "fr": "Droits valides",
                    "nl": "License OK"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              },
              {
                "position": 7,
                "labels": {
                  "on": {
                    "de": "Rights Managed",
                    "en": "Rights Managed",
                    "fr": "Droits gérés",
                    "nl": "Rights Managed"
                  },
                  "off": {
                    "de": "Royalty free",
                    "en": "Royalty free",
                    "fr": "Usage libre",
                    "nl": "Royalty free"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              }
            ]
          },
          {
            "databox_id": 3,
            "base_id": 23,
            "collection_id": 3,
            "rights": [
              "actif",
              "canaddrecord",
              "canadmin",
              "cancmd",
              "candeleterecord",
              "candwnldhd",
              "candwnldpreview",
              "canmodifrecord",
              "canpush",
              "canputinalbum",
              "canreport",
              "chgstatus",
              "imgtools",
              "manage",
              "modify_struct",
              "nowatermark"
            ],
            "statuses": [
              {
                "position": 4,
                "labels": {
                  "on": {
                    "de": "Gefüllt",
                    "en": "Caption filled",
                    "fr": "Média renseigné",
                    "nl": "Caption filled"
                  },
                  "off": {
                    "de": "Nicht gefüllt",
                    "en": "Caption not filled",
                    "fr": "Média non renseigné",
                    "nl": "Caption not filled"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              },
              {
                "position": 5,
                "labels": {
                  "on": {
                    "de": "License -90 days",
                    "en": "License ending soon",
                    "fr": "Droits expirant bientôt",
                    "nl": "License -90 days"
                  },
                  "off": {
                    "de": "License -90 days",
                    "en": "License OK",
                    "fr": "Droits valides",
                    "nl": "License -90 days"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              },
              {
                "position": 6,
                "labels": {
                  "on": {
                    "de": "License expired",
                    "en": "License expired",
                    "fr": "Droits expirés",
                    "nl": "License expired"
                  },
                  "off": {
                    "de": "License OK",
                    "en": "License OK",
                    "fr": "Droits valides",
                    "nl": "License OK"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              },
              {
                "position": 7,
                "labels": {
                  "on": {
                    "de": "Rights Managed",
                    "en": "Rights Managed",
                    "fr": "Droits gérés",
                    "nl": "Rights Managed"
                  },
                  "off": {
                    "de": "Royalty free",
                    "en": "Royalty free",
                    "fr": "Usage libre",
                    "nl": "Royalty free"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              }
            ]
          },
          {
            "databox_id": 3,
            "base_id": 24,
            "collection_id": 4,
            "rights": [
              "actif",
              "canaddrecord",
              "canadmin",
              "cancmd",
              "candeleterecord",
              "candwnldhd",
              "candwnldpreview",
              "canmodifrecord",
              "canpush",
              "canputinalbum",
              "canreport",
              "chgstatus",
              "imgtools",
              "manage",
              "modify_struct",
              "nowatermark"
            ],
            "statuses": [
              {
                "position": 4,
                "labels": {
                  "on": {
                    "de": "Gefüllt",
                    "en": "Caption filled",
                    "fr": "Média renseigné",
                    "nl": "Caption filled"
                  },
                  "off": {
                    "de": "Nicht gefüllt",
                    "en": "Caption not filled",
                    "fr": "Média non renseigné",
                    "nl": "Caption not filled"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              },
              {
                "position": 5,
                "labels": {
                  "on": {
                    "de": "License -90 days",
                    "en": "License ending soon",
                    "fr": "Droits expirant bientôt",
                    "nl": "License -90 days"
                  },
                  "off": {
                    "de": "License -90 days",
                    "en": "License OK",
                    "fr": "Droits valides",
                    "nl": "License -90 days"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              },
              {
                "position": 6,
                "labels": {
                  "on": {
                    "de": "License expired",
                    "en": "License expired",
                    "fr": "Droits expirés",
                    "nl": "License expired"
                  },
                  "off": {
                    "de": "License OK",
                    "en": "License OK",
                    "fr": "Droits valides",
                    "nl": "License OK"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              },
              {
                "position": 7,
                "labels": {
                  "on": {
                    "de": "Rights Managed",
                    "en": "Rights Managed",
                    "fr": "Droits gérés",
                    "nl": "Rights Managed"
                  },
                  "off": {
                    "de": "Royalty free",
                    "en": "Royalty free",
                    "fr": "Usage libre",
                    "nl": "Royalty free"
                  }
                },
                "restricted": false,
                "restriction_flag": false
              }
            ]
          }
        ],
        "databoxes": [
          {
            "databox_id": 3,
            "rights": [
              "bas_modify_struct",
              "bas_manage",
              "bas_chupub",
              "bas_modif_th"
            ]
          }
        ]
      }
    }
