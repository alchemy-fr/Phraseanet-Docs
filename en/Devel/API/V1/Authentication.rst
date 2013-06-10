Authentication
==============

The Phraseanet API v1 can only be accessed via `oAuth2.0`_.
OAauth2.0 allows a secure API authentication in a simple and standard way.

Libraries
---------

For PHP development, it is strongly recomended to use the `Phraseanet PHP SDK`_.
For other languages, you can find some `oAuth2.0 libraries`_.

Phraseanet Oauth2 Endpoints
---------------------------

* Authorization endpoint : /api/oauthv2/authorize
* Access token endpoint : /api/oauthv2/token

.. _grant-types:

Supported Access Grant Type
~~~~~~~~~~~~~~~~~~~~~~~~~~~

* authorization_code
* password

.. _response-types:

Supported Authorization Response Type
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* code
* token
* code_and_token

.. note::

    At this time OAuth access tokens do not expire, you should be prepared for
    this possibility in the future. Also remember that a user may revoke access
    via the Phraseanet settings page at any time.

Sign Up
-------

For OAuth 2.0, all applications need to register their name and callback URL
in Phraseanet to get their API credentials.

From this registration process Phraseanet provides the "Client ID" and
"Client Secret".

The registration is done in the account settings. You can access this page
by clicking your login in the menubar of Phraseanet.

Obtaining an access token
-------------------------

There are three ways to use the API.

Web based applications
~~~~~~~~~~~~~~~~~~~~~~

Developer must Redirect end-user to the authorize endpoint with the following
query parameters :

- client_id :
    *mandatory* **string** - The client ID received from Phraseanet on
    registration.
- client_secret :
    *optional* **string** - The client secret received from Phraseanet on
    registration.
- response_type :
    *mandatory* **string** - One of the available :ref:`response types<response-types>`.
- redirect_uri :
    *mandatory* **string** - The same redirect URI you provided on registration.
- state :
    *optional* **string** - An unguessable random string. It is used to protect
    against cross-site request forgery attacks.

End-user authenticates on Phraseanet and the browser is redirected to the
*redirect_uri* callback.

.. code-block:: bash

    https://SERVER_NAME/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &response_type=code
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI

**If authentication succeed**, a **code** parameter is available in the URI, alongside
the **state** parameter (if provided).
**If authentication failed**, an error parameter is available.

Example of successful URI :

.. code-block:: bash

    https://example.com/callback/?code=49ce2762ff5413607ae936b2ca6e409e

Example of errored URI :

.. code-block:: bash

    https://example.com/callback/?error=Invalid+user

Once the developer has a code, he must exchange it to an oauth_token using the
token endpoint. Whereas the previous step is an interaction between the end-user
and Phraseanet, this exchange is done server side.

Parameters for the token endpoint are as follow :

- client_id :
    *mandatory* **string** - The client ID received from Phraseanet on
    registration.
- client_secret :
    *optional* **string** - The client secret received from Phraseanet on
    registration.
- grant_type :
    *mandatory* **string** - One of the available :ref:`grant types<grant-types>`.
- redirect_uri :
    *mandatory* **string** - The same redirect URI you provided on registration.
- code : (**mandatory**)
    *mandatory* **string** - The code returned on a successful call to the
    authorize end point.

.. code-block:: bash

    https://SERVER_NAME/api/oauthv2/token
    ?client_id=YOUR_CLIENT_ID
    &grant_type=authorization_code
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI
    &code=CODE

The response is JSON

.. code-block:: javascript

      {
        access_token: YOUR_ACCESS_TOKEN
      }

Pure AJAX application
~~~~~~~~~~~~~~~~~~~~~

**Redirect** users who wish authenticate to

.. code-block:: bash

    https://SERVER_NAME/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &response_type=token
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI

If the user accepts, he is redirected back to

.. code-block:: bash

    https://YOUR_REGISTERED_REDIRECT_URI/#access_token=ACCESS_TOKEN

Client-side application
~~~~~~~~~~~~~~~~~~~~~~~

This flow is meant for mobile and desktop installed applications that want
access to user data.

The native app flow is identical to the server-side flow with one exception:
a special redirect_uri. Instead of specifying an URL on your site, use the
special string: **urn:ietf:wg:oauth:2.0:oob**. The "oob" part stands for
"out of band" and the rest of the string identifies it as a part of
the OAuth 2.0 standard.

When you use this redirect_uri, instead of redirecting the user's browser
to a page on your site with an authorization code, Phraseanet displays
the authorization code or error response in a text field with instructions
for the user to copy and paste it in to your application.

.. code-block:: bash

    https://SERVER_NAME/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &redirect_uri=urn:ietf:wg:oauth:2.0:oob
    &response_type=code

Using your access token
-----------------------

You can use your access token to call a protected API by including it
in an oauth_token query parameter or an Authorization header
in all available endpoint.
For example :

.. code-block:: bash

    curl https://SERVER_NAME/api/v1/baskets/list/?oauth_token=YOUR_ACCESS_TOKEN

Using password grant type
-------------------------

To obtain an access token, you can use the resource owner password credentials.
(i.e. a username and password)

This method eliminates the need for the client to store the
resource-owner's credentials for future use.

.. warning::

    This method should only be used when there is a high degree of trust between the
    resource owner and the client.

.. seealso::

    See `RFC oAuth v2 draft #10`_.

.. code-block:: bash

    https://SERVER_NAME/api/oauthv2/token
    ?client_id=YOUR_CLIENT_ID
    &grant_type=password
    &username=johndoe
    &password=A3ddj3w

.. _Phraseanet PHP SDK: https://github.com/alchemy-fr/Phraseanet-PHP-SDK
.. _oAuth2.0: http://oauth.net/2/
.. _oAuth2.0 libraries: http://oauth.net/code/
.. _RFC oAuth v2 draft #10: http://tools.ietf.org/html/draft-ietf-oauth-v2-10#section-4.1.2
