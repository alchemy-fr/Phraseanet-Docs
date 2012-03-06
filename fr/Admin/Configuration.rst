Configuration
=============

Le principal réglage de l’application est dans la structure XML de la 
:term:`base <base>` à laquelle on accède via le module :

administration > base de donnée > structure.

Structure
---------


Exemple
~~~~~~~

  .. code-block:: xml

    <?xml version="1.0" encoding="UTF-8" standalone="yes"?>
    <record modification_date="20100308202954">

      <path>/path/to/repository/datas/noweb/db_databox/documents</path>

      <subdefs>

        <!-- Image subdefs -->
        <preview>
          <path>/path/to/repository/datas/noweb/db_databox/subdefs</path>
          <name>preview</name>
          <size>1000</size>
          <type>image</type>
          <method>resample</method>
          <baseurl/>
        </preview>
        <thumbnail>
          <path>/path/to/repository/datas/web/db_databox/subdefs</path>
          <name>thumbnail</name>
          <size>250</size>
          <type>image</type>
          <method>resample</method>
          <baseurl>web/db_databox/subdefs</baseurl>
        </thumbnail>

        <!-- Video subdefs -->
        <preview>
          <path>/path/to/repository/datas/noweb/db_databox/subdefs</path>
          <name>preview</name>
          <size>800</size>
          <type>video</type>
          <method>FLV</method>
          <fps>15</fps>
          <baseurl/>
        </preview>
        <thumbnailGIF>
          <path>/path/to/repository/datas/web/db_databox/subdefs</path>
          <name>thumbnailGIF</name>
          <size>300</size>
          <type>video</type>
          <method>AnimGIF</method>
          <delay>1</delay>
          <baseurl>web/db_databox/subdefs</baseurl>
        </thumbnailGIF>
        <thumbnail>
          <path>/path/to/repository/datas/web/db_databox/subdefs</path>
          <name>thumbnail</name>
          <size>250</size>
          <type>video</type>
          <method>JPG</method>
          <baseurl>web/db_databox/subdefs</baseurl>
        </thumbnail>

        <!-- Audio subdefs -->
        <preview>
          <path>/path/to/repository/datas/noweb/db_databox/subdefs</path>
          <name>preview</name>
          <size>800</size>
          <type>audio</type>
          <method>MP3</method>
          <baseurl/>
        </preview>
        <thumbnail>
          <path>/path/to/repository/datas/web/db_databox/subdefs</path>
          <name>thumbnail</name>
          <size>250</size>
          <type>audio</type>
          <method>JPG</method>
          <baseurl>web/db_databox/subdefs</baseurl>
        </thumbnail>
      </subdefs>


      <description>
        <Objet
          src="/rdf:RDF/rdf:Description/IPTC:ObjectName"/>
        <Categorie
          src="/rdf:RDF/rdf:Description/IPTC:Category"/>
        <AutresCategories
          src="/rdf:RDF/rdf:Description/IPTC:SupplementalCategories"/>
        <MotsCles
          src="/rdf:RDF/rdf:Description/IPTC:Keywords"
          multi="1"
          tbranch="/thesaurus/te[@id='T0']"/>
        <Observations
          src="/rdf:RDF/rdf:Description/IPTC:SpecialInstructions"/>
        <Date
          src="/rdf:RDF/rdf:Description/IPTC:DateCreatedDateCreated"
          type="date"
          regdate="1"/>
        <Signature
          src="/rdf:RDF/rdf:Description/IPTC:By-line"/>
        <TitreCredits
          src="/rdf:RDF/rdf:Description/IPTC:By-lineTitle"/>
        <Ville
          src="/rdf:RDF/rdf:Description/IPTC:City"/>
        <Pays
          src="/rdf:RDF/rdf:Description/IPTC:Country-PrimaryLocationName"/>
        <ReferencesOriginales
          src="/rdf:RDF/rdf:Description/IPTC:OriginalTransmissionReference"/>
        <Titre
          src="/rdf:RDF/rdf:Description/IPTC:Headline"
          thumbTitle="1"
          report="1"
          regname="1"/>
        <Credit
          src="/rdf:RDF/rdf:Description/IPTC:Credit"
          report="1"/>
        <Source src="/rdf:RDF/rdf:Description/IPTC:Source"/>
        <Legende
          src="/rdf:RDF/rdf:Description/IPTC:Caption-Abstract"
          regdesc="1"/>
        <Redacteur
          src="/rdf:RDF/rdf:Description/IPTC:Writer-editor"/>

        <!-- Champs Techniques -->
        <NomDeFichier src="tf-filename" readonly="1" type="text"/>
        <Chemin src="tf-filepath" index="0" readonly="1" type="text"/>
        <Recordid src="tf-recordid" index="0" readonly="1" type="number"/>
        <TypeMime src="tf-mimetype" index="0" readonly="1" type="text"/>
        <Taille src="tf-size" index="0" readonly="1" type="number"/>
        <Extension src="tf-extension" index="0" readonly="1" type="text"/>
        <Largeur src="tf-width" index="0" readonly="1" type="number"/>
        <Hauteur src="tf-height" index="0" readonly="1" type="number"/>
        <Bits src="tf-bits" index="0" readonly="1" type="number"/>
        <Couche src="tf-channels" index="0" readonly="1" type="number"/>
      </description>

      <statbits>
        <bit n="4">Online</bit>
        <bit n="5" labelOn="exclu" labelOff="libre">exclu</bit>
        <bit n="6" labelOn="Privé" labelOff="Public">Confidentialité</bit>
      </statbits>

    </record>

  Plusieurs noeuds sont à repérer dans cette structure :

  - description :

    Le noeud description contient n noeuds correspondants aux n champs 
    descriptifs qui seront indexés. Les attributs sont optionnels, ils sont 
    nommés ainsi et peuvent prendre les valeurs spécifiées entre crochets:

     - src [xPath] : xPath RDF d’accès à la métadonnée. Consulter la base 
        documentaire Exiftool pour une liste complète
     - tbranch [xPath] : xPath Phraseanet Thésaurus de branchement. 
        L’utilisation du module Thésaurus est recommandée pour modifier 
        cette valeur
     - readonly [0,1] : Définit un champ en lecture seule
     - thumbtitle [0,1 || i18n_code] : Définit le champ qui sera pris comme 
        titre du document.
     - regdesc [0,1] : Repère le champ qui contiendra la description dans 
        le cas d’un reportage
     - regname [0,1] : Repère le champ qui contiendra le titre dans le cas 
        d’un reportage
     - regdate [0,1] : Repère le champ qui contiendra la date dans le cas 
        d’un reportage
     - report [0,1] : Rend un champ visible dans report

    Certains attributs ne peuvent être placés que sur un seul champ : 
    regname, regdesc, regdate, thumbtitle.

    Dans le cas où la valeur de thumbtitle est la valeur du code 
    d’internationalisation (fr, en, de …), il peut être placé à plusieurs 
    reprises et ne sera vrai que dans le contexte où l’application sera 
    visible dans ce code langue.

  - subdefs

    Le noeud subdefs regroupe différents noeuds correspondant aux 
    sous-définitions qui seront créées en fonction du type des documents 
    qui seront archivés. 

    Généralement, cette partie de la structure n’a pas à être modifiée 
    et convient parfaitement. 

    Cependant, quelques customisations peuvent être faites, notamment :

    - size [nombre] : valeur en pixel des sous-définitions générées
    - path [path absolu] : path d’accès vers la sous-définition
    - baseurl [url relative] : chemin relatif d’accès au fichier par http

  - path

    Le noeud path contient un noeud texte qui contient le path absolu d’accès 
    au répertoire de stockage des documents.

  - statbits

    Le noeud statbits contient une liste de noeuds statbits composant les 
    différents status bits qui pourront être affectés aux documents. 

    Il est vivement conseillé d’utiliser l’interface status-bits du module 
    administration pour modifier ces noeuds.


