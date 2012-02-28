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
            "api_version": "1.0",
            "request": "POST /api/v1/records/search/",
            "response_time": "2011-07-27T12:14:00+02:00",
            "http_code": 200,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "total_pages": 1,
            "current_page": 1,
            "available_results": 9,
            "total_results": 9,
            "error": "",
            "warning": "",
            "query_time": "0,002",
            "search_indexes": "documents1285798223, documents1234706250, documents3157751204, docs_realtime1285798223, docs_realtime1234706250, docs_realtime3157751204",
            "suggestions": [
                {
                    "value": "cr2",
                    "current": true,
                    "hits": "9"
                }
            ],
            "results": [
                {
                    "databox_id": 52,
                    "record_id": 5650,
                    "mime_type": "image/x-canon-cr2",
                    "title": "test001.CR2",
                    "original_name": "test001.CR2",
                    "last_modification": "2011-07-21T17:03:25+02:00",
                    "created_on": "2011-07-21T17:03:25+02:00",
                    "collection_id": 1,
                    "sha256": "3191af52748620e0d0da50a7b8020e118bd8b8a0845120b0bb480f646fd8d85b",
                    "thumbnail": {
                        "permalink": {
                            "created_on": "2011-11-09T11:33:34+01:00",
                            "id": 2384,
                            "is_activated": true,
                            "label": "Fondation",
                            "last_modified": "2011-11-09T11:33:34+01:00",
                            "page_URL": "https://localhost/permalink/v1/Fondation/1/2151/HLm5eyxA/thumbnail/view/",
                            "URL": "https://localhost/permalink/v1/Fondation/1/2151/HLm5eyxA/thumbnail/"
                        },
                        "height": 144,
                        "width": 192,
                        "filesize": 4390,
                        "player_type": "IMAGE",
                        "mime_type": "image/jpeg"
                    },
                    "technical_informations": {
                        "bits": 8
                    },
                    "phrasea_type": "image",
                    "uuid": "7b8ef0e3-dc8f-4b66-9e2f-bd049d175124"
                },
                {
                    "databox_id": 52,
                    "record_id": 5235,
                    "mime_type": "image/x-canon-cr2",
                    "title": "test001.CR2",
                    "original_name": "test001.CR2",
                    "last_modification": "2011-07-20T14:33:46+02:00",
                    "created_on": "2011-07-20T14:33:46+02:00",
                    "collection_id": 1,
                    "sha256": "3191af52748620e0d0da50a7b8020e118bd8b8a0845120b0bb480f646fd8d85b",
                    "thumbnail": {
                        "permalink": {
                            "created_on": "2011-11-09T11:33:34+01:00",
                            "id": 2384,
                            "is_activated": true,
                            "label": "Fondation",
                            "last_modified": "2011-11-09T11:33:34+01:00",
                            "page_URL": "https://localhost/permalink/v1/Fondation/1/2151/HLm5eyxA/thumbnail/view/",
                            "URL": "https://localhost/permalink/v1/Fondation/1/2151/HLm5eyxA/thumbnail/"
                        },
                        "height": 144,
                        "width": 192,
                        "filesize": 4390,
                        "player_type": "IMAGE",
                        "mime_type": "image/jpeg"
                    },
                    "technical_informations": {
                        "bits": 8
                    },
                    "phrasea_type": "image",
                    "uuid": "7b8ef0e3-dc8f-4b66-9e2f-bd049d175124"
                },
                {
                    "databox_id": 52,
                    "record_id": 4757,
                    "mime_type": "image/x-canon-cr2",
                    "title": "test001.CR2",
                    "original_name": "test001.CR2",
                    "last_modification": "2011-07-19T11:29:15+02:00",
                    "created_on": "2011-07-15T18:50:54+02:00",
                    "collection_id": 1,
                    "sha256": "3191af52748620e0d0da50a7b8020e118bd8b8a0845120b0bb480f646fd8d85b",
                    "thumbnail": {
                        "permalink": {
                            "created_on": "2011-11-09T11:33:34+01:00",
                            "id": 2384,
                            "is_activated": true,
                            "label": "Fondation",
                            "last_modified": "2011-11-09T11:33:34+01:00",
                            "page_URL": "https://localhost/permalink/v1/Fondation/1/2151/HLm5eyxA/thumbnail/view/",
                            "URL": "https://localhost/permalink/v1/Fondation/1/2151/HLm5eyxA/thumbnail/"
                        },
                        "height": 144,
                        "width": 192,
                        "filesize": 4390,
                        "player_type": "IMAGE",
                        "mime_type": "image/jpeg"
                    },
                    "technical_informations": {
                        "bits": 8
                    },
                    "phrasea_type": "image",
                    "uuid": "7b8ef0e3-dc8f-4b66-9e2f-bd049d175124"
                }
            ],
            "query": "CR2"
        }
    }