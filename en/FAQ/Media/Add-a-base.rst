Add a base
==========

.. topic:: The essential

	After the installation, a Phraseanet base is available in the application
	in order to receive media. However, for some reason, it might be necessary
	to add an other. How to create a new Phraseanet base?

Create a new database in the Database management system
-------------------------------------------------------

This first step is done outside Phraseanet.

* Ask the Database administrator (DBA) to create a new base in the DBMS
  (MariaDB / MySQL).

.. seealso::

    `See the MySQL documentation`_

.. note::

	This database can be created on the same database server of the	Application
	box (the applicative base of Phraseanet) or in a remote database server.

.. warning::

	In these two cases, ask that the Phraseanet application can access the
	database with sufficient rights level, depending on the deployment context.

* Fetch the name of the created database, and if the database is created on
  a different server than the Application box, also fetch the connection
  credentials.
* Connect to Phraseanet Admin as an Administrator.

Create the Phraseanet base
--------------------------

In Admin, click on the **Databases** item.

* Fill the **Create new database** form

  **If the created database is on the same server than the Application box**,
  enter the name of the base then choose one of the documentary structure in the
  *XML structure template* drop-down menu .

  .. image:: ../../images/Faq-creer-base1.jpg
      :align: center


  **If the created database in on an other server than the Application box**,
  check the **Create a base on another server** box then fill the connection
  settings.

  * **Hostname**
  * **Port** (3306 by default)
  * **Username of the MySQL database**
  * **User password of the MySQL database**
  * **The name of the create database**

  Choose one of the suggested documentary structures in the drop-down menu
  *XML structure template*.

  .. image:: ../../images/Faq-creer-base2.jpg
      :align: center


* Send the form

The script automates the creation of the required tables in the database
management system.

After this creation process, the structure of the database can be set.

.. seealso::

	:ref:`Refer to the Phraseanet base setting <Setting-Structure>` section.

It is required to create at least one collection to publish media in the
created databox.

Mount an existing database
--------------------------

Mount database form is aimed to publish an existing *Databox* on a Phraseanet
instance.

The Databox (the MariaDB / MySQL database) can be on local or distant host and
the Phraseanet application is supposed to access this database with sufficient
rights level, depending on the deployment context.

Fill the Mount database form:

* **For localhost database**:

  * Ask your Database administrator the name of existing database
  * Fill the database name
  * Validate the form

* **For a remote database**:

  * Ask your Database administrator for credentials:

    * **Hostname**
    * **Port** (3306 by default)
    * **Username of the MySQL database**
    * **User password of the MySQL database**
    * **The name of the existing database**

  * Fill the form, checking the appropriate checkbox and using the given
    information by the DBA
  * Validate the form

.. _See the MySQL documentation: https://dev.mysql.com/doc/refman/8.0/en/create-database.html