Réglage de collection
---------------------

* Ajout de valeurs suggérées

Les valeurs suggérées sont des aides à la saisie.
Elles permettent de créer des listes de termes que l'on retrouve
lors de l’édition.
 
* Ajout d'un Minilogo

Logo représentatif de la collection 

* Ajout d'un Fichier de Watermark (filigrane)

Le Fichier de filigrane ou watermark s'applique sur les documents
en prévisualisation selon les droits de l'utilisateur connecté.

* Ajout d'un StampLogo

Logo accompagnant le document au téléchargement et pouvant être associé à
la description de celui-ci.

  comment créer un stamplogo

      - ajouter un ficher (logo)
      - cliquer sur la collection puis sur reglage de collection
      - cliquer sur "vue xml" et éditer le xml en suivant l’exemple ci-dessous

  .. code-block:: xml

    <?xml version="1.0" encoding="UTF-8"?>
    <baseprefs>
      <status>0</status>

      <stamp>
            <logo position="left" width="25%"/>
            <text size="50%">Titre: <field name="SujetTitre"/></text>
            <text size="50%">Legende: <field name="Legende"/></text>
            <text size="50%">Copyright: <field name="Copyright"/></text>
            <text size="50%">Date : <field name="Date"/></text>
            </stamp>
      <sugestedValues>
      </sugestedValues>
    </baseprefs>

