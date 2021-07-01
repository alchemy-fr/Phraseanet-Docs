Authentification
================

L'API Phraseanet v1 n'est accessible que par le protocole `oAuth2.0`_.
OAauth2.0 permet l'accés à une API sécurisée d'une manière simple et standard.

Bibliothèques clientes
----------------------

Pour le développement en PHP, il est recommandé d'utiliser la `Phraseanet PHP SDK`_.
Pour les autres langages, des librairies sont consultables dans `oAuth2.0 libraries`_.

OAuth 2
-------

Code d'autorisation
********************

Un code d'autorisation représente l'autorisation du propriétaire de la
ressource (pour accéder à ses ressources protégées).
il est utilisé par le client pour obtenir un jeton d'accès.

.. _jeton-acces:

Jeton d'accés
*************

Le jetons d'accès est un code d'identification utilisées pour accéder aux
ressources protégées d'un utilisateur de Phraseanet.

.. _obtenir-code-autorisation:

Obtenir un code d'autorisation
-------------------------------

Pour obtenir une demande d'autorisation d'accés aux ressources d'un utilisateur
Phraseanet le développeur doit rediriger l'utilisateur final vers l'URL
d'autorisation.

.. code-block:: bash

    https://exemple.instance.phrasea.net/api/oauthv2/authorize

avec les paramètres suivants :

- client_id :
    *mandatory* **string** - Le client ID reçu de Phraseanet lors de la création
    de l'application tierce.
- client_secret :
    *optional* **string** - Le client secret reçu de Phraseanet lors de la
    création de l'application tierce.
- response_type :
    *mandatory* **string** - L'un des :ref:`types de reponse<response-types>`.
- redirect_uri :
    *mandatory* **string** - La même URI de redirection fournie lors de
    l'application tierce.
- state :
    *optional* **string** - Une chaîne de caractère non prédictible (Sert à
    proteger contre les attaques CSRF).

**Exemple de redirection via un navigateur internet.**

.. code-block:: html

    <a href="https://exemple.instance.phrasea.net/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &response_type=YOUR_RESPONSE_TYPE
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI">Cliquer ici pour vous
    authentifier avec Phraseanet</a>

.. _response-types:

Format des réponses d'une demande d'autorisation
*************************************************

Une demande d'autorisation peut renvoyer un code d'autorisation de trois
manières différentes en fonction du paramètre "response_type" qui est fournit
dans l'URL d'autorisation.

- code
- token
- code_and_token

code
^^^^

Renvoi un code d'autorisation dans un paramètre de l'URI de redirection fournie
lors de la :doc:`création d'une application tierce <../../ApplicationDeveloper>`.

**Requête**

.. code-block:: html

    <a href="https://exemple.instance.phrasea.net/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &response_type=code
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI">Cliquer ici pour vous
    authentifier avec Phraseanet</a>

**Réponse**

.. code-block:: bash

    https://YOUR_REGISTERED_REDIRECT_URI/?code=AUTHORISATION_CODE

.. _autorisation-token:

token
^^^^^

De manière implicite, renvoi un jeton d'accés présent sous forme d'un fragment
de l'URI de redirection.

Voir :ref:`cas d'utilisation : application ajax<application-ajax>`.

**Requête**

.. code-block:: html

    <a href="https://exemple.instance.phrasea.net/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &response_type=token
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI">Cliquer ici pour vous
    authentifier avec Phraseanet</a>

**Réponse**

.. code-block:: bash

    https://YOUR_REGISTERED_REDIRECT_URI/#access_token=ACCESS_TOKEN

code_and_token
~~~~~~~~~~~~~~

Renvoi à la fois un code d'autorisation dans l'URI de redirection ainsi qu'un
fragment contenant un jeton d'accés.

**Requête**

.. code-block:: html

    <a href="https://exemple.instance.phrasea.net/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &response_type=code_and_token
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI">Cliquer ici pour vous
    authentifier avec Phraseanet</a>

**Réponse**

.. code-block:: bash

    https://YOUR_REGISTERED_REDIRECT_URI/?code=AUTHORISATION8CODE#access_token=ACCESS_TOKEN

.. _obtenir-jeton-acces:

Obtenir un jeton d'accés
------------------------

Il existe différentes manières de récupérer un jeton d'accés pour accéder aux
ressources de Phraseanet.

- Par demande d'autorisation au propriétaire des ressources.
- Par demande implicite.
- Par demande d'identification au propriétaire.

Voir les :ref:`cas-utilisation`.

