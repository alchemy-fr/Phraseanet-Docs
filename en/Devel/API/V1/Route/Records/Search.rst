Records Search
==============

About
-----

  Return the result of record search

  .. code-block:: bash

    /api/v1/records/search/

  ======================== ======
   Informations
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
   page          int         1         The number of the requested page (first page is page 1)
   per_page      int         10        The number of records per page
   ord           string                This feature is currently only available with SphinxSearch Engine. Available values are “asc” and “desc”
   sort          string                This feature is currently only available with SphinxSearch Engine. Available values are “relevance” and “created_on” and “random”
   record_type   string                The type of records to query. Available values are “audio”, “video”, “image”, “document”, “flash”
   search_type   int         0         A toggle to switch records search or stories search. Available values are 0 for records and 1 for stories
   stemme        int         1         This feature is currently only available with SphinxSearch Engine. Enable stemmed search
   datefield     string                Select a field to search with datemin and datemax filters
   datemin       date                  The minimum date (you need to set a datefield value to use this feature)
   datemax       date                  The maximum date (you need to set a datefield value to use this feature)
   status        array
   fields        array
  ============= =========== ========= =============

Response Fields
---------------

  ================== ================================
   Field              Description
  ================== ================================
  total_pages         The total number of pages available
  current_page        The number of the page related to the results
  available_results 	The amount of results available through this query. This number may be lower than available results ; SphinxSearch Engine has a limited number of results which can be retrieved and is, by default 1000. However, this limit can be configured
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
on databox_id 52 on status 5 : On databox_id 52, only records
with status number 5 “off” are returned, and on databox_id 58,
only records with status number 4 “on” are returned.

  .. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&status[4][on][]=58&status[5][off][]=52" https://mydomain.tld/api/v1/records/search/

Request all records on collection base_id 85 :

  .. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&bases[]=85" https://mydomain.tld/api/v1/records/search/

Search the query “house” in the “Object” or “Credit” fields :

  .. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&fields[]=Objet&fields[]=Credut&query=house" https://mydomain.tld/api/v1/records/search/


Response sample
---------------

  .. code-block:: javascript
    
    {
        "meta": {
            "api_version": "1.2",
            "request": "POST /api/v1/records/search/",
            "response_time": "2012-06-13T14:14:12+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "total_pages": 1,
            "current_page": 1,
            "available_results": 1,
            "total_results": 1,
            "error": "",
            "warning": "",
            "query_time": 0.003656,
            "search_indexes": "",
            "suggestions": [
                {
                    "value": "book",
                    "current": true,
                    "hits": "1"
                }
            ],
            "results": [
                {
                    "databox_id": 2,
                    "record_id": 132,
                    "mime_type": "image/jpeg",
                    "title": "photo03.JPG",
                    "original_name": "photo03.JPG",
                    "last_modification": "2012-06-13T13:50:29+02:00",
                    "created_on": "2012-06-13T13:49:29+02:00",
                    "collection_id": 1,
                    "sha256": "60691f538bdac78197004edcfb77dc772d824daeca54bd13e59f6b485f0293bc",
                    "thumbnail": {
                        "permalink": {
                            "created_on": "2012-06-13T13:51:06+02:00",
                            "id": 343,
                            "is_activated": true,
                            "label": "photo03JPG",
                            "last_modified": "2012-06-13T13:51:06+02:00",
                            "page_url": "https://library.net/permalink/v1/photo03JPG/2/132/5MuXBQ55/thumbnail/view/",
                            "url": "https://library.net/permalink/v1/photo03JPG/2/132/5MuXBQ55/thumbnail/"
                        },
                        "height": 113,
                        "width": 150,
                        "filesize": 4271,
                        "devices": [
                            "screen"
                        ],
                        "player_type": "IMAGE",
                        "mime_type": "image/jpeg"
                    },
                    "technical_informations": {
                        "Aperture": 2.4,
                        "CameraModel": "iPhone 4S",
                        "Channels": 3,
                        "ColorDepth": 8,
                        "ColorSpace": "RGB",
                        "FileSize": 2851233,
                        "FlashFired": 0,
                        "FocalLength": 4.28,
                        "Height": 2448,
                        "HyperfocalDistance": 2.0773522348635,
                        "ISO": 400,
                        "LightValue": 4.847996906555,
                        "MimeType": "image/jpeg",
                        "ShutterSpeed": 0.05,
                        "Width": 3264
                    },
                    "phrasea_type": "image",
                    "uuid": "d91372ec-ea94-4e8a-bf26-065ad8684180"
                }
            ],
            "query": "book"
        }
    }