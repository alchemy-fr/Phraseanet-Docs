Recommendations
===============

Use HTTPS
---------

Since Phraseanet APIs does not provide any public endpoint, all requests need
to be signed, it results in the transmission of plain text credentials in the
HTTP request, to protect this sensitive information, the authorization server
must require the use of a transport-layer security mechanism when sending
requests to any Phraseanet API endpoints.

Use HTTP 1.1 connection
-----------------------

To improve the loading time of pages and reduce load for the network infrastructure
as well as for servers and HTTP clients.
You should use HTTP 1.1 and pipelining your requests into one TCP connection.
