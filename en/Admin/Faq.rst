FAQ
===


I can not upload mor than 2Mo
-----------------------------

Exemple pour passer à une limite de 200Mo :

* In php.ini :

  .. code-block:: bash

    upload-max-filesize = 200M
    post_max_size       = 200M

Do no forget to restart your configuration (Apache or PHP-Fpm)

If you're using Nginx, you have to allow big requests :

* In nginx.conf :

  .. code-block:: bash

    http {
        ...

        client_max_body_size 200M;

        ...
    }


Results are presented with a hot air balloon
--------------------------------------------

Vérifiez que la tâche de création des sous-définitions est démarrée module
Admin. Refer to the `documentation </Admin/TaskManager>`_.

Results do not contains any thumbnails
--------------------------------------

If there is no thumbnails (only titles), then the thumbnail folder is not
correctly mount in the webserver.

Verify that the /web alias is mounted in virtualhost and that it points to the
correct folder. Refer to the `documentation </Admin/Install>`_.

When editing a lot of documents, an error message can happen
------------------------------------------------------------

Suhosin module can limit the number of paramaters of HTTP queries. You can try
to raise the limit :

  .. code-block:: bash

    suhosin.post.max_vars    = 12000
    suhosin.request.max_vars = 12000

When I edit users rights, some are not saved
--------------------------------------------

Suhosin module can limit the number of parameters of HTTP queries. You can try
to raise the limit :

  .. code-block:: bash

    suhosin.post.max_vars    = 12000
    suhosin.request.max_vars = 12000

Installation has been cancelled, how to restart it
--------------------------------------------------

Just remove the following files

  * config/config.yml
  * config/connexions.yml
  * config/services.yml
