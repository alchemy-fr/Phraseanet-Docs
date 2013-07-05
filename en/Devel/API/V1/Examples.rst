Use cases
=========

Search records using specific fields
------------------------------------

To retrieve all images of "Paris" the city, first query the API with the
term "paris" but some pictures of Paris the city or any other
pictures with someone named Paris or containing "paris" in the indexed fields
for example could be fetched.

Considering that the field "City" is conscientiously filled, it's a good idea 
to restrict the search to this field only : the query can be done by searching
terms in a specified list of documentary fields.

To do so, provide an additional "fields" parameter and explicitly ask
for the desired fields where to look for.


.. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&fields[]=City&type=image" https://mydomain.tld/api/v1/search/

.. note::

    The "fields" parameter is an array, so one or more fields can be specified.
