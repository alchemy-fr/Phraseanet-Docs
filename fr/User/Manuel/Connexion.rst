Connexion à Phraseanet
======================

Bien qu'il soit possible de consulter un fonds *Phraseanet* comme invité, ce qui
reste un choix de paramétrage possible, l'utilisateur peut être amené à créer un
compte et à s'authentifier pour accéder à un fonds multimédia.

Authentification
----------------

* Se connecter à l'adresse internet de la solution Phraseanet au moyen d'un
  navigateur Web.
  La page d'accueil permettant la connexion s'affiche :

.. image:: ../../images/Authentification.jpg
    :align: center

* Si elle ne convient pas, ajuster la langue d'interface dans la liste
  déroulante.
* Saisir l'identifiant.
* Saisir le mot de passe.
* Cliquer sur **Connexion**.
* En cas d'oubli du mot de passe, suivre la procédure de récupération en
  cliquant sur le lien "Mot de Passe oublié ?".

Authentification déportée *via* OAuth
-------------------------------------

:term:`OAuth` est un protocole d'authentification libre et sécurisé permettant
de s'authentifier au moyen d'un compte d'une application indépendante.

.. image:: ../../images/Authentification-oauth.jpg
    :align: center

Dans la version 3.8, la nouvelle page d'accueil permet de s'authentifier via les
applications web suivantes :

* Facebook
* Twitter
* Gmail
* GitHub
* Viadeo
* Linkedin

OAuth étant un standard ouvert, d'autres fournisseurs d'identité numérique
peuvent s'ajouter.

Inscription
-----------

Selon les choix de paramétrage du système, un lien permettant l'inscription de
nouveaux utilisateurs peut exister sur la page de connexion de *Phraseanet*.

* Cliquer sur **Inscription** dans la page d'accueil.

.. image:: ../../images/Authentification-inscription.jpg
    :align: center

* Cliquer sur le bouton **Créer un compte manuellement** puis remplir et
  soumettre le formulaire.

**Ou bien**

* Choisir de se connecter au moyen d'une authentification déportée OAuth en
  sélectionnant le service fournisseur d'authentification.

.. image:: ../../images/Authentification-choix-inscription.jpg
    :align: center

* Remplir et soumettre le formulaire.

Lorsque le formulaire est soumis, la page d'accueil s'affiche et informe l'
utilisateur que sa demande d'inscription a été prise en compte. Un
administrateur *Phraseanet* finalise ensuite l'inscription.

.. note::

    Même avec OAuth il est nécessaire de fournir un mot de passe à l'
    inscription.


Mot de passe perdu ?
--------------------

Cliquer sur le lien **Mot de Passe oublié ?**.
Sur la page *Mot de passe oublié*, remplir le formulaire proposé avec l'adresse
email lié au compte Phraseanet.

Une fois le formulaire complété et soumis, un email est envoyé. Il permet
rejoindre, via un lien, l'interface de ré-initialisation de mot de passe.
Ce lien n'est valide que pour une durée limitée dans le temps.
Si l'email n'est pas reçu, consulter le dossier des courriers indésirables
du programme de messagerie.

Cliquer sur le lien proposé par l'email reçu pour rejoindre l'interface de
ré-initialisation de mot de passe.
Suivre les instructions proposées à l'écran puis valider le formulaire
pour réinitialiser le mot de passe.

.. warning::

    Les mots de passe sont sensibles à la casse.

Après ré-initialisation du mot de passe, se connecter au moyen du formulaire
disponible en page d’accueil de l'application Phraseanet.

Le compte invité
----------------

Le compte invité est un compte comparable aux autres comptes *Phraseanet*. Il
permet de consulter une ou plusieurs collections sans nécessiter
d'authentification.

Une fois l'accès invité configuré, un bouton apparaît en bas de la page de
connexion.

.. image:: ../../images/Authentification-invite.jpg
    :align: center

Se reporter à
:doc:`cette section <../../FAQ/Personnalisation/Parametrer-le-compte-invite>`
pour la mise en oeuvre de l'accès invité.
