Task Manager
============

Phraseanet has a task manager to realize asynchronous operations.

This different task are managed by a Scheduler.

Scheduler
---------

You will find in the Scheduler context menu what you need to start, stop, watch
logs of the tasks.

Alternative starts and stops
****************************

If you want to start and stop the Scheduler automatically, for example with
cron, you can use `KonsoleKommander <Console>`_ and find the right command:

.. code-block:: bash

    bin/console scheduler:start
    bin/console scheduler:stop
    bin/console scheduler:state
    bin/console task:run

Tasks
-----

Indexation
**********

It indexes the datas with phraseanet_indexer.

Indexer requires parameters:

* Path to indexer binary
* Host: MySQL server hostname / address
* Port: MySQL port
* Database: MySQL dbname
* User: MySQL user
* Password: MySQL password
* Socket port: socket port to stop the indexer

.. code-block:: bash

    /usr/local/bin/phraseanet_indexer -h=host \
                                      -P=port \
                                      -b=database \
                                      -u=user \
                                      -p=password \
                                      --socket=13800 \
                                      --default-character-set=utf8 \
                                      -o

.. note::

    This task is required for common Phraseanet use

Sub-definitions creation
************************

This task creates sub-definitions (thumbnails and preview).

.. note::

    This task is required for common Phraseanet use

Metadatas writing
*****************

This tasks writes metadatas inside the document, depending of the configuration
you set up.

Archive in collection
*********************

This task watch a HotFolder and archive its content in a  :term:`Collection`.

Settings
^^^^^^^^

* Collection: the collection where the files are going
* HotFolder: the directory to watch
* Period: time to wait between to check in the folder
* Period before archive: time to wait before starting archive
* Move docs in "_archived": keep a copy of archived documents
* Move docs in "_error": keep a copy of failed documents

.. warning::

    For security reasons, you have to write an empty .phrasea.xml
    file at the root of the HotFolder.

Archive files and their XML description is possible by editing the XML view.

Here is an example of XML configuration to archive `.jpg` and `.tif` files
associated with their `.xml` description:

.. code-block:: xml

    <?xml version="1.0" encoding="UTF-8"?>
    <tasksettings>

      ...

      <files>
        <file mask="^(.*)\.jpg$" caption="$1.jpg.xml"/>
        <file mask="^(.*)\.JPG$" caption="$1.JPG.xml"/>
        <file mask="^(.*)\.tif$" caption="$1.tif.xml"/>
        <file mask="^(.*)\.TIF$" caption="$1.TIF.xml"/>
        <file mask="^(.*\.xml)$" caption="$1"/>
      </files>
    </tasksettings>


FTP Push
********

This tasks will upload your FTP export. It requires the activation of FTP export.

Settings
^^^^^^^^

* Proxy address (optional)
* Proxy port (optional)
* Period: time to wait between two checks

FTP Pull
********

This tasks fetch data from FTP repository to a local storage. It can be
combined with an archive task to fetch datas.

Settings
^^^^^^^^

* Proxy address (optional)
* Proxy port (optional)
* Period: time to wait between two checks
* FTP Host
* FTP Port
* FTP User
* FTP Password
* FTP Directory
* Local Directory: the directory where to retrieve the datas
* Passive mode
* SSL connexion

Déplacement des documents périmés
*********************************

This tasks do some actions (move to collection or chaneg status) on records
depending of their status or some date fields.

API Bridge Uploader
*******************

This tasks manages synchro with others APIs through the :term:`Bridge`.

Workflow 01
***********

This tasks do some actions (move to collection or chaneg status) on records
depending of their status or some date fields.

Settings
^^^^^^^^
* Databox
* Period: time to wait between two checks
* Collection: from =>to
* Status-bit: from => to
