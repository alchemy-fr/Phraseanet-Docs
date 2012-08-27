Authentification
================

  L'API Phraseanet v1 n'est accessible que par le protocole
  `oAuth2.0 <http://oauth.net/2/>`_.
  The Phraseanet API v1 can only be accessed via
  `oAuth2.0 <http://oauth.net/2/>`_.

  OAauth2.0 permet l'accés à une API sécurisée d'une manière simple et standard.
  OAauth2.0 allows a secure API authentication in a simple and standard way.


Bibliothèques clientes
----------------------

  On trouve des librairies écrites dans la plupart des langages ici :
  `oAuth2.0 libraries <http://oauth.net/code/>`_.
  You can find libraries in most languages here :
  `oAuth2.0 libraries <http://oauth.net/code/>`_.

Points d'accès
--------------

  * Point d'authorisation : /api/oauthv2/authorize
  * Point du token d'accés : /api/oauthv2/token
  * Authorization endpoint : /api/oauthv2/authorize
  * Access token endpoint : /api/oauthv2/token

Type d'authenfication supporté
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  * authorization_code

Type de réponse d'authorisation supporté
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  * code
  * token
  * code_and_token

.. note:: À cet instant, le jeton d'authentification n'a pas de date d'expiration,
    cependant, vous devez être préparer à cette éventualité dans le futur.
    N'oubiez pas qu'un utilisateur peut révoquer l'accés à ses données via la page
    de configuration de Phraseanet à n'importe quel moment.

.. note:: At this time we do not expire OAuth access tokens, you should be prepared for
    this possibility in the future. Also remember that a user may revoke access
    via the Phraseanet settings page at any time.

Authentification
----------------

  Avec oAuth2.0, pour recevoir les accés à l'API phraseanet,
  toutes les applications ont besoins d'enregistrer au moins leur
  nom et une URL de 'redirection' dans Phraseanet.

  For OAuth 2.0, all applications need to register their name and callback URL
  in Phraseanet to get their API credentials.

  Une fois l'application enregistrée, Phraseanet fournira un identifiant et un
  mot de passe qui identifie l'application nouvellement créée auprés de Phraseanet.

  From this registration process Phraseanet will provide you with your
  "Client ID" and your "Client Secret".

  L'enregistrement d'une nouvelle application utilisant l'API Phraseanet
  se fait dans la page de configuration d'un compte.
  On accéde à cette page en cliquant sur son identifiant dans la bar de menu de
  Phraseanet.

  The registration is done in the account settings. You can access this page
  by clicking your login in the menubar of Phraseanet.

Obtention d'un jeton d'accès
----------------------------

  Il y a trois manières différentes d'utiliser l'API Phraseanet.
  There are three ways to use the API.

Application internet
~~~~~~~~~~~~~~~~~~~~

  **Rediriger** les utilisateurs qui désirent authoriser l'accés à leurs données
  pour votre application en cliquant sur le lien suivant.

  **Redirect** users who wish authenticate to

  .. code-block:: bash

    https://SERVER_NAME/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &response_type=code
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI

  Si un utilisateur accepte, il sera alors rediriger sur l'URL de redirection
  enregistrée lors de la création de votre application. De plus un code
  temporaire d'authorisation vous sera fournit dans les paramètres de l'url.

  If a user accepts, he will then be redirected back to

  .. code-block:: bash

    https://YOUR_REGISTERED_REDIRECT_URI/?code=CODE

  Votre serveur ** effectuera une requête** à l'adresse suivante avec le code
  reçu précédemment afin d'obtenir un jeton d'accés valide pour requêter l'API.

  Your server will **make a request** for

  .. code-block:: bash

    https://SERVER_NAME/api/oauthv2/token
    ?client_id=YOUR_CLIENT_ID
    &grant_type=authorization_code
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI
    &code=CODE


  La réponse sera au format JSON.

  The response will be JSON

  .. code-block:: javascript

      {
        access_token: YOUR_ACCESS_TOKEN
      }

Applications AJAX
~~~~~~~~~~~~~~~~~

  **Rediriger** les utilisateurs qui désirent authoriser l'accés à leurs données
  à votre application en cliquant sur le lien suivant.

  **Redirect** users who wish authenticate to

  .. code-block:: bash

    https://SERVER_NAME/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &response_type=token
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI

  Si l'utilisateur accepte, il sera redirigé à l'adresse suivante.
  Le token d'accés sera alors disponible dans l'URL.

  If a user accepts, he will be redirected back to

  .. code-block:: bash

    https://YOUR_REGISTERED_REDIRECT_URI/#access_token=ACCESS_TOKEN

Applications Clientes
~~~~~~~~~~~~~~~~~~~~~

  Ce flux est destiné aux applications mobiles et de bureau qui veulent
  accéder à des données utilisateur.

  This flow is meant for mobile and desktop installed applications that want
  access to user data.

  Le flux d'authentification des applications natives est identique aux flux des
  applications internets à une exception prés.
  Il vous faut spécifier une URL de redirection
  spéciale ** urn: ietf: wg: oauth: 2.0: oob **. "oob" est l'acronyme de "out of band"
  et le reste de la chaîne identifie l'URL comme faisant parti
  du protocole oAuth2.0.

  The native app flow is identical to the server-side flow with one exception:
  a special redirect_uri. Instead of specifying an URL on your site, use the
  special string: **urn:ietf:wg:oauth:2.0:oob**. The "oob" part stands for
  "out of band" and the rest of the string identifies it as a part of
  the OAuth 2.0 standard.

  Lorsque vous utilisez cette url de redirection, au lieu de rediriger
  le navigateur de l'utilisateur vers une page de votre site avec un code
  d'autorisation, Phraseanet affiche la réponse d'autorisation dans un
  champ texte avec des instructions pour l'utilisateur de copier et de coller
  le code dans votre application.

  When you use this redirect_uri, instead of redirecting the user's browser
  to a page on your site with an authorization code, Phraseanet will display
  the authorization code or error response in a text field with instructions
  for the user to copy and paste it in to your application.

  .. code-block:: bash

    https://SERVER_NAME/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &redirect_uri=urn:ietf:wg:oauth:2.0:oob
    &response_type=code


Utilisation du jeton d'accès
----------------------------

  Vous pouvez utiliser le token d'accés pour appeler une ressource
  protégée en incluant ce token dans les paramétres de la requête ou bien
  dans un en-tête 'Authorization'.
  Par exemple :

  You can use your access token to call a protected API by including it
  in an oauth_token query parameter or an Authorization header
  in all available endpoint.
  For example :

  .. code-block:: bash

      curl https://SERVER_NAME/api/v1/baskets/list/?oauth_token=YOUR_ACCESS_TOKEN


