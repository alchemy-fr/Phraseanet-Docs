Exporter
========
.. toctree::
   :maxdepth: 3
   
.. topic:: L'essentiel

    L'action "Exporter" est l'une des actions possibles dans *Phraseanet Production*,
    accessible via la :doc:`Palette des Actions <Actions>`.
    Plusieurs modes d'export sont proposés: utiliser le téléchargement, 
    envoyer par email ou encore envoyer via le FTP.

Cette action permet d'exporter, au choix:

  * le document original
  * la prévisualisation
  * l'imagette
  * les notices XML ou YAML  

*Près de chaque format figurent les tailles respectives des éléments
à exporter.*

Il est possible d'exporter à l'unité ou en lots des enregistrements, des Paniers,
des Reportages depuis la zone des Résultats ou depuis la zone des paniers.

**En cliquant sur "Exporter", trois options d'export sont proposées dans des onglets:**

  * le Téléchargement: Permet de transférer les données sur son disque 
    dur dans un fichier compressé nommé par exemple Export.zip.

  * L'envoi par Mail: Permet d'envoyer à un destinataire, dans une pièce 
    jointe à un mail, les données à transférer.
  
  * L'envoi par FTP: Permet d'envoyer les données vers un serveur FTP

  .. image:: ../../images/Exporter-general.jpg
	   :alt: alternate text
	   :align: center 

L'export peut être effectué sur des lots de documents, en provenance 
de plusieurs collections ou plusieurs :term:`bases <base>` différentes, sur 
lesquelles l'utilisateur ne dispose peut-être pas de droits d'export.
Dans ce cas, le nombre de documents sur lequel l'export est possible 
est indiqué.
	   
L'onglet Téléchargement
-----------------------
  * Sélectionner une ou plusieurs vignettes et cliquer sur l'icône *Exporter*.
  * La fenêtre de téléchargement s'ouvre.
  * Utiliser les cases à cocher pour sélectionner quel élément exporter.
  * Cliquer sur *Télécharger*.
  * Suivre la procédure proposée par le navigateur.

  .. image:: ../../images/Exporter-telecharger.jpg
	   :alt: alternate text
	   :align: center 

L'onglet Mail
--------------
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
	   :alt: alternate text
	   :align: center 

L'onglet FTP
------------
Cet onglet permet de saisir manuellement les coordonnées du serveur FTP de 
destination mais peut aussi appeler des "pré-configurations".

*Les Pré-configurations correspondent à des adresses FTP saisies dans la partie 
"gestion des utilisateurs" de *Phraseanet Administration*.

Il est possible de demander l’envoi d’un email de confirmation à l’utilisateur 
envoyant les éléments et au destinataire pour l’informer de la mise à 
disposition des éléments sur son serveur FTP.

Il est également possible de tester le serveur FTP de destination et/ou 
d’envoyer les éléments.

Une fenêtre intermédiaire s’ouvre et informe l’utilisateur de l’état de son envoi.

  .. image:: ../../images/Exporter-FTP.jpg
	   :alt: alternate text
	   :align: center


