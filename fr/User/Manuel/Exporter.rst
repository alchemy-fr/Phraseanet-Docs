Exporter
========
.. toctree::
   :maxdepth: 3

.. topic:: L'essentiel

    L'action "Exporter" est l'une des actions possibles dans *Phraseanet Production*,
    accessible via la :doc:`Palette des Actions <Actions>`.
    Plusieurs modes d'export sont proposés: utiliser le téléchargement,
    envoyer par email ou encore envoyer via le :term:`FTP <FTP>`.

Cette action permet d'exporter, au choix:

  * le document original
  * la prévisualisation
  * l'imagette
  * les notices au format `Xml`_ ou `Yaml`_

*Près de chaque format figurent les tailles respectives des éléments
à exporter.*

Il est possible d'exporter à l'unité ou en lots des enregistrements, des Paniers,
des Reportages depuis l'espace d':doc:`affichage des Résultats <Afficher>` ou
depuis les :doc:`Paniers <PaniersReportages>`.

**En cliquant sur "Exporter", trois options d'export sont proposées dans des onglets:**

  * le Téléchargement: Permet de transférer les données sur son disque
    dur dans un fichier compressé nommé par exemple Export.zip.

  * L'envoi par Mail: Permet d'envoyer à un destinataire, dans une pièce
    jointe à un e-mail, les données à transférer.

  * L'envoi par FTP: Permet d'envoyer les données vers un serveur FTP

.. image:: ../../images/Exporter-general.jpg
    :align: center

L'export peut être effectué sur des lots de documents, en provenance
de plusieurs collections ou plusieurs :term:`bases <base>` différentes, sur
lesquelles l'utilisateur ne dispose peut-être pas de droits d'export.
Dans ce cas, le nombre de documents sur lequel l'export est possible
est indiqué.

Téléchargement
--------------
  * Sélectionner une ou plusieurs vignettes et cliquer sur l'icône *Exporter*.
  * La fenêtre de téléchargement s'ouvre.
  * Utiliser les cases à cocher pour sélectionner quel élément exporter.
  * Cliquer sur *Télécharger*.
  * Suivre la procédure proposée par le navigateur.

.. image:: ../../images/Exporter-telecharger.jpg
    :align: center

E-Mail
------
  * Saisir l'adresse mail du destinataire, utiliser la " ; " en cas d’envoi vers
    plusieurs destinataires.
  * Saisir l'objet du mail.
  * Sélectionner quel fichier doit être joint au mail.
  * Saisir le message du mail.
  * Cliquer sur Envoyer.

  * Une fenêtre intermédiaire demande la confirmation à l’utilisateur, précisant
    le nombre d’éléments à envoyer ainsi que le poids total de l’envoi.

  * Cliquer sur Envoyer.
  * Un message confirmant l’envoi de l’email apparaît.

.. image:: ../../images/Exporter-mail.jpg
    :align: center

FTP
---
Cet onglet permet de saisir manuellement les coordonnées du serveur FTP de
destination mais peut aussi appeler des "pré-configurations".

.. note::

    Les Pré-configurations correspondent à l'adresse FTP saisie
    dans la partie "Mon compte".

Il est possible de demander l’envoi d’un email de confirmation à l’utilisateur
envoyant les éléments et au destinataire pour l’informer de la mise à
disposition des éléments sur son serveur FTP.

Il est également possible de tester le serveur FTP de destination et/ou
d’envoyer les éléments.

Une fenêtre intermédiaire s’ouvre et informe l’utilisateur de l’état de son envoi.

.. image:: ../../images/Exporter-FTP.jpg
    :align: center

Demande de documents
--------------------
Cet onglet permet d'adresser des demandes de téléchargement pour les utilisateurs
ne bénéficiant pas des droits de téléchargement.

.. image:: ../../images/Exporter-commande.jpg
    :align: center

Remplir et soumettre le formulaire affiché.

Le gestionnaire de commande est averti de la commande par notification dans
Phraseanet ou bien par e-mail.

.. _XML: https://wikipedia.org/wiki/Xml
.. _YAML: https://wikipedia.org/wiki/Yaml
