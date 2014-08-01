Vagrant
=======

Pour faciliter le développement, Phraseanet 3.8.6 intégre dorénavant un environnement de
développement fournis par vagrant.

Prérequis
---------

  - Ruby 1.9+
  - Vagrant 1.6+
  - Le plugin Host Updater "vagrant plugin install vagrant-hostsupdater"
  - VirtualBox

Installation
------------

Cloner le projet Phraseanet.

A la racine du projet:

  - lancer "vagrant up"
  - attendre 30 secondes et donner votre mot de passe root pour monter le répertoire de travail
    via NFS
  - s'asseoir et attendre que vagrant installe l'environnement ~1h
  - se connecter à la VM en lanceant "vagrant ssh"
  - les sources de phraseanet se trouvent dans "/var/www/phraseanet"
  - créer deux base de données mysql pour utiliser phraseanet, les identifiants mysql sont
    identifiant:    root
    mot de passe:   toor
  - puis aller à l'url suivante "http://phraseanet-php54-nginx/" dans votre navigateur, c'est tout

Environnement
-------------

   - Debian Wheezy
   - nginx 1.6.2
   - php 5.4.33 + FPM
   - mariadb 10.0.14
   - mongodb 2.4.11
   - rabbitmq 3.3.5
   - redis 2.8.17
   - elasticsearch 1.2.1
   - node 0.10.29

VM's IP is 192.168.56.101 on a private network.

FAQ
---

Q:  Comment se connecter à la base de donnée de la VM ?
A:  Vous pouvez utiliser SSH:

    Mysql Host : 127.0.0.1
    Mysql User: root
    Mysql Password: toor
    Mysql Port 3306

    SSH Host: 192.168.56.101
    SSH user: vagrant
    SSH port: 22
    SSH Key: vagrant/vms/phraseanet-php54-nginx/puphpet/files/dot/ssh/insecure_private_key from
    phraseanet root directory

Q:  Je ne peux pas me connecter à elastic search, rabbitmq ou bien un quelconque client sur
    192.168.56.101:*
A:  Par defaut ip table bloque les accés a ces ports, vous pouvez les activer en exécutant la
    commane suivante:
    sudo iptables -I INPUT -p tcp --dport {{PORT}} -j ACCEPT

Q:  Je ne suis pas autorisé à activer le mode debug sur phraseanet en utilisant l'adresse
    http://phraseanet-php54-nginx/index_dev.php/*
A:  Par défaut l'accés au mode debug est seulement autorisé pour les adresses de loopbacks.
    Vous devez éditer le fichier de configuration config/configuration.yml et ajouter l'ip de la VM:

    debugger:
      allowed-ips:
        - 192.168.56.1