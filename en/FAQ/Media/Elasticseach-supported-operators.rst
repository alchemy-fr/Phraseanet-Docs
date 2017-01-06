Elasticsearch supported operators in Phraseanet
===============================================

.. topic:: At a glance

    ElasticSearch as single search engine in Phraseanet introduces a break
    in search habits.
    Although the most common searches are performed the same way that
    in previous versions of Phraseanet, research equations evolve.

About Elasticsearch
-------------------

ElasticSearch search engine is free, open source and based on the
Lucene project of the Apache Foundation. His advantages:

* Distributed, it's built for the cloud computing
* It has advanced features (automatic indexing, relevance, stemming)

Syntaxes research evolve.
Except for an exact search query or those on reserved values namespaces,
search queries are...

* Insensitive
* don't take care of accented characters

Conjunction operator *AND*
**************************

The **AND** (ET in french) is used by default between words in queries. Using a
space is similar to an **AND**.

.. code::

    Dogs AND Cats
    Dogs Cats
    Chien ET Chat

Disjunction operator *OR*
*************************

It allows to alternately search for multiple terms in Records notes.

.. code::

    Dogs OR Cats
    Chien OU Chat

For those examples, notes of displayed media contain either the words Dogs or
Cats or both of them.

Negation operator *EXCEPT*
**************************

It allows to exclude search terms.

.. code::

    Winter EXCEPT Snow
    Hiver SAUF Neige

Ordinal operators **ALL** and **LAST**
--------------------------------------

Ordinal operators ALL (TOUT) and LAST (DERNIERS) do not exist in Phraseaent
with ElasticSearch search engine.

**To display all records** for an instance, perform an empty search (click on
the Search button the search field empty).

.. note::

    To replace a search query you used to do with the LAST operator LAST, use
    :ref:`search on records archived and updated dates<Search-on-archive-or-update-dates>`.

Alternative operators
---------------------

Alternative operators are not supported in the current implementation of
ElasticSearch for Phraseanet.

* No truncation by character *
* No substitution by character ?

Proximity operators
-------------------

No proximity operator (Near, Before and After) is supported in the current
implementation of ElasticSearch for Phraseanet.

Operators of numerical comparisons
----------------------------------

Three operators of numerical comparisons are available:

* Equality =
* Smaller than <
* Bigger than >

Operators smaller than and bigger than only work in searches on numerical or
date fields.

These three operators are implemented in searches by fields.

Search in a specified field
---------------------------

As the namespace *Field* is implicit, the syntax to indicate in the search
field is the field name, the operator and the desired value

Search with the colon caracter (:)
**********************************

Example for searching in a field named Title in the databox structure:

.. code::

    Title: Limelight (similar to field.Title: Limelight)
    Title: Rambo (similar to field.Title: Rambo)

The engine performs automatic hyphenation on the empty spaces and characters.
The searched term is the first term between the operator and the next space.

**Important** : To search for a phrase contained in a field, surround the
searched phrase with quotes.

Example :

.. code::

    Title: "For Whom the Bell Tolls"
    Title: "Annie Hall"

.. note::

    In research with colons, the search engine use integrated languages
    analyzers to maximize results.

The content of the field is
***************************

Operator = (equal) can be used to search for exact match value in a field
(including case sensitivity).

Examples :

.. code::

    Title= Limelight
    Title= Rio
    Title= "The artist"
    Title= "Everything You Always Wanted to Know About Sex (But Were Afraid to Ask)"

.. note::

    Research with equal not implement any processing language or syntax.

Search by a date
****************

A search in a date field exploits can be performed with equal or arithmetic
comparison operators for a given field.

Examples for a query in a field named Date :

.. code::

    Date < "2016/01/01" (before 2016/01/01)
    Date = "2016/01/01" (is 2016/01/01)
    Date > "2015/07/01" (strictly after 2015/07/01)
    Date >= "2015/12/31" (2015/12/31 or after)

.. _Search-on-archive-or-update-dates:

Search on dates of additions or of notes changes
************************************************

Elasticsearch native metadata **created_on** and **updated_on** allow search
on dates of additions or of notes changes.

**created_on** is the native metadata indicating the date of addition of a
document in a databox or the creation date of a Phraseanet story.

**updated_on** is the native metadata indicating the update date of the asset
(caption editing, changes on the document).

**created_at** and **updated_at** are alias of these metadata.

Examples:

.. code::

    created_on> 2016/04/18     (for records created after 2016/04/18)
    updated_on< 2016/03/18     (for records updated before 2016/03/18)
    created_on= 2016/04/18     (for records created on 2016/04/18)
    created_on= 2016/04        (for records created on April 2016 (> or < do not work))
    created_on= 2015           (for records created on 2015 (> or < do not work))

Search using Phraseanet thesaurus
---------------------------------

This approach is to query databases and collections through the Phraseanet
thesaurus.

