Vagrant
=======

Pour faciliter le développement, Phraseanet 3.8.6 intégre dorénavant un environnement de
développement fournis par Vagrant.

Prérequis
---------

Le déploiement de cet environnement de développement nécessite les prérequis suivants :

  - Ruby 1.9+
  - Vagrant 1.6+
  - Le plugin Host Updater "vagrant plugin install vagrant-hostsupdater"
  - VirtualBox

Installation
------------

  - Cloner le projet Phraseanet sur l'ordinateur.
  - Avec un terminal, se rendre à la racine du projet puis utiliser la commande suivante :

  .. code-block::bash

    vagrant up

  - Indiquer le mot de passe root pour monter le répertoire de travail via NFS
  - Le déploiement de l'environnement prend approximativement une heure.
  - Se connecter à la machine virtuelle au moyen de la commande suivante :

  .. code-block::bash

    vagrant ssh

  - Les sources Phraseanet son localisée dans le répertoire /var/www/phraseanet.
  - Créer deux bases de données mySQL nécessaires pour utiliser Phraseanet avec le login/mot de
    passe MySQL suivants :
  - **identifiant**:    root
  - **mot de passe**:   toor
  - Puis aller à l'url suivante "http://phraseanet-php54-nginx/" dans votre navigateur, c'est tout

Environnement
-------------

L'environnement déployé est composé de :

   - Debian 7 Wheezy
   - nginx 1.6.2
   - php 5.4.33 + FPM
   - mariadb 10.0.14
   - rabbitmq 3.3.5
   - redis 2.8.17
   - elasticsearch 1.2.1
   - node 0.10.29

L'adresse IP de la machine virtuelle est 192.168.56.101.

FAQ
---

Se connecter au serveur de bases de données de la VM
Dans un terminal, se connecter à la machine virtuelle en SSH puis au serveur de bases de données en utilisant les accès suivants :

  - Accès Machine virtuelle:
    - Hôte : 192.168.56.101
    - Utilisateur SSH: vagrant
    - Port: 22
    - Répertoire de clé SSH : [répertoire d'installation Phraseanet/]vagrant/vms/phraseanet-php54-nginx/puphpet/files/dot/ssh/insecure_private_key

  - Accès MySQL:
    - Hôte: 127.0.0.1
    - Identifiant : root
    - Mot de passe: toor
    - Port: 3306


Par défaut iptable bloque les accès à certains ports utilisés. Pour activer ces ports, exécuter la
commande suivante :

  .. code-block::bash

    sudo iptables -I INPUT -p tcp --dport {{PORT}} -j ACCEPT

Activer le mode Debug sur la VM
Par défaut l'accès au mode debug est seulement autorisé pour les adresses de loopbacks.
Pour l'activer sur la VM, éditer le fichier de configuration config/configuration.yml et ajouter
l'ip de la VM :

  .. code-block::bash

    debugger:
      allowed-ips:
        - 192.168.56.1