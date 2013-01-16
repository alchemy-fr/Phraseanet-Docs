Signaler un problème
====================

Une anomalie détectée ? Le résultat d'une action n'est pas celui attendu ?
Une option impossible à activer ? Une idée pour simplifier l'utilisation de
Phraseanet ?

Pour ouvrir un rapport de bug, vérifier préalablement les conditions suivantes :

 * Le problème concerne la dernière version de Phraseanet
 * Le dernier patch de la version est installé ( :doc:`Comment effectuer une mise
   à jour ? </Admin/MiseAJour>` )
 * Le bug constaté est reproductible en enchainant une combinaison
   d'actions précises
 * La :doc:`FAQ </Admin/Faq>` ne traite pas du problème rencontré ou ne livre
   pas de remède approprié
 * Le problème n'est pas déjà reporté dans le `bug tracker`_.

Après vérification, ouvrir un ticket dans le `bug tracker`_ avec un `gist`_ du
résultat de la commande :

.. code-block:: bash

    bin/console system:doctor

Surtout :
 * Ne pas se limiter au copier-coller du résultat
 * Indiquer l'enchainement des étapes nécéssaires pour reproduire le problème
 * Indiquer le navigateur utilisé ainsi que sa version

.. _bug tracker: https://github.com/alchemy-fr/Phraseanet/issues/
.. _gist: https://gist.github.com/
