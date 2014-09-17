Ajouter une base
================

.. topic:: L'essentiel

    A l'issue de l'installation, une base est disponible dans l'application
    pour accueillir les médias. Cependant pour une raison ou pour une autre,
    il peut être nécessaire d'en créer une autre. Comment créer une nouvelle
    base Phraseanet ?

Créer une nouvelle base dans le gestionnaire de base de données
---------------------------------------------------------------

Cette première opération s'effectue en dehors de Phraseanet.

* Demander à l'administrateur système de créer une nouvelle base dans le
  gestionnaire de base de données (MariaBD / MySQL).

.. seealso::

    `Consulter la documentation MySQL`_

.. note::

    Cette base peut être créée sur le même serveur de base de données que celui
    de l'Application box (la base applicative de Phraseanet) ou bien sur un
    autre serveur de base de données.

.. warning::

    Dans les deux cas, demander à ce que l'application Phraseanet puisse
    accéder à la base de données avec un niveau de droits suffisants, selon le
    contexte de déploiement.

* Récupérer le nom de la base créée et si la base est créée sur un autre
  serveur que celui de l'Application box, les paramètres de connexion.
* Se connecter à Phraseanet Admin comme administrateur.

Créer la base Phraseanet
------------------------

Dans Admin, cliquer sur la rubrique *Base*.

* Remplir le formulaire **Créer une base**

  **Si la base de données créée est située sur le même serveur que l'
  Application box**, indiquer le nom de la base puis choisir une des
  structures documentaires proposées dans le menu déroulant
  *Modèle de structure XML*.

  .. image:: ../../images/Faq-creer-base1.jpg
      :align: center


  **Si la base de données créée est située sur un autre serveur que l'
  Application box**, cocher la case *Créer une base sur un autre serveur* puis
  renseigner les paramètres de connexion au serveur de base de données :

  * **Le nom d'hôte ou Hostname**
  * **Le numéro de port** (3306 par défaut)
  * **Le nom d'utilisateur de la base MySQL**
  * **Le mot de passe de l'utilisateur de la base MySQL**
  * **Le nom de la base créée**

  Choisir une des structures documentaires proposées dans le menu déroulant
  *Modèle de structure XML*.

  .. image:: ../../images/Faq-creer-base2.jpg
      :align: center


* Soumettre le formulaire

Le script lancé automatise la création des tables nécessaires dans le
gestionnaire de base de données.

A l'issue du processus de création, la structure de la base de données peut
être paramétrée.

.. seealso::

    Se reporter à la page consacrée au :ref:`paramétrage d'une base<Parametrage-Structure>`.

selon les besoins et pour publier dans la nouvelle base, il sera nécessaire de
créer au moins une nouvelle collection.

Monter une base existante
-------------------------

Monter une base signifie publier une *Databox* existante dans une instance
Phraseanet.

La Databox (base de données MariaDB / MySQL) peut être une base de données
située sur le même serveur que l'Application box ou bien sur un autre serveur
de bases de données. L'application Phraseanet doit être en mesure de se
connecter à cette base avec un niveau de droits suffisants, selon le contexte
de déploiement.

Remplir le formulaire **Monter une base** :

* **Pour une base de données locale** :

    * Demander à l'Administrateur de base de données le nom de la base de
      données existante
    * Indiquer le nom de la base données dans le formulaire
    * Soumettre le formulaire

* **Pour une base de données distante** :

    * Demander à l'Administrateur de base de données les informations de
      connexion à la base :

        * **Le nom d'hôte ou Hostname**
        * **Le numéro de port** (3306 par défaut)
        * **Le nom d'utilisateur de la base MySQL**
        * **Le mot de passe de l'utilisateur de la base MySQL**
        * **Le nom de la base existante**

    * Remplir le formulaire au moyen des informations obtenues en cochant la
      case appropriée
    * Soumettre le formulaire

.. _Consulter la documentation MySQL: http://dev.mysql.com/doc/refman/5.0/fr/creating-database.html
