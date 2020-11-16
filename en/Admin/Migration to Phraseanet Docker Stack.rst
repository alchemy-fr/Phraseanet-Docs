Migration to Phraseanet Docker Stack
====================================

.. topic:: Requirements

    Phraseanet Docker stack up and running. For more information on how to install Phraseanet with Docker go to https://github.com/alchemy-fr/Phraseanet#phraseanet-with-docker.

    A dump of the application box and databoxes of the Phraseanet install you wish to migrate.

    A backup of the following directories : custom, lazaret, download as well as the datas directories ("db_name_of_the_databox").

    A backup of your previous configuration file.


Migrate Lazaret, download, custom and datas directories
*********************************************************

Copy your lazaret, download, custom and datas directories to the new destination on your Phraseanet fresh install (take note note of the path define inside your env.local file).

ex:

.. code-block:: bash

    ~/Phraseanet$ cp -rf ~/migration/datas/ .
    
.. warning::

    When copying datas directly inside the fpm container, the operation should be performed as the user app:app.


Importing application box and databoxes
***************************************

Import the ab and dbs to the mysql container using the following commands:

Ab:

.. code-block:: bash

    docker exec -i <mysql_container_tag> mysql -uuser -ppass <ab_name_of_the_applicationbox_to_import> < <db_name_of_the_applicationbox_to_import>.sql

Dbs:

.. code-block:: bash

    docker exec -i <mysql_container_tag> mysql -uuser -ppass <db_name_of_the_databox_to_import> < <db_name_of_the_databox_to_import>.sql

Apply the changes to the newly imported ab and dbs to reflect the configuration inside your env.local:

On  the ‘Sbas’ table in the application box report the changes made inside the env.local in accordance to the env variables:

.. code-block:: bash

    docker exec -i <mysql_container_tag> -uuser -ppass -e "USE <ab_name>; UPDATE sbas SET host='host', dbname='dbname', user='user', pwd='pwd';"

Change the storage path to reflect the paths defined inside your env.local on your dbs:

.. code-block:: bash
 
    docker exec -i <mysql_container_tag> mysql -uuser -ppass -e "USE <db_name_of_the_databox>; UPDATE subdef SET path=REPLACE(path,'<OLD_PATH>','<NEW_PATH>');"

.. code-block:: bash
 
    docker exec -i <mysql_container_tag> mysql -uuser -ppass -e "USE <db_name_of_the_databox>; UPDATE pref SET value=REPLACE(value,'<OLD_PATH>','<NEW_PATH>') WHERE prop="structure";"

Set the key and the application box name inside the configuration file
*************************************

Copy and pass the key from the older configuration.yml file inside the newly created configuration file:

.. code-block:: bash
 
    nano config/configuration.yml

.. code-block:: yaml

    main:
        key: mysecretkey
        
    ...
    
    dbname: <ab_name>

Then compile the configuration from the worker container:

.. code-block:: bash

    docker-compose -f docker-compose.yml run --rm worker bin/console comp:conf

Upgrade the application 
*******************

Launch the “builder” container and lauch the upgrade:

.. code-block:: bash
 
    docker-compose -f docker-compose.yml run --rm worker bin/setup system:upgrade

Launch the populate of the index
********************************

You can then populate the index using the builder container with:

.. code-block:: bash

    docker-compose -f docker-compose.yml run --rm worker bin/console searchengine:index -p
