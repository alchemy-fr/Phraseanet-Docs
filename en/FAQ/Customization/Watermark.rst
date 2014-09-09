Customize the watermarks
========================

A watermark is a logo which superimposes previews. This device serves as a
deterrent to prevent the misuse of pictures.
By default, the watermark is a cross blocking the surface of an image with the
name of the collection.
It is possible to customize the watermarks applied on the pictures for each
collection.

The watermark file characteristics
----------------------------------

The watermark must be a JPEG file in square grey levels containing as many
pixels as the larger side of the sub-definition.

Upload the watermark file
-------------------------

The watermark is customizable for each Phraseanet collection. In Phraseanet
Admin, display the collection of the watermark to customize.
At the section **Watermark**, click on the button *Select* to upload a
customized watermark.

Applied to a picture, the watermark gives the following result.

.. image:: ../../images/Faq-filigrane1.jpg
    :align: center


Nota bene
---------

After updating a watermark to a customized watermark, and if there already are
media in *Phraseanet*, the cache files created by the application must be
deleted.
Use the following command :

.. code-block::bash

    find $storage_directory -type f -iname watermark_* -exec rm -rf {} \;
