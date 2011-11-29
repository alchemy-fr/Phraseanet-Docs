Glossaire
=========

.. module:: glossaire
   :synopsis: Glossaire Phraseanet
.. moduleauthor:: Team Phraseanet <info@phraseanet.com>

.. glossary::
  :sorted:

  Document
    Un document est le fichier d'origine ajouté à une Base/Collection.

  Sous résolutions
    Les fichiers générés lors de l'ajout d'un document. Elles sont classées 
    selon trois groupes (Tout le monde/Sous résolutions/Documents)et sont
    rattachées aux droits utilisateurs

  Description
    Fiche documentaire d'un document, composée de plusieurs champs descripteurs.

  Métadonnées
    Une métadonnée est littéralement une donnée sur une donnée. 
    Plus précisément, c'est un ensemble structuré d'informations décrivant une 
    ressource quelconque. Les métadonnées sont contenues à l’intérieur du 
    fichier. L’IPTC le XMP et l’EXIF sont des métadonnées que l’on 
    trouve dans un fichier JPEG par exemple.
    Les métadonnées peuvent être exploitées selon leur type, en lecture seule 
    ou en lecture/écriture.

  Indexation
    Opération qui consiste à associer une description à un document,
    soit par extraction des métadonnées, soit par saisie de la description.
  
  Statusbit
    Etat de type Oui/Non qui peut être appliqué sur un document, paramétrable. 
    Il est possible de définir et d’affecter jusqu'à 60 statuts sur un document

  Enregistrement
    Un enregistrement est constitué d'un document, de sa fiche descriptive 
    (en XML), et de ses sous résolutions.

  Base
    Une base Phraseanet est un containeur de type MySQL (instance de base de 
    donnée). Une base dispose entre autres d’une structure documentaire « champs 
    d’indexation » et de façon plus générale de certains réglages. Une base de 
    données peut contenir une ou plusieurs Collections Phraseanet qui 
    reprendront les réglages de la base. La notion de base est surtout mise en 
    avant dans Phraseanet Administration, Thesaurus

  Collection
    Une collection est un sous ensemble d'une base. Elles permettent de mettre
    en œuvre une segmentation des données, selon des principes de besoins de 
    workflow ou encore de séparation des données selon leur nature, leur année…

  Panier
    Un panier est un ensemble qui regroupe des
    :term:`enregistrements <enregistrement>`. Un panier appartient à 
    l'utilisateur qui l'a créé.

  Reportage
    Un reportage est constitué d’un ensemble d’enregistrements, provenant 
    obligatoirement de la même base mais d’une ou plusieurs collections la 
    constituant. Un reportage dispose de sa propre fiche documentaire, 
    il s’agit donc d’un enregistrement à part entière. 
    Un document peut appartenir à plusieurs reportages
     
  IPTC
    L'IPTC (International Press and Telecommunications Council) a défini le 
    format de transmission des documents (textes, images, sons, multimédia) émis 
    par les agences de presse.
    
    Se référer à : `IPTC <http://www.iptc.org>`_

  XMP
    Extensible Metadata Platform (format de métadonnées) 
    Le XMP est un format de métadonnées permettant de décrire des fichiers 
    de type PDF, images ou graphiques

    Se référer à : `XMP <http://fr.wikipedia.org/wiki/Extensible_Metadata_Platform>`_

  EXIF
    EXchangeable Image File. Métadonnées d'ordre technique contenues
    dans les fichiers image.

    Se référer à : `EXIF <http://www.exif.org/>`_

  Filigrane
    Marquage de l’image de choix à la volée selon le profil de l’utilisateur 
    avec soit par défaut le nom de la collection en trois endroits de l’image, 
    soit un logo à charger dans les préférences de collection

  Overlay
    Fenêtre en surimpression, technologie d'affichage Internet consistant à 
    ouvrir les fenêtres en surimpression d’une fenêtre existante.

  Bridge
    Action Phraseanet permettant de paramétrer et mettre en place  des ponts 
    vers des applications tierces (Youtube, Flickr, Dailymontion).
    Disponible depuis la barre d'actions.
    
  Push
    Actions Phraseanet permettant d'envoyer des documents vers des utilisateurs
    ou vers des applications

  Barre d'actions
    Barre des outils disponibles pour les utilisateurs selon leur droits,
    permettant de déclencher des actions sur des documents des paniers...

    

  


