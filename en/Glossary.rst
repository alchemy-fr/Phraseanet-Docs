Glossary
========

.. module:: glossary
    :synopsis: Phraseanet Glossary

.. moduleauthor:: Team Phraseanet <info@phraseanet.com>

.. glossary::
    :sorted:

    Universally Unique Identifier (UUID)
        Unique numerical identifier coded on 128 bytes conceived to be unique
        worldwide. Some graphic softwares (camera firmware, image processing
        software) introduce these identifiers in the digital image files to
        distinguish one from an other.

        .. seealso::

            http://en.wikipedia.org/wiki/Universally_unique_identifier

    Webhooks
        Web development technique implementing events targeting third party
        applications in order to interact with them.
    
    Stemme
        Stemme is a neologism defining a configuration allowing to optimise and
        maximise search results.
        `Stemming <http://en.wikipedia.org/wiki/Stemming>`_,
        `lemmatisation <http://en.wikipedia.org/wiki/Lemmatisation>`_,
        `inflection <http://en.wikipedia.org/wiki/Inflection>`_
        ... These processes implement algorithms for automatic languages
        processing.

    OAuth2
        Open authentication protocol allowing a secured authentication on web,
        mobiles or desktop applications.
        OAuth2 allows to authenticate using information from a remote account 
        base from supplied by OAuth2 providers.

        .. seealso::

            http://www.oauth.net

    HTML5
        HTML5 is the fifth major release of the HTML language. Executed in a 
        browser using its advanced features, HTML5 allows to build feature-rich
        web interfaces.

    FTP
        FTP is a file transfer protocol. It is used for massive documents 
        sending.

    Document
        A document is the original file added to a Phraseanet Base/Collection.

    Sub-resolutions
        These files are generated when a document is added. They are classified
        in three groups (Everybody/Sub resolutions/Documents) and are linked to 
        the user rights.

    Description
        Document's fact sheet, is made of different fields.

    Metadatas
        A metadata is literally a data on a data.
        More precisely, it's a package of structured information describing a 
        random resource. Metadatas are located inside the file. The
        :term:`IPTC`, the :term:`XMP` and the:term:`EXIF` are standards 
        metadatas used in a JPEG file for example. Metadatas can be used, 
        depending on their type, in read-only mode or read-write mode.

    Indexation
        Process that allows to link a description to a document through a
        metadatas extraction, or a description entry.

    Status
        Customizable variable of boolean type (Yes/No) allowing to characterise
        some records. It is possible to define and allocate up to 28 more status
        on a document, 4 status are dedicated (for a total of 32 status).
        
    Record
        A record is a document or a story. As a single entity, this digital 
        *Asset* has a unique descriptive sheet (in XML), of one or more
        documents and given sub resolutions (thumbnails, preview images, key
        images for stories...*etc*.).

    Phraseanet Base
        A Phraseanet base is a MySQL container (database instance). It has among
        others, a documentary structure « indexation fields » and generally some
        other settings. A Phraseanet base can contain one, or several Phraseanet
        Collections that will use the original Phraseanet base settings. The
        Phraseanet base fundamentals are highlighted in    *Phraseanet
        Administration* and *Thesaurus*.
        
    Collection
        A collection is a subset of a Phraseanet base. They allow to implement a data
        segmentation, based on workflow needs or even data separation in 
        accordance with subjective criteria (type of document, year of the
        shooting...*etc*.).

    Basket
        A basket is a set including :term:`records <record>`.
        A basket belongs to the user who created it. A basket can be 
        transferred by Push or through a *Phraseanet* Feedback.

    Story
        A story is composed by a set of documents, that must come from a single
        Phraseanet base composed by one or more collections. A story has its own
        documentary sheet, it is thus a record. A document can belong to
        several stories.

    IPTC (IPTC Metadatas)
        The IPTC metadatas are a set of metadatas attributes that allows to
        describe media data.

    IPTC
        The IPTC (International Press and Telecommunications Council) is a
        consortium regrouping press agencies, press editors and software that
        develops and maintain standards for information exchange fairly used in
        the media industry. More than twenty years ago, in order to facilitate
        information exchange related to media, the main idea of the IPTC was to
        implement metadatas in the documents itself, in the file header. This
        process advantage is that the description of the document is integrated
        in the document itself. Since then, the metadatas IPTC never stopped
        evolving, adapting to the needs of the Information Society.

        .. seealso::

            http://www.iptc.org

    XMP
        Extensible Metadata Platform
        XMP is a metadata format allowing to describe PDF documents, images or
        graphics.

        .. seealso::

            https://www.adobe.com/products/xmp/

    EXIF
        EXchangeable Image File. Technical metadata included in pictures files.

        .. seealso::

            http://www.exif.org/

    Watermark
        On the go branding of the picture depending on the user's profile either
        by default with the collection name in three places on the picture, or
        with a logo that can be uploaded in the collection preferences.

    Overlay
        Overprinted window, Internet viewing technology that opens windows
        overprinted on an existing window.
        
    Bridge
        Phraseanet features for setting and implementing bridges to third-party
        applications (YouTube, Flickr, Dailymotion).
        Available from the action menu.
        
    Push
        Phraseanet action allowing to send documents to users or applications.

    Actions palette
        Tools available for the users depending on their user rights, enabling
        to execute actions on baskets documents...
        
    API
        An API (Application Programming Interface) is an interface provided by 
        a software to allow third party programs to interact with it.
        
    Business field
        The Phraseanet *Business field* are fields that will receive business
        information. These internal information are shared by the users having
        editing rights on the documents. A business field is searchable only
        by a user that have editing rights.

    Dublin Core
        Standardised schema ISO 15836 for describing documentary resources.

        .. seealso::

            http://www.dublincore.org/
            