Pour obtenir une jeton d'accés aux ressources d'un utilisateur
Phraseanet le développeur doit effectuer une requête HTTP vers l'URL d'accés.

.. code-block:: bash

    https://exemple.instance.phrasea.net/api/oauthv2/token

Les paramètres pour l'URL du token d'accès varient selon le type
d'authentification demandé par le dévéleppeur.

Types d'authentification
************************

L'API Phraseanet supporte deux méthodes d'authentification.

.. _obtenir-jeton-acces-autorisation-code:

authorization_code
^^^^^^^^^^^^^^^^^^

Cette méthode nécessite l'obtention au prélabale d'un code d'autorisation.

Voir :ref:`obtenir-code-autorisation`.

**Paramètres**

- client_id :
    *mandatory* **string** - Le client ID reçu de Phraseanet lors de la création
    de l'application tierce.
- client_secret :
    *optional* **string** - Le client secret reçu de Phraseanet lors de la
    création de l'application tierce.
- grant_type :
    *mandatory* **string** - authorization_code
- redirect_uri :
    *mandatory* **string** - La même URI de redirection fournie lors de
    l'application tierce.
- code :
    *mandatory* **string** - Le code rétourné par le point d'autorisation.

.. code-block:: bash

    curl --data
    "client_id=YOUR_CLIENT_ID
    &grant_type=authorization_code
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI
    &code=CODE" https://exemple.instance.phrasea.net/api/oauthv2/token

La réponse est au format JSON.

.. code-block:: javascript

    {
      access_token: YOUR_ACCESS_TOKEN
    }

.. _obtenir-jeton-acces-password:

password
^^^^^^^^

Cette méthode ne nécessite pas l'obtention d'un code d'autorisation mais
l'identifiant et le mot de passe Phraseanet du propriétaire de la ressource.

.. warning::

    Attention, cette méthode ne doit être utilisée que lorsqu'il y a un degré
    élevé de confiance entre le propriétaire de la ressource et le client.

**Paramètres**

- client_id :
    *mandatory* **string** - Le client ID reçu de Phraseanet lors de la création
    de l'application tierce.
- client_secret :
    *optional* **string** - Le client secret reçu de Phraseanet lors de la
    création de l'application tierce.
- grant_type :
    *mandatory* **string** - password
- redirect_uri :
    *mandatory* **string** - La même URI de redirection fournie lors de
    l'application tierce.
- username :
    *mandatory* **string** - L'identifiant Phraseanet du proriétaire de la
    ressource.
- password :
    *mandatory* **string** - Le mot de passe Phraseanet du proriétaire de la
    ressource.

.. code-block:: bash

    curl --data
    "client_id=YOUR_CLIENT_ID
    &grant_type=password
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI
    &username=USERNAME
    &password=PASSWORD" https://exemple.instance.phrasea.net/api/oauthv2/token

La réponse est au format JSON.

.. code-block:: javascript

    {
      access_token: YOUR_ACCESS_TOKEN
    }

.. _cas-utilisation:

Cas d'utilisation
-----------------

Demande d'autorisation
***********************

Application Internet
^^^^^^^^^^^^^^^^^^^^

Le développeur doit rediriger l'utilisateur final vers le point d'autorisation
pour obtenir un code d'autorisation.

Voir :ref:`obtenir-code-autorisation`.

.. code-block:: html

    <a href="https://exemple.instance.phrasea.net/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &response_type=code
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI">Cliquer ici pour vous
    authentifier</a>

L'utilisateur final s'identifie sur Phraseanet et le navigateur est redirigé
vers *redirect_uri*.

**Si l'authentification est correcte**, un paramètre **code** est disponible dans
l'URI de retour, à côté du paramètre **state** (si fourni).

**Si l'authentification est incorrecte**, un paramètre **error** est présent.

Exemple d'URI après succès d'authentification :

.. code-block:: bash

    https://YOUR_REGISTERED_REDIRECT_URI/?code=49ce2762ff5413607ae936b2ca6e409e

Exemple d'URI en erreur.

.. code-block:: bash

    https://YOUR_REGISTERED_REDIRECT_URI/?error=Invalid+user

Une fois que le développeur a récupéré le **code**, il doit être échangé contre
un token oauth en utilisant le point du token d'accès. Tandis que l'étape
précédente résulte de l'interaction entre l'utilisateur final et Phraseanet, cet
échange est fait côté serveur.

Voir :ref:`obtenir un jeton d'accés <obtenir-jeton-acces-autorisation-code>`.

