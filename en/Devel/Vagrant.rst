Vagrant
=======

To ease development, Phraseanet 3.8.6 and following versions include a development environment
provided through Vagrant.

Prerequisites
-------------

The following prerequisites are needed to setup a development environment:

  - Ruby 1.9+
  - Vagrant 1.6+
  - Host Updater Plugin  "vagrant plugin install vagrant-hostsupdater"
  - VirtualBox

Install
-------

  - Clone the Phraseanet Project.
  - In the root directory of the project run the following command:

  .. code-block::bash

    vagrant up

  - Wait 30 seconds and give your root password to mount shared folder through NFS.
  - The complete set up takes approximatively one hour.
  - To connect to the Vagrant VM run:

  .. code-block::bash

    vagrant ssh

  - Phraseanet sources path is "/var/www/phraseanet"
  - you will need to create two databases, to use phraseanet, mysql credentials are:
  - **user**:       root
  - **password**:   toor
  - Then go to the following url "http://phraseanet-php54-nginx/" in your browser, that's it

Environment
-----------

Typical Environment is:

   - Debian 7 Wheezy
   - nginx 1.6.2
   - php 5.4.33 + FPM
   - mariadb 10.0.14
   - rabbitmq 3.3.5
   - redis 2.8.17
   - elasticsearch 1.2.1
   - node 0.10.29

VM's IP is 192.168.56.101 on a private network.

FAQ
---

How to connect to the VM database ?
You can reach VM database using SSH using the following parameters:

  - VM Credentials
    - SSH Host: 192.168.56.101
    - SSH user: vagrant
    - SSH port: 22
    - SSH Key: vagrant/vms/phraseanet-php54-nginx/puphpet/files/dot/ssh/insecure_private_key from
    phraseanet root directory

  - MySQL Credentials:

    - Mysql Host : 127.0.0.1
    - Mysql User: root
    - Mysql Password: toor
    - Mysql Port 3306


I can not reach elasticsearch neither rabbitmq or any client on 192.168.56.101:* ?
By default ip table blocks the access to these ports, you can enable their access by running the
following command:

  .. code-block::bash

    sudo iptables -I INPUT -p tcp --dport {{PORT}} -j ACCEPT

I am not authorized to activate debug mode on phraseanet using http://phraseanet-php54-nginx/index_dev.php/*
By default access to debug mode is only authorized from loopback IP's.
Edit config/configuration.yml file with the following entry:

  .. code-block::bash

    debugger:
      allowed-ips:
        - 192.168.56.1




