Cas d'utilisation
=================

Chercher des enregistrements en utilisant des champs documentaires définis
--------------------------------------------------------------------------

Pour retrouver toutes les images correspondantes à Paris, la ville, requêter
l'API avec le terme "Paris".
Cependant, comme il est possible que des images de Paris Hilton (ou d'autres
Paris) se soient glissées dans les résultats, une requête plus précise pourrait
donner des résultats plus pertinents.

En considérant qu'un champ Ville soit correctement renseigné, la recherche peut
 être effectuée dans le contenu d'un champ spécifié.

Pour cela, fournir une paramètre additionnel et demander explicitement le champ
sur lequel effectuer la recherche.

.. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&fields[]=Ville&type=image" https://mydomain.tld/api/v1/search/

.. note::

    Le paramètre "fields" est un tableau, il est donc possible de fournir un ou
    plusieurs champs.
