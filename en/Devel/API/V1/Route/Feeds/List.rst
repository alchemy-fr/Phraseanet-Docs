Feeds List
===========

About
-----

  List all avalaible feeds 

  .. code-block:: bash

    /api/v1/feeds/list/

  ======================== =====
   Informations
  ======================== =====
   HTTP Method              GET
   Requires Authentication  Yes
  ======================== =====

Parameters
----------

  No parameter for this route

Response Fields
---------------

  ============= ================================
   Field         Description
  ============= ================================
   feeds         The list of feeds 
  ============= ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.0",
            "request": "GET /api/v1/feeds/list/",
            "response_time": "2011-07-27T15:02:45+02:00",
            "http_code": 200,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "feeds": {
                "288": {
                    "id": 288,
                    "title": "News",
                    "subtitle": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. ",
                    "total_entries": 0,
                    "icon": "/skins/icons/rss32.gif",
                    "created_on": "2011-07-20T18:45:20+02:00",
                    "updated_on": "2011-07-20T18:45:20+02:00"
                },
                "287": {
                    "id": 287,
                    "title": "Special Events",
                    "subtitle": "",
                    "total_entries": 0,
                    "icon": "/skins/icons/rss32.gif",
                    "created_on": "2011-07-20T18:45:20+02:00",
                    "updated_on": "2011-07-20T18:45:20+02:00"
                },
                "254": {
                    "id": 254,
                    "title": "Announcements",
                    "subtitle": "",
                    "total_entries": 0,
                    "icon": "/skins/icons/rss32.gif",
                    "created_on": "2011-07-20T18:34:17+02:00",
                    "updated_on": "2011-07-20T18:34:17+02:00"
                }
            }
        }
    }