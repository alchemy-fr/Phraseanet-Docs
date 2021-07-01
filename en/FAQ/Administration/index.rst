Administration
==============

.. topic:: The essential

    This section of the FAQ regroups the questions about Phraseanet
    administration.

The result thumbnails are substitued image (landscape symbols)
--------------------------------------------------------------

The creation of subviews may take time depending on the nature and the size
of the documents that were added to the base.

Also make sure that the subview creation task is started in the task manager
section in the Admin module.

Restart **Subviews creation** task if necessary.

.. seealso::

    :doc:`Refer to the worker manager documentation<../../Admin/WorkerManager>`

There are no thumbnails in the search results
---------------------------------------------

If there are no thumbnails in the results area, and that the records found are
only displayed with their title, it is possible that the thumbnails directory is
not correctly mounted on the web server.

Check the "/web" alias in the *Virtual Host* configuration and check that it
points to the directory used to stock thumbnails.

.. seealso::

    :doc:`Refer to the page dedicated to the installation<../../Admin/Install>`

When modifying user rights, some rights are not saved
-----------------------------------------------------

The PHP configuration may limit the number of arguments per query.

Apply the indicated advices to treat the error messages that may appear when
editing a large number of records.

What happens when a media is added to a Phraseanet base ?
---------------------------------------------------------

The system reads in the structure of the base to get:

* the indexation fields
* the indexation links and the metadatas source (EXIF,, XMP, IPTC...*etc*.)
* the directories that store physical data (original media and sub-definitions)

Then it stores the original document in the directory for original media.

The metadata contents (IPTC, XMP, EXIF...etc.) of the original media file is
then read and extracted accordingly to the fields settings of the documentary
structure.

The subviews are generated then saved in storage directories obtained from the
structure.

The metadata can then be written in some subviews files (depending on the
setting).

The metadatas are then added to the index of the search engine.
This action allows the record to be searchable.
