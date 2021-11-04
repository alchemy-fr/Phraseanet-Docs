Install with Docker
===================

.. topic:: The essential

    Version 4.1 introduce the ability to start a Phraseanet Docker stack.


Why Docker?
-----------

Alchemy choose `Docker`_ to add some strength in deployments done in clouds or
on premise.
It gives the opportunity to repeat installation in various environments with a
predictive result.

More about `Docker`_


All is in the README.md file
----------------------------

Have a look to the `README.md`_ file at the root of Phraseanet project.
It gives some information and some explanation to fire a Phraseanet Docker
stack.

It's a starting point to run Phraseanet with Docker.


Where to find Phraseanet DAM Docker images?
-------------------------------------------

All Phraseanet Docker images can be found on `https://hub.docker.com/u/alchemyfr <https://hub.docker.com/u/alchemyfr>`_

All of them are on top of Linux.

Docker compose orchestration as standard is OK to deploy a developpement or a
production environment.

For environments intended for production, IT departments will undoubtedly prefer to rely on existing bricks of their infrastructure for DBMSs and storage servers.

Refer to the `.env`_ file and overide the value of COMPOSE_FILE and COMPOSE_PROFILES which informs on the components of the deployed stack according to the context.


.. _Phraseanet: https://www.phraseanet.com/
.. _Docker: https://www.docker.com/
.. _README.md: https://github.com/alchemy-fr/Phraseanet/blob/master/README.md#phraseanet-with-docker
.. _.env: https://github.com/alchemy-fr/Phraseanet/blob/master/.env

