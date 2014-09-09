Add a Stamp logo
================

Using a stamp automatically adds a banner with a logo and metadatas when
exporting sub-definitions and original pictures.
The stamp configuration is a 2 step process.

Upload a logo
-------------

Upload a *Stamp* logo using the Admin interface in the concerned collections.

Edit the collection's settings
------------------------------

Edit the collection's setting using the XML view of the collections preferences
(the user must have editing rights on the *Suggested values*).

.. code-block:: xml

  <?xml version="1.0" encoding="UTF-8"?>
     <baseprefs>

       <stamp>
         <logo position="left" width="25%"/>
         <text size="50%">Record-id : <var name="RECORD_ID"/></text>
         <text size="50%">Title : <field name="SujetTitre"/></text>
         <text size="50%">Caption : <field name="Legende"/></text>
         <text size="50%">Copyright : <field name="Copyright"/></text>
         <text size="50%">Date : <field name="Date"/></text>
       </stamp>
     </baseprefs>

**Comments** :

