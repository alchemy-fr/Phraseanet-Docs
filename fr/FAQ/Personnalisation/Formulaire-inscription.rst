Personnaliser le formulaire d'inscription
=========================================

Le formulaire d'inscription est trop contraignant ? Certains champs ne
nécessiteraient de ne pas être obligatoire ? Il est possible de personnaliser le
formulaire d'inscription.

Le formulaire d'inscription comprend trop de champs obligatoires
----------------------------------------------------------------

Peut-on en réduire le nombre ? Oui. Cependant cette personnalisation n'est pas
possible via les interfaces de Phraseanet.

Pour éditer le caractère obligatoire ou non des champs du formulaire d'
inscription, nous proposons de suivre la démarche suivante :

* Créer dans le répertoire *config* de l'installation le fichier
  *register-fields.php*
* Insérer les lignes suivantes :

.. code-block:: php

  <?php
  $arrayVerif = array(
  "form_login" => true,
  "form_password" => true,
  "form_password_confirm" => true,
  "form_gender" => true,
  "form_lastname" => true,
  "form_firstname" => true,
  "form_email" => true,
  "form_job" => true,
  "form_company" => true,
  "form_activity" => true,
  "form_phone" => true,
  "form_fax" => true,
  "form_address" => true,
  "form_zip" => true,
  "form_geonameid" => true,
  "demand" => true);

True et false determinent l'obligation (ou pas) de remplir les champs : true,
le champ est obligatoire ; false, il est facultatif.

**Important** : ne pas fermer la balise PHP en fin de fichier.

