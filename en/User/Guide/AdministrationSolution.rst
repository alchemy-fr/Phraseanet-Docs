Application's Administration
============================
.. toctree::
    :maxdepth: 3

.. topic:: The essential

    The administration of the application consists in monitoring operations
    and changing settings if necessary.

Dashboard
---------

.. image:: ../../images/Administration-tableaudebord.jpg
    :align: center

**Accessible only by Phraseanet administrators**, **Dashboard** allows to add
or remove Phraseanet administrators.

**Phraseanet administrators** are users that have the higher level of
applicative rights. They can manage and maintain the application.

Dashboard displays an overview of the configuration state of the file
system, executables, extensions, cache servers and web servers involved in the
implementation of *Phraseanet* solution.

.. _Application-setting:

Setup
-----

**Accessible only by Phraseanet administrators**, **Setup** propose a
graphical interface that allows to modify the installation and configuration
settings of the Phraseanet instance.

Setup have a set of forms allowing to :

* Modify the addresses and paths of the application, components and storage that
  allow its implementation.
* Put the application in maintenance mode
* Activate or deactivate web services and social networks connections
  implemented in :ref:`Phraseanet Bridge<Publish-Bridge>`.
* Activate or deactivate features and options of the application

.. image:: ../../images/Administration-setup.jpg
    :align: center

.. warning::

    As **Setup** allows to modify in deep the settings of the application,
    administrators must pay attention to modifications made in proposed forms.
    Faulty settings may cause malfunctions.

Search engine settings
----------------------

**Accessible only by Phraseanet administrators**, this section allows to
configure the search engine used by the instance using a graphical interface.

.. seealso::

    :doc:`Refer to the page dedicated to the engines configuration in the Administrator documentation<../../Admin/SearchEngine>`.

Phrasea engine configuration
****************************

The Phrasea engine, which is the default engine, has few configuration options.

The interface offers to:

* Activate or deactivate the :term:`stemming option <Stemm>`
* Choose the display order of the records based on sortable fields .

Sphinx engine configuration
***************************

The form allows to write the configuration of the Sphinx search engine when
used.

Connected users
---------------

This screen lists active users sessions on the system.
It indicate which Phraseanet application is used, IP address, and also the date
and time of connection to the system.

.. image:: ../../images/Administration-utilisateurlive.jpg
    :align: center

Publications
------------

Accessible by users who have the publications management rights, the
**Publications** section allows to manage MediaRSS feeds broadcasted from the
Phraseanet application.

.. image:: ../../images/Administration-publications.jpg
    :align: center

The screen displays the list of the available media feeds and allows to
create, modify or remove feeds.

.. _Create-a-publication-feed:

Create a publication feed
*************************

Fill the form by entering the necessary information.
The publication scope restricts the publication to users accessing a
collection.
**Check the Public box** to remove any access restrictions.

.. note::

  The public publications media are used in default animations on the login
  page.

Modify or delete a feed
***********************

* Click on the title of a feed to modify its properties
* To delete a feed, click on the button **Delete**

.. _Tasks-Manager:

Tasks manager
-------------

**Accessible only by Phraseanet administrators**, this screen allows to manage
tasks that help in operating the application.

The tasks are listed in a table that indicates the task identifier, its name
and working state.

Basic tasks
***********

The :doc:`Phraseanet install process<../../Admin/Install>` set up three key
tasks required for an operating system:

* Indexation task
* Creation of subview
* Writing metadatas

Those tasks are managed by a time-management tool: the TaskManager
(or *Scheduler*).

.. _start-scheduler:

Start (or stop) a task
**********************

Right click on the pop-up menu of the task to:

* Start or stop a task
* Edit the settings of a task (it has to be stopped first)

Create additional tasks
***********************

Additional tasks can be set up to perform automatic treatments.

* Select a task template in the **New Task** drop-down menu
* Edit the taks settings in the graphic interface or the XML

.. image:: ../../images/Administration-editertache1.jpg
    :align: center

* Click on **Validate** to save changes

In some cases, the graphical view simulates the task's execution.

.. image:: ../../images/Administration-editertache2.jpg
    :align: center

* Start the task.

.. seealso::

    :doc:`Refer to the page dedicated to the Task manager in the Administration manual <../../Admin/TaskManager>`.

Plugins
-------

From version 3.8.7, this section lists additional extensions installed on
the instance.
