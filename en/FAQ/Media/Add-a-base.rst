Add a base
==========

.. topic:: The essential

	After the installation, a Phraseanet base is available in the application
	in order to receive media. However, for some reason, it might be necessary
	to create an other. Oh to create a new Phraseanet base ?

Create a new database in the database manager
---------------------------------------------

This first step is done outside Phraseanet.

* Ask the system administrator to create a new base in the database manager
  (MariaDB / MySQL).

.. seealso::

    `See the MySQL documentation`_

.. note::

	This database can be created on the same database server of the	Application
	box (the applicative base of Phraseanet) or in an other database server.

.. warning::

	In these two cases, ask that the Phraseanet application can access the
	database with sufficient rights level, depending on the deployment context.

* Fetch the name of the created database, and if the database is created in
  a different server than the Application box, also fetch the connection
  settings.
* Connect to Phraseanet Admin as an Administrator.

Create the Phraseanet base
--------------------------

In Admin, click on the *Base* section.

* Fill the **Create a base** form

  **If the created database is on the same server than the Application box**,
  enter the name of the base then choose one of the documentary structure in the
  drop-down menu *XML structure template*.

  .. image:: ../../images/Faq-creer-base1.jpg
      :align: center


  **If the created database in on an other server than the Application box**,
  check the  *Create a base on an other server* box then fill the connection
  settings of the database server.

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
manager.

After this creation process, the structure of the database can be set.

.. seealso::

	Refer to the Phraseanet base setting<Setting-Structure>` section.

Depending on the needs and to publish a new Phraseanet base, it is required to
create at least one collection.	

.. _See the MySQL documentation: http://dev.mysql.com/doc/refman/5.0/fr/creating-database.html
