FAQ
===

Liste des questions que vous pouvez être amené à vous poser et des réponses.


Comment faire pour augmenter la taille maximale des fichiers à uploader ?
-------------------------------------------------------------------------

Selon que vous utilisez apache ou nginx :

* Apache

    - Editer le fichier php.ini (fichier de configuration de php)
    - Augmenter la valeur des variables upload_max_filesize et post_max_size 
    - Redémarrer apache

* Nginx

    - Editer le fichier nginx.conf (en général dans /etc/nginx)
    - Y ajouter ou modifier la variable client_max_body_size

    exemple : client_max_body_size 2000m;

    - Ensuite  éditer pour php5-fpm le php.ini (/etc/php5/fpm/php.ini)
    - Augmenter la valeur des variables upload_max_filesize et post_max_size 
    - Redémarrer php5-fpm et nginx.

Je ne vois pas les vignettes après mon installation, Que faire ?
----------------------------------------------------------------

- Vérifier si les taches sont démarrées

- Vérifier dans votre virtual host l'Alias /web et voir si 
  le répertoire sur lequel il pointe existe 

"Server Error" Lorsque j’édite un grand nombre de documents, que faire ?
------------------------------------------------------------------------

- Penser à modifier les variables ci-dessous dans votre configuration de PHP
  si vous utilisez le module suhosin.

suhosin.post.max_vars=12000
suhosin.request.max_vars=12000


Je souhaite reprendre l'installation de l'application, comment faire ?
----------------------------------------------------------------------

Pour reprendre votre installation il vous suffit de :

  - supprimer les fichiers config.inc et connexion.inc dans le répertoire
    $vos_sources/config/

  - Puis vider ou supprimer et recréer vos bases MySQL

Comment télécharger et compiler l'extension phrasea2 de php ?
-------------------------------------------------------------

  - installer git, libmysqlclient*-dev
  - télécharger et compiler l'extension

  .. code-block:: xml

    git clone https://github.com/alchemy-fr/Phraseanet-Extension php-phrasea
    cd php-phrasea
    ./configure
    make
    make install

Comment télécharger et compiler l’indexer Phraseanet
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

NB : l’indexer s'installe par défaut dans /usr/local/bin