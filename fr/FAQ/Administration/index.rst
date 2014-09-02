FAQ Administration
==================

.. topic:: L'essentiel

    Cette section de la FAQ rassemble les questions relatives à l'administration
    de *Phraseanet*.

Je ne peux pas uploader des fichiers de plus de 2Mo
---------------------------------------------------

Editer les paramètres *upload-max-filesize* et *post_max_size* dans le fichier
de configuration de PHP puis appliquer le nouveau paramétrage.

Exemple pour passer à une limite de 1024Mo :

* Dans le fichier php.ini :

.. code-block:: bash

    upload-max-filesize = 1024M
    post_max_size       = 1024M

Redémarrer votre configuration (Apache ou PHP-Fpm selon le cas).

Avec Nginx comme serveur web, il faut aussi autoriser les requêtes volumineuses :

* Dans le fichier nginx.conf :

.. code-block:: bash

    http {
        ...

        client_max_body_size 1024M;

        ...
    }

Les vignettes des résultats représentent une montgolfière
---------------------------------------------------------

La création des sous-définitions peut parfois prendre du temps en fonction de
la nature et du poids des documents ajoutés dans une base.

Aussi, vérifier que la tâche de création des sous-définitions est démarrée
dans le gestionnaire des tâches du module Admin.

Relancer cette tâche si nécessaire.

.. seealso::

    :doc:`Se référer à la page consacrée au moteur de tâche <../../Admin/MoteurDeTaches>`

Il n'y a aucune vignette dans l'affichage des résultats d'une recherche
-----------------------------------------------------------------------

Si aucune vignette n’apparait dans la zone d'affichage des résultats et que les
enregistrements trouvés ne sont présentés que par leurs titres, il est
probable que le montage du répertoire de vignettes ne soit pas correctement
fait dans le serveur web.

Vérifier dans le *Virtual host* la présence de l’alias “/web” ainsi que le
chemin d'accès au répertoire de stockage des vignettes.

.. seealso::

    :doc:`Se référer à la page consacrée à l'installation <../../Admin/Installation>`

Lors de l'édition d'un grand nombre de documents des messages d'erreur apparaissent
-----------------------------------------------------------------------------------

**Si le module suhosin est compilé avec la version de PHP utilisée**, il est
possible qu'il limite le nombre de paramètres passés par requêtes. Pour
corriger le dysfonctionnement, augmenter cette limite dans le fichier de
configuration de PHP.
Ajouter les lignes suivantes dans le fichier php.ini puis relancer/redémarrer
le serveur web.

.. code-block:: bash

    suhosin.post.max_vars=12000
    suhosin.request.max_vars=12000

**Si le module suhosin n'est pas présent et que la version de PHP est supérieure
ou égale à 5.3.15**, ajouter la ligne suivante dans le fichier php.ini puis
relancer/redémarrer le serveur web.

.. code-block:: bash

    max_input_vars=12000

Lors de la modification des droits utilisateurs, certains droits ne sont pas sauvés
-----------------------------------------------------------------------------------

Il se peut que la configuration PHP limite le nombre de paramètres passés dans
les requêtes.

Appliquer les conseils indiqués pour traiter les messages d'erreurs qui
peuvent apparaitre lors de l'édition d'un grand nombre d'enregistrements.

L'installation a été interrompue, comment la reprendre ?
--------------------------------------------------------

Pour reprendre une installation interrompue, supprimer les fichiers suivants
dans la répertoire de l'application :

* config/config.yml
* config/connexions.yml
* config/services.yml

Relancer ensuite l'installation via la commande suivante :

.. code-block:: bash

    bin/setup system:install

Que se passe t'il lorsque qu'un média est ajouté dans une base Phraseanet ?
---------------------------------------------------------------------------

Le système lit dans la structure de cette base afin d'obtenir :

* les champs d'indexations
* Liens champs d'indexations et source de métadonnées (EXIF, XMP,
  IPTC...*etc*.)
* les répertoires destinés au stockage des données physiques (Médias originaux
  et sous définitions)

Il stocke ensuite le document original dans le répertoire de stockage des médias
originaux.

Le contenu des metadonnées (IPTC, XMP, EXIF...etc.) du fichier média original
est alors lu et extrait en accord avec le paramétrage des champs de la structure
documentaire.

Les sous définitions sont générées puis sauvegardées dans le répertoire de
stockage des sous définitions obtenu de la structure.

Des métadonnées peuvent alors être écrites dans certaines sous définitions
(selon paramètrage).

Les métadonnées sont ensuite ajoutées à l'index du moteur de recherche.
Cette opération permet rendre l'enregistrement créer disponible à la recherche.
