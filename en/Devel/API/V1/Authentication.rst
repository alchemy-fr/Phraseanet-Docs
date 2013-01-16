Authentication
==============

  The Phraseanet API v1 can only be accessed via `oAuth2.0`_.

  OAauth2.0 allows a secure API authentication in a simple and standard way.

Libraries
---------

  You can find libraries in most languages here :
  `oAuth2.0 libraries`_.

Endpoints
---------

  * Authorization endpoint : /api/oauthv2/authorize
  * Access token endpoint : /api/oauthv2/token

Supported Access Grant Type
~~~~~~~~~~~~~~~~~~~~~~~~~~~
  * authorization_code
  * password

Supported Authorization Response Type
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  * code
  * token
  * code_and_token

.. note:: At this time we do not expire OAuth access tokens, you should be prepared for
    this possibility in the future. Also remember that a user may revoke access
    via the Phraseanet settings page at any time.

Sign Up
-------

  For OAuth 2.0, all applications need to register their name and callback URL
  in Phraseanet to get their API credentials.

  From this registration process Phraseanet will provide you with your
  "Client ID" and your "Client Secret".

  The registration is done in the account settings. You can access this page
  by clicking your login in the menubar of Phraseanet.

Obtaining an access token
-------------------------

  There are three ways to use the API.

Web based applications
~~~~~~~~~~~~~~~~~~~~~~

  **Redirect** users who wish authenticate to

  .. code-block:: bash

    https://SERVER_NAME/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &response_type=code
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI

  If a user accepts, he will then be redirected back to

  .. code-block:: bash

    https://YOUR_REGISTERED_REDIRECT_URI/?code=CODE

  Your server will **make a request** for

  .. code-block:: bash

    https://SERVER_NAME/api/oauthv2/token
    ?client_id=YOUR_CLIENT_ID
    &grant_type=authorization_code
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI
    &code=CODE

  The response will be JSON

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

  If a user accepts, he will be redirected back to

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
  to a page on your site with an authorization code, Phraseanet will display
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

.. _oAuth2.0: http://oauth.net/2/
.. _oAuth2.0 libraries: http://oauth.net/code/
.. _RFC oAuth v2 draft #10: http://tools.ietf.org/html/draft-ietf-oauth-v2-10#section-4.1.2