This type of research is performed by clicking on a term in the displayed
thesaurus in the Thesaurus tab in the work zone or by filling in the search
form of a term or phrase into brackets.

Examples:

.. code::

    [Aerospace]
    [Hong Kong cinema]

Search on status
----------------

In the search form, search on the Status can be done with the reserved
namespace *flag* and the name of the status.
The state of the status can be *true* or *false*.

Example for a status named Checked:

.. code::

    flag.Checked:true (to match records with the Checked status raised)

Search on technical fields
--------------------------

Search is possible on technical attributes of documents, according to their
types.

These attributes are present only if they have been written by the
firmware of the device used to capture, the retouching or mounting software.

Operators :, =, <, <=, >= >, can be used.

Examples of metadata attributes for Phraseanet image type documents:

.. list-table::
   :widths: 40 100
   :header-rows: 1
   :stub-columns: 1

   * - **Metadata**
     - **Description of the metadata and example of use**
   * - meta.Width
     - Width in pixels

       meta.Width>3000
   * - meta.Height
     - Height in pixels

       meta.Heigh>= 2400 for images whose height is greater than or equal to 2400 px.
   * - meta.FocalLength
     - Focal lenght used for capture
   * - meta.Channels
     - Number of channels used for color coding

       1 : Greyscale

       3 : RGB color coding

       4 : CMYK color coding

       meta.Channels= 1 (Display all images in greyscale)
   * - meta.ColorDepth
     - Color depth, number of bits used for coding each channel.

       meta.ColorDepth> 8 (All images with the colors of the code channels are
       greater than 8 bits)
   * - meta.CameraModel
     - Name of the divice

       meta.CameraModel: iphone (All images captured using an iphone)
   * - meta.FlashFired
     - Flash trigger. This meta returns true or false.

       meta.FlashFired= true
   * - meta.Aperture
     - Lens aperture

       meta.Aperture > 2.8
   * - meta.ShutterSpeed
     - Recorded shutter speed
   * - meta.HyperfocalDistance
     - Distance for which, since the camera film plane, subjects are net to
       infinity.
   * - meta.ISO
     - ISO sensitivity

       meta.ISO < 400
   * - meta.LightValue
     - Illuminant value


   * - meta.ColorSpace
     - Colorspace for images
   * - meta.Orientation
     - Indication of the orientation of the image
   * - meta.Longitude
     - Longitude recorded by the shooting device
   * - meta.Latitude
     - Latitude recorded by the shooting device
   * - meta.MimeType
     - Mime type of the original document
   * - meta.FileSize
     - Original document file size

Examples of metadata attributes for Phraseanet audio type documents:

.. list-table::
   :widths: 40 100
   :header-rows: 1
   :stub-columns: 1

   * - **Metadata**
     - **Description of the metadata and example of use**
   * - meta.Duration
     - Duration for video in seconds

       meta.Duration>300 for audio greater than 5 minutes lenght.
   * - meta.MimeType
     - Original document mime type
   * - meta.FileSize
     - Original document file size in bytes

Examples of metadata attributes for Phraseanet video type documents:

.. list-table::
   :widths: 40 100
   :header-rows: 1
   :stub-columns: 1

   * - **Metadata**
     - **Description of the metadata and example of use**
   * - meta.Width
     - Video width in pixels
   * - meta.Height
     - Horizontal lines of vertical resolution (or height number of pixels)

       meta.Height= 1080 for video in 1080 lines or Full HD
   * - meta.Duration
     - Video duration in seconds
   * - meta.FrameRate
     - Number of frames per second
   * - meta.AudioSamplerate
     - The value of sampling
   * - meta.VideoCodec
     - Image video coding/decoding algorithm in the original file
   * - meta.AudioCodec
     - Audio coding/decoding algorithm in the original file
   * - meta.Orientation
     - Orientation of the device during video capture
   * - meta.MimeType
     - Mime type of the original file
   * - meta.Duration
     - Video duration in seconds

       meta.Duration>300 for video greater than 5 minutes.
   * - meta.MimeType
     - Original document mime type
   * - meta.FileSize
     - Original document file size in bytes

Examples of metadata attributes for Phraseanet document type documents:

.. list-table::
   :widths: 40 100
   :header-rows: 1
   :stub-columns: 1

   * - meta.MimeType
     - Mime type of the original file
   * - meta.FileSize
     - Original document file size in bytes

Search a record by its Phraseanet identifier
--------------------------------------------

Syntax is: recordid: the_record_id

Example, to display the record unique number id 804 in a database:

.. code::

    recordid: 804


.. note::

    Comparison operators =, < ou > are not implemented.

Finding records for a base
--------------------------

To search records belonging to a database, use the syntax
*database:"the base alias"*

Example:

.. code::

    database:"Parade Test Database"

**Important** : Respect case sensitivity and the exact alias name given to the
base.


