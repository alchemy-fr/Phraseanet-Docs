Installation
============

Phraseanet nécessite certains :doc:`prérequis <Prerequis>`, vérifiez votre 
configuration avant de commencer.

Téléchargez les sources
----------------------- 

  .. code-block:: bash

    git clone https://github.com/alchemy-fr/Phraseanet Phraseanet
    cd Phraseanet

Verifiez votre configuration
----------------------------

  .. code-block:: bash

    php bin/console system:configCheck


Configurez votre serveur web
----------------------------

NGINX
~~~~~
    
  Exemple de fichier de configuration Nginx.

  Pour un descriptif complet des options de configuration Nginx, référez-vous 
  à la documentation complète de 
  :doc:`Phraseanet sous Nginx <Configuration/Nginx>`

  .. code-block:: bash

    #/etc/nginx/sites-available/phraseanet.conf
    server {
            listen       80;
            server_name  yourdomain.tld;
            root         /var/www/Phraseanet/www;

            index  index.php;
            include rewrite_rules.inc;

            # PHP scripts -> PHP-FPM server listening on 127.0.0.1:9000
            location ~ \.php(/|$) {
                     fastcgi_pass   127.0.0.1:9000;
                     fastcgi_index  index.php;
                     include fastcgi_params;
                     fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
            }
            location /web {
                    alias /var/www/Phraseanet/datas/web;
            }
    }

  N'oubliez pas de copier le fichier des règles de re-écriture 
  `rewrite_rules.inc` que vous trouverez dans config/nginx.rewrite.rules

Apache 
~~~~~~

  Exemple de fichier de configuration Apache.

  Pour un descriptif complet des options de configuration Apache, référez-vous 
  à la documentation complète de 
  :doc:`Phraseanet sous Apache 2 <Configuration/Apache>`

  .. code-block:: bash

     #/etc/apache2/sites-available/phraseanet.conf
    <VirtualHost *:80>
        ServerName sub.domain.tld
        ServerAdmin email@example.com 

        DocumentRoot "/var/www/Phraseanet/www"

        <Directory "/var/www/Phraseanet/www">
            DirectoryIndex index.php
            Options Indexes FollowSymLinks
            AllowOverride All
        </Directory>

        #publish thumbnail content
        Alias /web /var/www/Phraseanet/datas/web

        ErrorLog logs/phraseanet_error_log
        CustomLog logs/phrseanet_access_log combined
        LogLevel warn
    </VirtualHost>


  Si tout se passe correctement, vous pourrez vous rendre à l’Url décrite 
  (sub.domain.tld dans l'exemple) et continuer la procédure d'installation.

Au total, l’installation se déroule en cinq étapes :

 - Création du socle ApplicationBox et création du compte administrateur 
   (étape précédente)
 - Connexion au module administrateur et création d’une base de stockage 
   DataBox
 - Mise en place des tâches d’indexation et de sous-définitions


Création des tâches essentielles
--------------------------------

Dans le module admin, rendez-vous sur la zone Gestionnaire de tâches. 
Créez les tâches suivantes :

   - Ecriture de meta-données
   - Sous-définitions
   - Indexation

Les pré-réglages originaux suffisent dans un premier temps.
La création de la tâche d’indexation est un plus compliquée :

Créer la tâche. L’application va vous demander plusieurs informations dont

 - le chemin vers le binaire indexeur compilé précédemment
 - les paramètres de connexion à la base de donnée (ApplicationBox)
 - Un port de contrôle (le port de votre choix qui ne doit pas être déjà 
   utilisé sur le serveur)

Si toutes les tâches sont correctement configurées, vous pouvez démarrer le 
planificateur en cliquant sur sa ligne

Félicitations, votre installation est terminée !

Vous pouvez maintenant importer vos documents via le module Upload ou configurer 
votre structure documentaire pour l’adapter à vos besoins.
