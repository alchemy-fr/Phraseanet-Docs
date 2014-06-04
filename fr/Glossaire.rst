Glossaire
=========

.. module:: glossaire
    :synopsis: Glossaire Phraseanet

.. moduleauthor:: Team Phraseanet <info@phraseanet.com>

.. glossary::
    :sorted:

    Webhooks
        Technique de développement internet mettant en oeuvre des événements
        ciblants des applications tierces dans le but d'interagir avec elles.

    Stemme
        Stemme est un néologisme désignant une configuration permettant
        d'optimiser, de maximiser, les résultats de recherche.
        `Racinisation <https://fr.wikipedia.org/wiki/Racinisation>`_,
        `lemmatisation <https://fr.wikipedia.org/wiki/Lemmatisation>`_,
        `flexion <https://fr.wikipedia.org/wiki/Flexion_%28linguistique%29>`_
        ... Ces procédés mettent en oeuvre des algorithmes de traitement
        automatique des langues.

    OAuth2
        Protocole d'authentification ouvert permettant une authentification
        sécurisée sur des applications internet, mobiles ou de bureau.
        OAuth2 permet de s'authentifier en exploitant des informations provenant
        d'une base de compte distante mise à disposition par des fournisseurs
        d'identité OAuth2 (on parle de OAuth2 provider).

        .. seealso::

            http://www.oauth.net

    HTML5
        HTML5 est la cinquième révision majeure du langage HTML. Exécuté dans un
        navigateur exploitant ses caractéristiques avancées, HTML5 permet de
        bâtir des interfaces web riches en fonctionnalités.

    FTP
        Le FTP est un protocole de transfert de fichiers. Il est utilisé pour
        les envois massifs de documents.

    Document
        Un document est le fichier d'origine ajouté à une Base/Collection.

    Sous résolutions
        Les fichiers générés lors de l'ajout d'un document. Elles sont classées
        selon trois groupes (Tout le monde/Sous résolutions/Documents) et sont
        rattachées aux droits utilisateurs.

    Description
        Fiche documentaire d'un document, composée de plusieurs champs
        descripteurs.

    Métadonnées
        Une métadonnée est littéralement une donnée sur une donnée.
        Plus précisément, c'est un ensemble structuré d'informations décrivant
        une ressource quelconque. Les métadonnées sont contenues à l’intérieur
        du fichier. L’:term:`IPTC`, le :term:`XMP` et l’:term:`EXIF` sont des
        normes de métadonnées que l’on trouve utilisées dans un fichier JPEG par
        exemple.
        Les métadonnées peuvent être exploitées selon leur type, en lecture
        seule ou en lecture/écriture.

    Indexation
        Opération qui consiste à associer une description à un document,
        soit par extraction des métadonnées, soit par saisie de la description.

    Status
        Variable paramétrable de type booléenne (Oui/Non) permettant de
        caractériser des enregistrements. Il est possible de définir et
        d’affecter jusqu'à 28 status supplémentaires sur un document, 4 status
        étant réservés (32 status au total).

    Enregistrement
        Un enregistrement *Phraseanet* correspond à un document ou à un
        reportage. Entité unique, cet *Asset* ou actif numérique dispose d'une
        fiche descriptive unique (en XML), d'un ou de plusieurs documents et
        sous définitions associées (vignettes, images de prévisualisation,
        images représentatives pour les reportages...*etc*.).

    Base
        Une base Phraseanet est un containeur de type MySQL (instance de base de
        donnée). Une base dispose entre autres d’une structure documentaire «
        champs d’indexation » et de façon plus générale de certains réglages.
        Une base de données peut contenir une ou plusieurs Collections
        Phraseanet qui reprendront les réglages de la base. La notion de base
        est surtout mise en avant dans *Phraseanet Administration* et
        *Thésaurus*.

    Collection
        Une collection est un sous ensemble d'une base. Elles permettent de
        mettre en oeuvre une segmentation des données, selon des principes de
        besoins de workflow ou encore de séparation des données selon des
        critères subjectifs (nature des documents, année de prise de vue...*etc*
        .).

    Panier
        Un panier est un ensemble qui regroupe des
        :term:`enregistrements <enregistrement>`. Un panier appartient à
        l'utilisateur qui l'a créé. Un panier peut être transmis sous la forme
        d'un Push ou d'une Validation *Phraseanet*.

    Reportage
        Un reportage est constitué d’un ensemble de documents, provenant
        obligatoirement d'une même base mais d’une ou plusieurs collections la
        constituant. Un reportage dispose de sa propre fiche documentaire,
        il s’agit donc d’un enregistrement à part entière.
        Un document peut appartenir à plusieurs reportages.

    IPTC (Métadonnées IPTC)
        Les métadonnées IPTC sont un jeu d'attributs de métadonnées qui
        permettent de décrire des données médias.

    IPTC
        L'IPTC (International Press and Telecommunications Council) est un
        consortium réunissant des agences de presses, des éditeurs de presse et
        de logiciels qui développe et maintient des normes d'échanges
        d'informations largement utilisées dans l'industrie des médias.
        Il y a plus de vingt ans, pour faciliter l'échange d'information
        relatives aux médias, l'idée directrice de l'IPTC a été d'intégrer des
        métadonnées aux documents eux-même, dans l'entête du fichier.
        L'avantage du procédé est que la description du document voyage de façon
        indissociable du document lui-même.
        Depuis, les métadonnées IPTC n'ont cessé d'évoluer pour s'adapter aux
        besoins de la société de l'Information.

        .. seealso::

            http://www.iptc.org

    XMP
        Extensible Metadata Platform (format de métadonnées)
        Le XMP est un format de métadonnées permettant de décrire des fichiers
        de type PDF, images ou graphiques.

        .. seealso::

            https://www.adobe.com/products/xmp/

    EXIF
        EXchangeable Image File. Métadonnées d'ordre technique contenues
        dans les fichiers image.

        .. seealso::

            http://www.exif.org/

    Filigrane
        Marquage de l’image de choix à la volée selon le profil de l’utilisateur
        avec soit par défaut le nom de la collection en trois endroits de
        l’image, soit un logo à charger dans les préférences de collection.

    Overlay
        Fenêtre en surimpression, technologie d'affichage Internet consistant à
        ouvrir les fenêtres en surimpression d’une fenêtre existante.

    Bridge
        Action Phraseanet permettant de paramétrer et mettre en place  des ponts
        vers des applications tierces (Youtube, Flickr, Dailymotion).
        Disponible depuis la Palette des Actions.

    Push
        Actions Phraseanet permettant d'envoyer des documents vers des
        utilisateurs ou vers des applications.

    Palette des Actions
        Outils disponibles pour les utilisateurs selon leurs droits,
        permettant de déclencher des actions sur des documents des paniers...

    API
        Une API (Application Programming Interface ou en français Interface de
        programmation) est une interface fournie par un programme informatique
        pour permettre à des programmes tiers d'interagir avec celui-ci.

    Business field ou Champ métier
        Les *Business field* Phraseanet sont des champs destinés à recevoir des
        informations métiers. Ces informations internes sont partagées par les
        utilisateurs qui disposent des droits d'édition des documents.
        Un business field n'est "recherchable" que par un utilisateur disposant
        des droits d'édition.

    Dublin Core
        Schéma normalisé ISO 15836 destiné à la description de ressources
        documentaires.

        .. seealso::

            http://www.dublincore.org/