.. code-block:: bash

    curl --data "client_id=YOUR_CLIENT_ID
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI
    &grant_type=authorization_code
    &code=a7udj6y880" https://exemple.instance.phrasea.net/api/oauthv2/token

Application Cliente
^^^^^^^^^^^^^^^^^^^

Ce flux est destiné aux applications mobiles et de bureau qui
veulent accéder à des données utilisateurs.

Le flux d'authentification des applications natives est identique aux flux des
applications internet à une exception prés.
Il faut spécifier une URL de redirection spéciale
**urn: ietf: wg: oauth: 2.0: oob**.
"oob" est l'acronyme de "out of band" et le reste de la chaîne identifie l'URL
comme faisant partie du protocole oAuth2.0.

Lorsque cette url de redirection est utilisée, Phraseanet affiche le code
d'autorisation dans un champ texte avec comme instruction pour l'utilisateur
de copier et de coller ce code dans l'application.

.. code-block:: html

    <a href="https://SERVER_NAME/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &response_type=code
    &redirect_uri=urn:ietf:wg:oauth:2.0:oob">Cliquer ici pour vous
    authentifier</a>

Une fois que le développeur a récupéré le **code**, il doit être échangé contre
un token oauth en utilisant l'url du token d'accès. Cet échange est fait par
l'intermédiaire de l'application cliente.

Voir :ref:`obtenir un jeton d'accés <obtenir-jeton-acces-autorisation-code>`.

.. code-block:: bash

    curl --data "client_id=YOUR_CLIENT_ID
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI
    &grant_type=authorization_code
    &code=a7udj6y880" https://exemple.instance.phrasea.net/api/oauthv2/token

.. _application-ajax:

Applications AJAX
^^^^^^^^^^^^^^^^^

Le développeur doit rediriger l'utilisateur final vers le point d'autorisation
et récupére à l'issue de la redirection non pas un code d'autorisation
mais directement un token d'accés de manière implicite.

Voir :ref:`obtenir un token via une demande d'autorisation <autorisation-token>`.

.. code-block:: html

    <a href="https://exemple.instance.phrasea.net/api/oauthv2/authorize
    ?client_id=YOUR_CLIENT_ID
    &response_type=token
    &redirect_uri=YOUR_REGISTERED_REDIRECT_URI">Cliquer ici pour vous
    authentifier</a>


Si l'utilisateur accepte, il est redirigé à l'adresse suivante :

.. code-block:: bash

    https://YOUR_REGISTERED_REDIRECT_URI/#access_token=ACCESS_TOKEN

Le token d'accés est alors disponible dans le fragment de l'URL de redirection.


Demande d'identification
************************

Pour obtenir directement un jeton d'accés, utiliser les informations
d'identification de l'utilisateur qui détient les ressources Phraseanet
(*cf* un identifiant et un mot de passe).

Cette méthode évite le besoin d'avoir à stocker un code d'autorisation.

L'opération consiste à effectuer une requête sur l'url du token d'accés afin de
récupérer un jeton valide.

Voir :ref:`Obtenir un jeton d'accés <obtenir-jeton-acces-password>`

.. code-block:: bash

    curl --data "client_id=YOUR_CLIENT_ID
    &grant_type=password
    &username=johndoe
    &password=A3ddj3w" https://exemple.instance.phrasea.net/api/oauthv2/token

.. note::

    Ce type d'authentification n'est active que si l'application cliente
    enregistrée auprés de Phraseanet authorise ce type d'authentification.

Utilisation du jeton d'accès
----------------------------

Le token d'accés peut être utiliser pour appeler une ressource
protégée en incluant celui-ci dans les paramétres de la requête ou bien
dans un en-tête 'Authorization'.
Par exemple :

.. code-block:: bash

    curl https://exemple.instance.phrasea.net/api/v1/baskets/list/?oauth_token=YOUR_ACCESS_TOKEN

.. note::

    A cet instant, le jeton d'authentification n'a pas de date d'expiration,
    cependant, il faut être préparer à cette éventualité dans le futur.
    Cependant un utilisateur peut révoquer l'accès à ses données via la page
    de configuration de Phraseanet à n'importe quel moment.

.. _authentification-password:

.. _Phraseanet PHP SDK: https://github.com/alchemy-fr/Phraseanet-PHP-SDK
.. _oAuth2.0: https://oauth.net/2/
.. _oAuth2.0 libraries: https://oauth.net/code/
.. _RFC oAuth v2 draft #10: https://datatracker.ietf.org/doc/html/draft-ietf-oauth-v2-10#section-4.1.2
