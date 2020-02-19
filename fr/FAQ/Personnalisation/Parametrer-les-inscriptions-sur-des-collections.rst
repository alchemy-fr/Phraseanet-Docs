Activer les inscriptions sur des bases et des collections
=========================================================

Il est possible de permettre de s'inscrire sur une ou plusieurs collections
Phraseanet au moyen d'un formulaire joignable à partir de la page d'accueil de
l'application.

Mécanisme d'inscription
-----------------------

Le scénario d'inscription est semblable à celui proposé par d'autres
applications. L'utilisateur remplit et soumet un formulaire d'inscription qui
lui ouvre un accès à des ressources de l'applications.

L'inscription est soit automatique, soit modérées par un administrateur
fonctionnel chargé d'étudier les demandes d'inscription.

Inscription modérée ou inscription automatique ?
------------------------------------------------

Par défaut les inscriptions sont modérées. Lorsqu'un utilisateur soumet un
formulaire d'inscription, les administrateurs fonctionnels reçoivent une
notification (à l'écran et/ou par e-mail) leur indiquant qu'une demande d'accès
vient d'être effectuée.
Ils étudient la légitimité des inscriptions dans l'Admin puis valident ou
refusent les demandes en appliquant des droits aux utilisateurs.
Les utilisateurs ayant fait des demandes sont alors notifiés de l'issue donnée à
leurs inscriptions.
Se reporter au paragraphe relatif aux demandes d'accès sur :doc:`cette page<../../User/Manuel/AdministrationUtilisateurs>`.

L'inscription automatique permet à un internaute de solliciter un accès qui est
immédiatement validé.

C'est un choix de paramétrage relatif à l'instance et selon le projet une
stratégie peut l'emporter sur l'autre.

Pour activer l'inscription automatique...

* Se connecter à l'interface Admin comme *Administrateur*
* Dans le menu latéral, cliquer sur le noeud **Paramétrage** puis...
* Dans la rubrique **Inscription** placer le boutons radio
  *Activer l'inscription automatique* en position **True**
* Valider le formulaire

Mettre en place l'inscription sur des collections
-------------------------------------------------

Les inscriptions sont mises en place au niveau des collections par l'insertion
d'une balise XML dans les réglages de collection. Tout en disposant du droit
** Gestion des collections**...

*  Cliquer sur la rubrique *Réglages de collection* de la collection concernée
*  Activer la vue XML
*  Déclarer la balise XML <caninscript> en indiquant la valeur 1 comme indiqué
   dans cette exemple

.. code-block:: xml

   <?xml version="1.0" encoding="UTF-8"?>
     <baseprefs>
       <caninscript>1</caninscript>
       <sugestedValues/>
     </baseprefs>

*  Valider le formulaire

Un lien **Inscription** figure alors sur la page d'accueil de l'application.

Donner le choix de s'inscrire à des collections en particulier
--------------------------------------------------------------

Les administrateurs peuvent donner le choix des collections sur lesquelles
peuvent s'inscrire les utilisateurs.

* Se connecter à l'interface Admin comme *Administrateur*
* Dans le menu latéral, cliquer sur le noeud **Paramétrage** puis...
* Dans la rubrique **Inscription** agir sur les options proposées par les
  boutons radio *Sélection automatique des bases de données*.

Cette option désactive ou active la sélection des bases et collections sur
laquelle l'utilisateur fait une demande d'inscription. Si l'option est
désactivée, l'inscription est effectuée d'office sur toutes les bases et
collections rendues disponibles.

* Valider le formulaire pour appliquer la configuration.

Accepter des inscriptions par des listes blanches
-------------------------------------------------

La mise en place des listes blanches permet de valider automatiquement des
inscriptions d'utilisateurs en fonction d'une liste de domaines autorisés.

A ces domaines autorisés peuvent correspondre des modèles de droits appliqués à
l'utilisateur qui sollicite l'inscription.

Le dispositif se paramètre au niveau de la collection ou de la base :

Pour une collection :

.. code-block:: xml

   <?xml version="1.0" encoding="UTF-8"?>
     <baseprefs> <status>0</status>
       <caninscript>1</caninscript>
         <registration>
           <auto_register>
             <email_whitelist>
               <email pattern="/^.*@alchemy\.fr$/" user_model="modele_alchemy_fr"/>
               <email pattern="/^.*@phraseanet\.fr$/" user_model="modele_phraseanet_fr"/>
             </email_whitelist>
           </auto_register>
         </registration>
          ...
     </baseprefs>

Pour une base :

.. code-block:: xml

   <?xml version="1.0" encoding="UTF-8"?>
     <record modification_date="20180612182722">
       <caninscript>1</caninscript>
         <registration>
           <auto_register>
             <email_whitelist>
               <email pattern="/^.*@(alchemy|phraseanet)\..*$/" user_model="modele_alchemy"/>
             </email_whitelist>
           </auto_register>
     </registration>
     ...
     </record>

Avec une telle configuration, les demandes sont accordées suivant l'adresse
e-mail fourni :

+------------------------+----------------------------------+
| E-mail fourni          | Modèle appliqué                  |
+========================+==================================+
| dupond@alchemy.fr      | modele_alchemy_fr                |
+------------------------+----------------------------------+
| dupond@phraseanet.fr   | modele_phraseanet_fr             |
+------------------------+----------------------------------+
| durand@alchemy.eu      | modele_alchemy                   |
+------------------------+----------------------------------+
| durand@phraseanet.com  | modele_alchemy                   |
+------------------------+----------------------------------+
| doe@gmail.com          | pas de modèle appliqué           |
|                        |                                  |
|                        | *l'accès passe par une demande*  |
+------------------------+----------------------------------+

Dans le cas ou l'expression régulière satisferait plusieurs filtres de
recherche, seul le premier modèle est appliqué.

A la fin de l'applications des modèles d'utilisateur (pour chaque collection
demandée, avec ou sans whitelist), les collections demandées dont l'accès
n'est accordé font l'objet d'une demande d'accès.

.. note::

    L'inscription par listes blanches requiert d'activer l'inscription
    automatique dans le paramétrage de l'instance.


Personnaliser le formulaire d'inscription
-----------------------------------------

Il est possible de paramétrer les champs qui apparaissent dans le formulaire
d'inscription.
Se reporter au paragraphe relatif aux Champs optionnels à l'enregistrement sur
:doc:`cette page<../../Admin/Configuration>`.
