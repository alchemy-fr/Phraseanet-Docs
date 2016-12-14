Install
=======

Get the sources
---------------

On the server, download Phraseanet sources from the download page of
`Phraseanet.com`_ then unpack the Zip file to the chosen install directory.

**For example**, this can be done with the following commands:

.. code-block:: bash

    wget --no-check-certificate https://www.phraseanet.com/builds/alchemy-fr-Phraseanet-v4.0.x.zip

And

.. code-block:: bash

    unzip alchemy-fr-Phraseanet-v4.0.x.zip


Although it is not mandatory (but highly recommended), verify
:doc:`prerequisites <Prerequisite>` using the following command at the root of
Phraseanet install directory:

.. code-block:: bash

    php bin/setup check:system

This command performs a check of the environment. It lists the points that need
to be corrected to install successfully the application.

.. seealso::

    See the page dedicated to commandline applications
    :doc:`Setup and Console <Console>`

.. note::

    If non packaged sources are used to install Phraseanet (for example those
    from the GitHub project repository) run the *make* command from the
    installation directory.

    .. code-block:: bash

     make



Web server configuration
------------------------

Depending on the used web server, consult the corresponding configuration notes
to configure it:

.. toctree::
    :maxdepth: 1

    Configuration/Nginx
    Configuration/Apache

.. _install-create-database:

Creating databases for Phraseanet
---------------------------------

It is necessary to create two databases in order to initialize Phraseanet.
These databases are used for:

* The *Application Box*
* The *Databox*

The database server used can be a local or a remote server.

.. note::

  Depending on your choices, it may be necessary to create a specific MySQL
  user to exploit the created databases for Phraseanet.

Setup
-----

*Phraseanet* can be installed in two ways:

* :ref:`In Command-line mode <install-cli>`

**Or**

* :ref:`In graphic mode <install-gui>`

.. _install-cli:

Install in command-line
***********************

Phraseanet features a built in setup system command-line.

Run the following command at the root of Phraseanet install directory:

.. code-block:: bash

    bin/setup system:install

The installation process starts.

  .. image:: ../images/Admin_Install_cli-01.jpg
    :align: center

* **If the two required databases are available, continue**, otherwise
  :ref:`create them <install-create-database>`

* **Provide the login information to the database server**, and specify the name
  of the database operated by the *Phraseanet Application box*.

* Indicate the name of the database operated by the *Phraseanet Data box*

* **Indicate a language** (**en** for english, **fr** for french) to use for
  documentaries fields

* **Create an administrator account**: enter a valid email address and a
  password for connection.

.. note::

    Please note that the provided email address is used as the account
    identifier.

* **Set the media storage path**

.. note::

    * **To use the default storage path**, answer **N**

    * **To use another directory**, answer **y**. The directory must exists
      and Phraseanet application must be able to read and write in it.

* **Provide an URL** for the Phraseanet instance server

* **Start the installation process** and wait until the *Install successful*
  message

  .. image:: ../images/Admin_Install_cli-02.jpg
    :align: center

.. note::

    The build-in sample configuration fills parameters for a local Elasticsearch
    server using port 9200.

    If necessary, edit the configuration file **config/configuration.yml** then
    compile the modified configuration.

    Please, have a look to :doc:`the Configuration page<Configuration>` for more
    info.

* **Create Elasticsearch index**

.. code-block:: bash

    bin/console s:i:c

* **List Phrasenaet tasks**

.. code-block:: bash

    bin/console task-manager:task:list

* **Start Scheduler** in a new Screen:

.. code-block:: bash

    bin/console task-manager:scheduler:run -vvv

Phraseanet is now operational.

.. _install-gui:

Install in graphic mode
***********************

For a GUI installation, launch a browser and go to the root URL of the
application. User is redirected to */setup/installer/* page.

A set of screens containing forms helps to configure *Phraseaent* by collecting
information related to binaries and storage paths, admin account or databases
connection parameters.

Click on the **Next** button to start the procedure.

* Check and modify if required banaries and execs paths then follow

  .. image:: ../images/Admin_Install_screen-01.jpg
      :align: center

* Create an Administrator account for Phraseanet then follow

  .. image:: ../images/Admin_Install_screen-02.jpg
      :align: center

.. note::

    The entered email address is used as the administrator account login.

* Enter parameters for connection to the database dedicate to the Application
  box then follow

  .. image:: ../images/Admin_Install_screen-03.jpg
      :align: center

* Provide a storage path for documents then follow

  .. image:: ../images/Admin_Install_screen-04.jpg
      :align: center

.. note::

    The directory must exist and *Phraseanet* must be able to read and
    write in it.

* Enter the name of the database for the *Phraseanet Data box*

* Select the language to use for the initial documentaries fields (**en** for
  english, **fr** for french)

* The installation program creates the necessary tasks to run the application.
  **Leave the checkboxes checked**.

  .. image:: ../images/Admin_Install_screen-05.jpg
      :align: center

* **Click on the Install button** to start the installation script.

* At the end of the process the user is leaded to the authentication page.

* Login to Phraseanet with the account set previously.

* In Phraseanet Admin, click on **Search engine parameters** item

  .. image:: ../images/Admin_Install_Set_ES.jpg
    :align: center

* **Adjust Elasticsearch setting** according to context.

* Create Elasticsearch index using the dedicated button.

:ref:`Starting tasks manager <start-tasks>`.. is now required.

.. _start-tasks:

Tasks start
-----------

Tasks start can be done in the Task manager section in the Admin module of
Phraseanet.

If the GUI install mode leads to this section after performing the whole setup,
user performing the installation in command-line must login from the homepage
of the application:

* Reach the homepage of the application

* Login using the Administrator account created in the setup step

* Click on the Admin item in
  :doc:`the Phraseanet menu bar<../User/Guide/PhraseanetMenu>`

* Click on the :ref:`Task Manager <Tasks-Manager>` item in the left side menu

**To start tasks**, click on the *Start* item in the contextual menu of
Scheduler.

  .. image:: ../images/Admin_Scheduler_start.jpg
    :align: center

.. note::

    Alternative method consists in using the **bin/console commandline** tool
    detailled :ref:`here <alternative-scheduler-start>`.

Congrats! Your install is finished!

To start using Phraseanet it is necessary to
:doc:`have at least one collection <../User/Guide/AdministrationBasesCollections>`.
Both set up procedures create a Phraseanet collection named *test* that can be
used for tries.

Documentaries fields and subviews parameters can be adjusted to suit the needs
of the project and documents can be added *via* Phraseanet
:doc:`Upload <../User/Guide/Import>`.

.. seealso::

    See the pages about
    :doc:`Phraseanet bases and collections administration <../User/Guide/AdministrationBasesCollections>`
    and about :doc:`documents upload <../User/Guide/Import>` in the user manual.

.. _Phraseanet.com: https://www.phraseanet.com/en/download/
