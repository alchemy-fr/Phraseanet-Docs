Règles de codage
================
.. toctree::
   :maxdepth: 3

Voici quelques petits exemples de syntaxe à utiliser. Chacun peut noter ici les
différentes syntaxes qui lui semblent importantes.

Gras/italique
-------------
Pour mettre en gras un terme, il suffit de l'entourer de 2 étoiles et une seule
pour l'italique:

    ``**gras**`` et ``*italique*``
    
voici la preuve: **gras** et *italique*.

Listes 
------
Vous pouvez faire des listes::
 
   * premièrement 
   * deuxièmement 
   * troisièmement

Il ne faut pas oublier, lors du grande ligne, de mettre une indentation.
   
En têtes
--------
On peut mettre ce que l'on veut. Voici ce que nous utilisons:

	H1 -- Premier titre
	===================

	Voici le texte ensuite
	
	H2 -- Sous titre
	----------------
	
	H3 -- Sous section
	******************
		
	H4 -- Sous sous section
	^^^^^^^^^^^^^^^^^^^^^^^

Markups
-------

On peut s'en servir par exemple pour les notes comme "Tips" ou "PS/NB"

Les markups les plus usités sont::

	.. note::
	
	.. warning::
	
	.. versionadded:: version

	.. versionchanged:: version
    
	.. seealso::	

Par exemple::

   Voici mon texte
   
   .. warning:: 
    
      Ne jamais utiliser ce code!
      
   .. versionadded:: 0.0.1
   
      Vous pouvez utiliser ce code

Résultat:

Voici mon texte

.. warning:: 
    
   Ne jamais utiliser ce code!
      
.. versionadded:: 0.0.1

Vous pouvez utiliser ce code

Les images
----------
Exemple de syntaxe pour inclure une image::

	.. image:: ../../images/Palette.jpg
	   :align:   center
	   
A noter, qu'il faut ajouter la syntaxe nécessaire "../" (le nombre qu'il faut) pour
décrire le chemin où se trouve la photo (à quel niveau elle est).

Résultat:
	.. image:: ../images/Palette.jpg
	   :align:   center

Liens
-----
Pour faire un renvoi vers une page existante, utiliser la syntaxe suivante::

	:doc:`Exporter <Exporter>`

résultat: :doc:`Exporter <Exporter>`

Pour faire un lien vers un site, utiliser la syntaxe::

	`Site Phraseanet <http://www.phraseanet.com/>`_

résultat: `Site Phraseanet <http://www.phraseanet.com/>`_.