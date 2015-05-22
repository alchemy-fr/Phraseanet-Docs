Records Search (deprecated)
===========================

.. warning::

    Although still available, this route is deprecated since version 1.3 in
    favor of :doc:`search <../Search>`.

About
-----

Returns the result of a search query.

.. code-block:: bash

    /api/v1/records/search/

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
 offset_start  int         0         The number of the requested page (first page is page 1)
 per_page      int         10        The number of records per page
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

    curl -v -d "oauth_token=xxxxxxx&status[4][on][]=58&status[5][off][]=52" https://mydomain.tld/api/v1/records/search/

Request all records on collection base_id 85:

.. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&bases[]=85" https://mydomain.tld/api/v1/records/search/

Search the query “house” in the “Object” or “Credit” fields:

.. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&fields[]=Objet&fields[]=Credit&query=house" https://mydomain.tld/api/v1/records/search/

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "POST /api/v1/records/search/",
            "response_time": "2012-06-29T18:12:19+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "offset_start": 0,
            "per_page": 10,
            "available_results": 1,
            "total_results": 1,
            "error": "",
            "warning": "",
            "query_time": 0.0003,
            "search_indexes": "",
            "suggestions": [],
            "results": [
            {
                "databox_id": 1,
                "record_id": 644,
                "mime_type": "image/jpeg",
                "title": "0050.JPG",
                "original_name": "0050.JPG",
                "updated-on": "2012-06-22T21:22:08+02:00",
                "created_on": "2012-06-22T21:22:08+02:00",
                "collection_id": 2,
                "sha256": "9f44884438cab8ad6a8a557c4101ec866e0af2eb58b890c9c0e9cad385181fb8",
                "thumbnail": {
                "name": "thumbnail",
                "permalink": {
                    "created_on": "2012-06-25T18:05:20+02:00",
                    "id": 2016,
                    "is_activated": true,
                    "label": "0050JPG",
                    "updated_on": "2012-06-25T18:05:20+02:00",
                    "page_url": "http://domain.tld/permalink/v1/1/644/thumbnail/?token=m466mwxi",
                    "url": "http://domain.tld/permalink/v1/1/644/thumbnail/0050.JPG?token=m466mwxi",
                    "download_url": "http://domain.tld/permalink/v1/1/644/thumbnail/0050.JPG?token=m466mwxi&download"
                },
                "height": 100,
                "width": 150,
                "filesize": 3436,
                "devices": [
                    "screen"
                ],
                "player_type": "IMAGE",
                "mime_type": "image/jpeg"
                },
                "technical_informations": [
                {
                    "name": "Aperture",
                    "value": 5
                },
                {
                    "name": "CameraModel",
                    "value": "NIKON D700"
                },
                {
                    "name": "Channels",
                    "value": 3
                },
                {
                    "name": "ColorDepth",
                    "value": 8
                },
                {
                    "name": "ColorSpace",
                    "value": "RGB"
                },
                {
                    "name": "FileSize",
                    "value": 3221035
                },
                {
                    "name": "FlashFired",
                    "value": 1
                },
                {
                    "name": "FocalLength",
                    "value": 70
                },
                {
                    "name": "Height",
                    "value": 2832
                },
                {
                    "name": "HyperfocalDistance",
                    "value": 32.616371538043
                },
                {
                    "name": "LightValue",
                    "value": 11.940613708927
                },
                {
                    "name": "MimeType",
                    "value": "image/jpeg"
                },
                {
                    "name": "ShutterSpeed",
                    "value": 0.004
                },
                {
                    "name": "Width",
                    "value": 4256
                }
                ],
                "phrasea_type": "image",
                "uuid": "fc766012-a9c8-49eb-bcbd-c6f5270cb6f5"
            }
            ],
            "query": "recordId=644"
        }
    }
