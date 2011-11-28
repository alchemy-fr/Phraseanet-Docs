Règles de codage
================
.. toctree::
   :maxdepth: 3

Voici quelques petits exemples de syntaxe à utiliser.

Gras/italique
-------------

Pour mettre en gras un terme, il suffit de l'entourer de 2 étoiles et une seule
pour l'italique:

    **gras**et*italique*
    
voici la preuve: **gras** and *italique*.

Listes 
------

Vous pouvez faire des listes::
 
   * premièrement 
   * deuxièmement 
   * troisièmement

Il ne faut pas oublier, lors du grande ligne, de mettre une indentation.
   
En têtes
--------

On peut mettre ce que l'on veut. Voici ce que nous utilisons:: 

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

	.. figure::  images/sweat.jpg
	   :align:   center