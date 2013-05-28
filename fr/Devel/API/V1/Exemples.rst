Cas d'utilisation
=================

Chercher des enregistrements un utilisant des champs documentaires définis
--------------------------------------------------------------------------

Pour retrouver toutes les images de "Paris" la ville, premièrement requéter
l'API avec le terme "paris" cependant il se peut que des images de "Paris" la
ville, des images d'une personne nommée "Paris" ou bien des images contenant le
mot "paris" dans les champs indéxés puissent être trouvées.

En considérant que le champ "Ville" soit préalablement indéxé, pour restreindre
la recherche la requête doit être effectuer en spécifiant le champ désiré.

Pour cela, fournisser un paramêtre additonnel et demander explicitement le champ
sur lequel effectuer la recherche.


.. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&fields[]=Ville&type=image" https://mydomain.tld/api/v1/search/

.. note::

    Le paramètre "fields" est un tableau, il est donc possible de fournir un ou
    plusieurs champs.
