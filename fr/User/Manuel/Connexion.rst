Connexion à Phraseanet
======================

Bien qu'il soit possible de consulter un fonds Phraseanet comme invité, un choix
de paramétrage possible, l'utilisateur peut être amené à créer un compte et à
s'authentifier pour accéder à un fonds multimédia.

.. image:: ../../images/Authentification-todo4.jpg
    :align: center

Authentification
----------------

* Afficher la page d'accueil de l'application au moyen d'un navigateur Web
* Ajuster si nécessaire la langue d'interface au moyen du menu déroulant
  *Langue*
* Saisir l'identifiant de connexion ainsi que le mot de passe
* Cliquer sur **Connexion**

En cas d'oubli du mot de passe, suivre la procédure de récupération en cliquant
sur le lien :ref:`Mot de Passe oublié ?<Connexion-Mot-de-passe-oublie>`.

Lors de la connexion à Phraseanet, la dernière application utilisée se lance
ou, à défaut, :doc:`Production <Afficher>`.

Authentification via des fournisseurs tiers
-------------------------------------------

*Phraseanet* permet de déléguer l'authentification d'utilisateurs à des
fournisseurs d'authentification dont les applications web suivantes :

* Facebook
* Twitter
* Gmail
* GitHub
* Viadeo
* Linkedin

D'autres fournisseurs d'identité numérique peuvent s'ajouter.

.. note::

    Pour paramétrer une liste des fournisseurs d'authentification se reporter à
    :doc:`la section configuration <../../Admin/Configuration>`.

Inscription
-----------

Selon les choix de paramétrage du système par les administrateurs, un bouton
permettant de s'inscrire comme nouvel utilisateur peut figurer sur la page de
connexion.

* Cliquer sur le bouton **Inscription** pour accéder au formulaire
  d'inscription.

Si l'authentification via des fournisseurs tiers est activée, deux
possibilités :

* Cliquer sur le bouton **Créer un compte manuellement** puis remplir et
  soumettre le formulaire.

**Ou bien**

* Choisir de se connecter au moyen d'une authentification tierce en
  sélectionnant le service fournisseur.
* Remplir et soumettre le formulaire.

.. note::

    Même avec un fournisseur d'authentification il est nécessaire de fournir
    un mot de passe lors de l'inscription. Ce mot de passe est destiné au compte
    local *Phraseanet*. Il peut donc être différent de celui utilisé chez le
    fournisseur d'identité.

Lorsque le formulaire est soumis, un message s'affiche sur la page de connexion.
Il informe l'utilisateur que sa demande d'inscription a été prise en compte.
Notifié, un administrateur peut être amené à valider l'inscription dans le
module d'Administration.

.. _Connexion-Mot-de-passe-oublie:

Mot de passe oublié ?
---------------------

* Cliquer sur le lien **Mot de Passe oublié ?**
* Remplir et soumettre le formulaire proposé avec l'adresse e-mail liée au
  compte Phraseanet

Une fois le formulaire complété et soumis, un e-mail est envoyé. Il contient un
lien permettant de rejoindre l'interface d'initialisation de mot de passe.

.. warning::

    Le lien n'est valide que pour une durée limitée.
    Si l'e-mail n'est pas reçu, consulter le dossier des courriers indésirables
    du programme de messagerie.

Cliquer sur le lien proposé dans l'e-mail reçu pour rejoindre l'interface
d'initialisation de mot de passe.

Suivre les instructions proposées puis valider le formulaire.

.. warning::

    Les mots de passe sont sensibles à la casse.

Après initialisation du mot de passe, se connecter au moyen du formulaire
disponible en page d’accueil.

Le compte invité
----------------

Un accès invité peut être disponible sur la page d'accueil. Cliquer sur le
bouton **Accès invité** pour se connecter au moyen de ce compte.

.. note::

  Le compte invité est un compte comparable aux autres comptes Phraseanet. Il
  permet de consulter une ou plusieurs collections sans nécessiter
  d'authentification.

  Se reporter à
  :doc:`cette section <../../FAQ/Personnalisation/Parametrer-le-compte-invite>`
  pour la mise en oeuvre de l'accès invité.
