Vagrant
=======

To ease development, Phraseanet 3.8.6 is now shipped with a development environment throught Vagrant.

Prerequisites
-------------

  - Ruby 1.9+
  - Vagrant 1.6+
  - Host Updater Plugin  "vagrant plugin install vagrant-hostsupdater"
  - VirtualBox

Install
-------

Clone the Phraseanet Project.

At the root of the project:

  - run "vagrant up"
  - wait 30 seconds and give your root password to mount shared folder through NFS
  - sit back while vagrant set up the environment ~1 hour
  - to connect to the VM run "vagrant ssh"
  - phraseanet sources are under "/var/www/phraseanet"
  - you will need to create two databases, to use phraseanet, mysql credentials are
    user:       root
    password:   toor
  - then go to the following url "http://phraseanet-php54-nginx/" in your browser, that's it

Environment
-----------

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

Q:  How to connect to the VM database ?
A:  You can reach VM database using SSH configuration:

    Mysql Host : 127.0.0.1
    Mysql User: root
    Mysql Password: toor
    Mysql Port 3306

    SSH Host: 192.168.56.101
    SSH user: vagrant
    SSH port: 22
    SSH Key: vagrant/vms/phraseanet-php54-nginx/puphpet/files/dot/ssh/insecure_private_key from
    phraseanet root directory

Q:  I can not reach elasticsearch neither rabbitmq or any client on 192.168.56.101:*
A:  By default ip table blocks the access to these ports, you can enable their access by running the
    following command:
    sudo iptables -I INPUT -p tcp --dport {{PORT}} -j ACCEPT

Q:  I am not authorized to activate debug mode on phraseanet using
    http://phraseanet-php54-nginx/index_dev.php/*
A:  By default access to debug mode is only authorized from loopback ip's.
    You must edit the configuration file config/configuration.yml and edit the following entry:

    debugger:
      allowed-ips:
        - 192.168.56.1




