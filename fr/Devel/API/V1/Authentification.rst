Authentification
================

  L'API Phraseanet v1 n'est accessible que par le protocole
  `oAuth2.0 <http://oauth.net/2/>`_.

  OAauth2.0 permet l'accés à une API sécurisée d'une manière simple et standard.


Bibliothèques clientes
----------------------

  On trouve des librairies écrites dans la plupart des langages ici :
  `oAuth2.0 libraries <http://oauth.net/code/>`_.

Points d'accès
--------------

  * Point d'authorisation : /api/oauthv2/authorize
  * Point du token d'accés : /api/oauthv2/token

Type d'authentification supporté
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  * authorization_code
  * password

Type de réponse d'authorisation supporté
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  * code
  * token
  * code_and_token

.. note:: A cet instant, le jeton d'authentification n'a pas de date d'expiration,
    cependant, il faut être préparer à cette éventualité dans le futur.
    Ne pas oublier qu'un utilisateur peut révoquer l'accés à ses données via la page
    de configuration de Phraseanet à n'importe quel moment.

Authentification
----------------

  Avec oAuth2.0, pour recevoir les accés à l'API phraseanet,
  toutes les applications ont besoins d'enregistrer au moins leur
  nom et une URL de 'redirection' dans Phraseanet.

  Une fois l'application enregistrée, Phraseanet fournira un identifiant et un
  mot de passe qui identifie l'application nouvellement créée auprés de Phraseanet.

  L'enregistrement d'une nouvelle application utilisant l'API Phraseanet
  se fait dans la page de configuration d'un compte.
  On accéde à cette page en cliquant sur son identifiant dans la bar de menu de
  Phraseanet.

Obtention d'un jeton d'accès
----------------------------

  Il y a trois manières différentes d'utiliser l'API Phraseanet.

Application internet
~~~~~~~~~~~~~~~~~~~~

  **Rediriger** les utilisateurs qui désirent authoriser l'accés à leurs données
  pour votre application en cliquant sur le lien suivant.

  .. code-block:: bash

    https://SERVER_NAME/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &response_type=code
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI

  Si un utilisateur accepte, il est redirigé sur l'URL de redirection
  enregistrée lors de la création de votre application. De plus un code
  temporaire d'authorisation est fournit dans les paramètres de l'url.

  .. code-block:: bash

    https://YOUR_REGISTERED_REDIRECT_URI/?code=CODE

  Votre serveur **effectue une requête** à l'adresse suivante avec le code
  reçu précédemment afin d'obtenir un jeton d'accés valide pour requêter l'API.

  .. code-block:: bash

    https://SERVER_NAME/api/oauthv2/token
    ?client_id=YOUR_CLIENT_ID
    &grant_type=authorization_code
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI
    &code=CODE


  La réponse est au format JSON.

  .. code-block:: javascript

      {
        access_token: YOUR_ACCESS_TOKEN
      }

Applications AJAX
~~~~~~~~~~~~~~~~~

  **Rediriger** les utilisateurs qui désirent authoriser l'accés à leurs données
  à votre application en cliquant sur le lien suivant.

  .. code-block:: bash

    https://SERVER_NAME/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &response_type=token
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI

  Si l'utilisateur accepte, il est redirigé à l'adresse suivante.
  Le token d'accés est alors disponible dans l'URL.

  .. code-block:: bash

    https://YOUR_REGISTERED_REDIRECT_URI/#access_token=ACCESS_TOKEN

Applications Clientes
~~~~~~~~~~~~~~~~~~~~~

  Ce flux est destiné aux applications mobiles et de bureau qui
  veulent accéder à des données utilisateurs.

  Le flux d'authentification des applications natives est identique aux flux des
  applications internets à une exception prés.
  Il faut spécifier une URL de redirection
  spéciale **urn: ietf: wg: oauth: 2.0: oob**. "oob" est l'acronyme de "out of band"
  et le reste de la chaîne identifie l'URL comme faisant parti
  du protocole oAuth2.0.

  Lorsque cette url de redirection est utilisée,
  Phraseanet affiche la réponse d'autorisation dans un
  champ texte avec des instructions pour l'utilisateur de copier et de coller
  le code dans votre application.

  .. code-block:: bash

    https://SERVER_NAME/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &redirect_uri=urn:ietf:wg:oauth:2.0:oob
    &response_type=code


Utilisation du jeton d'accès
----------------------------

  Le token d'accés peut être utiliser pour appeler une ressource
  protégée en incluant celui-ci dans les paramétres de la requête ou bien
  dans un en-tête 'Authorization'.
  Par exemple :

  .. code-block:: bash

      curl https://SERVER_NAME/api/v1/baskets/list/?oauth_token=YOUR_ACCESS_TOKEN


Utiliser le type d'authentification 'password'
----------------------------------------------

Pour obtenir directement un jeton d'accés, utiliser les informations
d'indentification de l'utilisateur qui détient les ressources Phraseanet.
(cf. un identifiant et un mot de passe)

Cette méthode évite le besoin d'avoir à stocker le jeton d'autorisation d'accès.

.. warning::
    Attention, cette méthode ne doit être utilisée que lorsqu'il y a un degré 
    élevé de confiance entre le propriétaire de la ressource et le client.

.. seealso:: 
    Voir aussi `http://tools.ietf.org/html/draft-ietf-oauth-v2-10#section-4.1.2 <http://tools.ietf.org/html/draft-ietf-oauth-v2-10#section-4.1.2/>`_.

.. code-block:: bash

    https://SERVER_NAME/api/oauthv2/token
    ?client_id=YOUR_CLIENT_ID
    &grant_type=password
    &username=johndoe
    &password=A3ddj3w
