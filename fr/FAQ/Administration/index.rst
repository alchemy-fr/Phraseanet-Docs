Administration
==============

.. topic:: L'essentiel

    Cette section de la FAQ rassemble les questions relatives à l'administration
    de *Phraseanet*.

Les vignettes des résultats représentent une image de substitution (paysage stylisé)
------------------------------------------------------------------------------------

La création des sous-définitions peut parfois prendre du temps en fonction de
la nature et du poids des documents ajoutés dans une base.

Aussi, vérifier que la tâche de création des sous-définitions est démarrée
dans le gestionnaire des tâches du module Admin.

Relancer cette tâche si nécessaire.

.. seealso::

    :doc:`Se référer à la page consacrée au gestionnaire de worker <../../Admin/GestionnaireDeWorker>`

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

Lors de la modification des droits utilisateurs, certains droits ne sont pas sauvés
-----------------------------------------------------------------------------------

Il se peut que la configuration PHP limite le nombre de paramètres passés dans
les requêtes.

Appliquer les conseils indiqués pour traiter les messages d'erreurs qui
peuvent apparaitre lors de l'édition d'un grand nombre d'enregistrements.

Que se passe t'il lorsque qu'un média est ajouté dans une base Phraseanet ?
---------------------------------------------------------------------------

Lorsqu'un média est ajouté dans une base Phraseanet, une série de processus
s'enclenchent selon le déroulé suivant :

* **Le système lit dans la structure de la base** afin d'obtenir :

  * Les champs d'indexations qui forment la notice de l'enregistrement
  * Les liens établis entre les champs d'indexations et des sources de
    métadonnées (EXIF, XMP, IPTC...)
  * Le chemin d'accès des répertoires destinés au stockage des données
    physiques (Médias originaux et sous définitions)


* **Le système archive ensuite le document original** dans le répertoire de
  stockage des médias originaux.

* **Les metadonnées du fichier média original sont alors lues et extraites**,
  en accord avec le paramétrage des champs de la structure documentaire. Elles
  sont utilisées pour renseigner par automatisme la notice d'indexation
  correspondante à l'enregistrement.

* **Les sous définitions sont générées** puis sauvegardées dans le répertoire de
  stockage des sous définitions obtenu de la structure.
  Des métadonnées peuvent alors être écrites dans certaines sous définitions
  (selon paramètrage).

* **Les métadonnées sont ensuite ajoutées à l'index du moteur de recherche**.
  Cette opération permet rendre l'enregistrement créé disponible à la recherche
  selon les informations présentes dans les champs indexables par le moteur de
  recherche.

