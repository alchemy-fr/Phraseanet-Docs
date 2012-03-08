FAQ
===


Je ne peux pas uploader des fichiers de plus de 2Mo
---------------------------------------------------

Exemple pour passer à une limite de 200Mo :

* Dans le fichier php.ini :

  .. code-block:: bash

    upload-max-filesize = 200M
    post_max_size       = 200M

N'oubliez pas de redemarrer votre configuration (Apache ou PHP-Fpm selon le cas).

Si vous utilisez Nginx en serveur web, il faudra aussi autoriser les requêtes
volumineuses :

* Dans le fichier nginx.conf :

  .. code-block:: bash

    http {
        ...

        client_max_body_size 200M;

        ...
    }


Les vignettes des résultats représentent une mongolfière
--------------------------------------------------------

Vérifiez que la tâche de création des sous-définitions est démarrée module
Admin. Voir `documentation moteur de tâche </Admin/MoteurDeTaches>`_

Il n'y a aucune imagettes dans les résultats de recherche
---------------------------------------------------------

Si aucune vignettes n'apparait (juste les titres), c'est que le montage du
dossier vignettes n'est pas correctement fait dans le server web

Vérifier dans votre virtual host l'Alias "/web" et vérifier qu'il pointe sur
le dossier de stockage des vignettes. Voir `documentation installation
</Admin/Installation>`_

Lorsque j’édite un grand nombre de documents des messages d'erreur apparaissent
-------------------------------------------------------------------------------

Le module Suhosin peut limiter le nombre de paramètres passés par requêtes.
Vous pouvez tenter d'augmenter cette limite.

  .. code-block:: bash

    suhosin.post.max_vars    = 12000
    suhosin.request.max_vars = 12000

Lorsque je modifie des droits utilisateurs, certains droits ne sont pas sauvés
------------------------------------------------------------------------------

Le module Suhosin peut limiter le nombre de paramètres passés par requêtes.
Vous pouvez tenter d'augmenter cette limite.

  .. code-block:: bash

    suhosin.post.max_vars    = 12000
    suhosin.request.max_vars = 12000

Mon installation a été interrompue, je souhaite la reprendre
------------------------------------------------------------

Pour reprendre votre installation il vous suffit de supprimer les fichiers

  * config/config.yml
  * config/connexions.yml
  * config/services.yml
