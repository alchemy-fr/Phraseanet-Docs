Substituer une sous-définition d'un document
============================================

A propos
--------

Substituer (ou ajouter) une sous-définition à un record.
Permet d'injecter des sous-définitions fabriquées hors Phraseanet lorsque un document a été rajouté avec l'option
"nosubdefs" (voir route :doc:`records/add <../Records/Add>`)

========================== ======
 Informations
========================== ======
 Méthode HTTP               POST
 Authentification requise   Oui
========================== ======

Paramètres
----------

=============== =========== =============
 Paramètres      Type        Information
=============== =========== =============
 file            file        Obligatoire - Le fichier de sous-définition à remplacer/ajouter
 databox_id      entier      Obligatoire - L'identifiant de la databox à laquelle appartient le document
 record_id       entier      Obligatoire - L'identifiant du document
 name            chaîne      Obligatoire - Le nom de la sous-résolution à changer (tel que dans la structure)
=============== =========== =============


Attribut de la réponse
----------------------

========== ================================
 Attribut   Description
========== ================================
  embed     La liste des sous-définitions disponibles pour le document modifié
========== ================================

(voir route :doc:`records/embed <../Records/Embed>`)

