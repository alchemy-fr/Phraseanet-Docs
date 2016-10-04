Search
======

About
-----

Returns the list of records found for a search whose parameters are given as
arguments.

.. code-block:: bash

    /api/v2/search/

======================== ======
 Information
======================== ======
 HTTP Method              POST
 Requires Authentication  Yes
======================== ======

Parameters
----------

============= =========== ========= =============
 Parameters    Type        Example   Information
============= =========== ========= =============
 query         string                Search query ; search query is the same syntax as in phraseanet. Default value is an string, which equals “all records”
 bases         array                 An array of base_ids ; If an empty array or no value are provided, the query is done on all collections
 offset_start  int         0         The offset of the first record to return. The offset of the initial record is 0 (not 1).
 per_page      int         10        The maximum number of records to return.
 ord           string                This feature is currently only available with SphinxSearch Engine. Available values are “asc” and “desc”
 sort          string                This feature is currently only available with SphinxSearch Engine. Available values are “relevance” and “created_on” and “random”
 record_type   string                The type of records to query. Available values are “audio”, “video”, “image”, “document”, “flash”
 search_type   int         0         A toggle to switch records search or stories search. Available values are 0 for records and 1 for stories
 stemme        int         1         This feature is currently only available with SphinxSearch Engine. Enable stemmed search
 date_field    string                Select a field to search with datemin and datemax filters
 date_min      string                The minimum date as string formated as follow 'Y/m/d' (you need to set a datefield value to use this feature)
 date_max      string                The maximum date formated as follow 'Y/m/d' (you need to set a datefield value to use this feature)
 status        array
 fields        array
============= =========== ========= =============

Response Fields
---------------

================== ================================
 Field              Description
================== ================================
offset_start        The start offset
per_page            The number of results per page
available_results   The amount of results available through this query. This number may be lower than available results ; SphinxSearch Engine has a limited number of results which can be retrieved and is, by default 1000. However, this limit can be configured
total_results       The amount of results corresponding to the query
error               A string with an error from the searchengine
warning             A string with a warning from the searchengine
query_time          The time of the query execution by search engine in seconds
search_indexes      The searchIndexes used by search engine
results             The list of available collections
query               The query sent to the search engine
suggestions
================== ================================

Query Sample
------------

Request all records, filter those on databox_id 58 on status 4 and those
on databox_id 52 on status 5: On databox_id 52, only records
with status number 5 “off” are returned, and on databox_id 58,
only records with status number 4 “on” are returned.

.. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&status[4][on][]=58&status[5][off][]=52" https://mydomain.tld/api/v2/search/

Request all records on collection base_id 85:

.. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&bases[]=85" https://mydomain.tld/api/v2/search/

Search the query “house” in the “Object” or “Credit” fields:

.. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&fields[]=Objet&fields[]=Credit&query=house" https://mydomain.tld/api/v2/search/

Response sample
---------------

Example that returns records:

.. code-block:: javascript

    {
      "meta": {
        "api_version": "2.0.0",
        "request": "GET /api/v2/search/",
        "response_time": "2016-03-23T18:30:24+01:00",
        "http_code": 200,
        "error_type": null,
        "error_message": null,
        "error_details": null,
        "charset": "UTF-8"
      },
      "response": {
        "offset_start": 0,
        "per_page": 100,
        "available_results": 35,
        "total_results": 35,
        "error": "",
        "warning": "",
        "query_time": 37,
        "search_indexes": "phraseanet_syzwivun7cz8w5zd",
        "facets": [
          {
            "name": "Colorimetrie",
            "values": [
              {
                "value": "Couleurs",
                "count": 2,
                "query": "field.Colorimetrie = Couleurs"
              },
              {
                "value": "N&B",
                "count": 1,
                "query": "field.Colorimetrie = N&B"
              }
            ]
          },
          {
            "name": "Base_Name",
            "values": [
              {
                "value": "db_master",
                "count": 35,
                "query": "database:db_master"
              }
            ]
          },
          {
            "name": "Type_Name",
            "values": [
              {
                "value": "image",
                "count": 33,
                "query": "type:image"
              },
              {
                "value": "video",
                "count": 2,
                "query": "type:video"
              }
            ]
          },
          {
            "name": "TypeLicence",
            "values": [
              {
                "value": "Droits gérés",
                "count": 3,
                "query": "field.TypeLicence = \"Droits gérés\""
              }
            ]
          },
          {
            "name": "Collection_Name",
            "values": [
              {
                "value": "Support Alchemy",
                "count": 35,
                "query": "collection:\"Support Alchemy\""
              }
            ]
          },
          {
            "name": "MotsCles",
            "values": [
              {
                "value": "COSTUME",
                "count": 2,
                "query": "field.MotsCles = COSTUME"
              },
              {
                "value": "Singers",
                "count": 1,
                "query": "field.MotsCles = Singers"
              }
            ]
          }
        ],
        "results": [
          {
            "databox_id": 1,
            "record_id": 117,
            "collection_id": 1,
            "version": 1457687077
          },
          {
            "databox_id": 1,
            "record_id": 114,
            "collection_id": 1,
            "version": 1457615017
          },
          {
            "databox_id": 1,
            "record_id": 86,
            "collection_id": 1,
            "version": 1457687314
          }
        ],
        "search_type": 0
      }
    }
