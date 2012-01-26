FAQ
===

Liste des questions que vous pouvez etre amené à vous poser et des reponses


Je ne vois pas les vignettes apres mon installation, Que faire ?
----------------------------------------------------------------

- Verifier si les taches sont demarreées

- Verifier dans votre virtual host l'Alias /web et voir si 
  le reprtoire sur lequel il pointe existe 

Lorsque je selectionne un grand nombre de document, pour les editer, 


j'ai un message d'erreur "server error" en utilisant l'application, Que faire ?
-------------------------------------------------------------------------------

- Penser à modifier les variables ci-dessous dans votre configuration de PHP

suhosin.post.max_vars=12000
suhosin.request.max_vars=12000


Comment faire pour augmenter la taille maximale des fichiers à uploader ?
-------------------------------------------------------------------------

Selon que vous utilisez apache ou nginx :

* Apache

    - Editer le fichier php.ini (fichier de configuration de php)
    - Augmenter la valeur des varialbes upload_max_filesize et post_max_size 
    - Redemarrer apache

* Nginx

    - Editer le fichier nginx.conf (en general dans /etc/nginx)
    - Y ajouter ou modifier la variable client_max_body_size

    exemple : client_max_body_size 2000m;

    - Ensuite  editer pour php5-fpm le php.ini (/etc/php5/fpm/php.ini)
    - Augmenter la valeur des varialbes upload_max_filesize et post_max_size 
    - Redémarrer php5-fpm et nginx.

Je souhaite reprendre l'installation de l'application, comment faire ?
----------------------------------------------------------------------

Pour reprendre votre installation il vous suffit de :

  - supprimer les fichiers config.inc et connexion.inc dans le répertoire
    $vos_sources/config/

  - Puis vider ou supprimer et recreer vos bases MySQL

Comment telecharger et compiler l'extension phrasea2 de php ?
-------------------------------------------------------------

  - installer git, libmysqlclient*-dev
  - telecharger et compiler l'extension

  .. code-block:: xml

    git clone https://github.com/alchemy-fr/Phraseanet-Extension php-phrasea
    cd php-phrasea
    ./configure
    make
    make install

Comment telecharger et compiler l'indexeur Phraseanet
-----------------------------------------------------

  - installer git, libxml2-dev, libexpat1-dev

  .. code-block:: xml

    git clone https://github.com/alchemy-fr/Phraseanet-Indexer phraseanet_indexer
    cd phraseanet_indexer
    aclocal
    automake -a
    autoconf
    ./configure
    make
    make install

NB : l'indexeur s'installe par default dans /usr/local/bin