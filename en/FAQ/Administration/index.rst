FAQ Administration
==================

.. topic:: The essential

    This section of the FAQ regroups the questions about *Phraseanet*
	administration.

I can not upload files of more than 2Mb
---------------------------------------

Edit the settings *upload-max-filesize* and *post_max_size* in the PHP
configuration file then apply the new settings.

Example to raise the limit to 1024Mb :

* In the file php.ini :

.. code-block:: bash

    upload-max-filesize = 1024M
    post_max_size       = 1024M

Restart your configuration (Apache or PHP-Fpm depending on the case).

With Nginx for web server, large queries must be activated :

* In the file nginx.conf :

.. code-block:: bash

    http {
        ...

        client_max_body_size 1024M;

        ...
    }

The result thumbnails are hot-air-balloons
------------------------------------------

The creation of sub-definitions sometime takes time depending on the nature and
the size of the documents that were added to the base.

Also make sure that the sub-definitions creation task is started in the Admin
module task manager.

Restart the task if necessary.

.. seealso::

    :doc:`Refer to the task manager documentation<../../Admin/TaskManager>`

There are no thumbnails in the search results
---------------------------------------------

If there are no thumbnails in the results area, and that the records found are
only displayed with their title, it is possible that the thumbnails directory is
not correctly mounted on the web server.

Check in the *Virtual Host* the Alias "/web" and check that it points to the
directory used to stock thumbnails.

.. seealso::

    :doc:`Refer to the page dedicated to the installation<../../Admin/Install>`

When mass editing documents, error messages appear
--------------------------------------------------

**The suhosin is compiled with the version of PHP in use**, it is possible that
it limits the number of arguments per query. To correct this malfunction, raise
this limit in the PHP configuration file.
Add the following lines in the php.ini file then restart the web server.

.. code-block:: bash

    suhosin.post.max_vars=12000
    suhosin.request.max_vars=12000
	
**If the suhosin module is not there or that the PHP version is newer than or
equal to 5.3.15**, add the following in the php.ini file then restart the web
server.

.. code-block:: bash

    max_input_vars=12000

When modifying user rights, some rights are not saved
-----------------------------------------------------

The PHP configuration may limit the number of arguments per query.

Apply the indicated advices to treat the error messages that may appear when
editing a large number of records.

The installation aborted, how to resume it ?
--------------------------------------------

To resume an aborted installation, delete the following files :

* config/config.yml
* config/connexions.yml
* config/services.yml

Restart the installation using the following command : 

.. code-block:: bash

    bin/setup system:install

What happens when a media is added to a Phraseanet base ?
---------------------------------------------------------

The system reads in the structure of the base to get :

* the indexation fields
* the indexation links and the metadatas source (EXIF,, XMP, IPTC...*etc*.)
* the directories that store physical data (original media and sub-definitions)

Then it stores the original document in the directory for original media.

The metadatas contents (IPTC, XMP, EXIF...etc.) of the original media file is
then read and extracted accordingly to the fields settings of the documentary
structure.

The sub-definitions are generated then saved in the storage directory of the
sub-definitions obtained from the structure.

The metadatas can then be written in some sub-definitinos (depending on the
setting).

The metadatas are then added to the index of the search engine.
This action allows the record to be searchable.
