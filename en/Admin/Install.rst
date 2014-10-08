Install
=======

After download, unpack the sources to a choosen install directory.

Verify :doc:`prerequisite <Prerequisite>` using this command at the root of the
Phraseanet install directory:

.. code-block:: bash

    php bin/setup check:system

.. seealso::

    See the page dedicated to commandline applications
    :doc:`Setup and Console <Console>`

Web server configuration
------------------------

Depending on the used web server, consult the corresponding configuration notes
to configure it:

.. toctree::
    :maxdepth: 1

    Configuration/Nginx
    Configuration/Apache

Creating databases for Phraseanet
---------------------------------

It is necessary to create two databases in order to initialize Phraseanet.
These databases are used for:

* The *Application Box*
* The *Databox*

The database server used can be a local or a remote server.

.. note::

  Depending on your choices, it may be necessary to create a specific MySQL
  user to exploit the created database for Phraseanet.

Setup
-----

Setup is made in two steps. The first one consists in launching a setup
commandline in a terminal, the second is a series of forms to fill in a web
interface.

Initiate installation
*********************

Since 3.8, Phraseanet features a built in setup system commandline used to
initiate install.

Run the following command at the root of the Phraseanet install directory:

.. code-block:: bash

    bin/setup system:install

Installation settings
*********************

To continue the install process, launch a browser and go to the root URL of
the application.

A set of screens containing forms helps to finalize setup by collecting
informations related to binaries and storage paths, admin account or databases
connection parameters.

Click on the **Next** button to start the procedure.

* Check and modify if required banaries and execs paths then follow

  .. image:: ../images/Admin_Install_screen-01.jpg
      :align: center

* Create an Administrator account for Phraseanet then follow

  .. image:: ../images/Admin_Install_screen-02.jpg
      :align: center

* Enter parameters for connection to the database dedicate to the Application
  box then follow

  .. image:: ../images/Admin_Install_screen-03.jpg
      :align: center

* Check and modify if required storage path for documents then folow

  .. image:: ../images/Admin_Install_screen-04.jpg
      :align: center

* Enter parameters for connection to the database dedicate to the Phraseanet
Databox the click on the **Install** button

  .. image:: ../images/Admin_Install_screen-05.jpg
      :align: center

Task start
----------

The installation process takes care of launching the required tasks to run
Phraseanet.

For a manual launch or a simple check by within the interface:

* Login using the Administrator account
* Launch the Admin interface
* Click on **Task Manager** item
* Check the Scheduler and tasks states

Alternative method consists in using the **bin/console commandline** tool
detailled :doc:`here <Console>`.

Congrats! Your install is finished!

To start using Phraseanet it is necessary to
:doc:`create at least one collection <../User/Guide/AdministrationBasesCollections>`.

Documentaries fields can be adjusted to suit the needs of the project and
documents can be added via Phraseanet Upload.

.. seealso::

    See the pages about
    :doc:`Phraseanet bases and collections administration <../User/Guide/AdministrationBasesCollections>`
    and about :doc:`documents upload <../User/Guide/Import>` in the user manual.

