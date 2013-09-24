Mettre en place un Stamp logo
=============================

L'utilisation d'un stamp ajoute automatiquement un bandeau intégrant un logo et
des métadonnées à l'export des sous-définitions et des documents originaux de
type image.
La configuration du stamp s'effectue en deux temps

Charger un logo
---------------

Charger un logo de *Stamp* via l'interface d'administration dans les collections
concernées.

Editer les réglages de la collection
------------------------------------

Editer le réglage de la collection via la vue XML des préférences de
collections (l'utilisateur doit disposer des droits d'édition des
*Valeurs suggérés*).

.. code-block:: xml

  <?xml version="1.0" encoding="UTF-8"?>
     <baseprefs>

       <stamp>
         <logo position="left" width="25%"/>
         <text size="50%">Record-id : <var name="RECORD_ID"/></text>
         <text size="50%">Titre : <field name="SujetTitre"/></text>
         <text size="50%">Legende : <field name="Legende"/></text>
         <text size="50%">Copyright : <field name="Copyright"/></text>
         <text size="50%">Date : <field name="Date"/></text>
       </stamp>
     </baseprefs>

**Remarques** :

