Les types de champs dans Phraseanet
===================================

L'utilisation du moteur Phrasea implique de typer les champs de la structure
documentaire.

Quatre types sont disponibles :

Le type STRING
--------------

C'est le type par défaut. Il ne produit pas d'indexation par valeur(*). Il ne
permet ni la recherche avec les opérateurs de comparaison =, <, >... ni le tri.

Le type TEXT
------------

Le contenu des champs sont indexés par valeur, tel quel. Ce type est destiné aux
recherches par contenu exact ("auteur=Paul Verlaine").

Le type NUMBER
--------------

Le contenu est interprété comme un nombre. Ce typage permet la recherche avec
des opérateurs de comparaison (largeur>1000) ou de trier par valeurs numériques
(par exemple, des poids de fichiers) .

Le type DATE
------------

Le contenu attendu est un date au format iso éventuellement incomplète (par
exemple : 2009). Ce typage permet des comparaisons sur les dates ("date>=2000 et
date<2012/12/20") ou le tri par date.
Lorsqu'un champ est typé comme DATE, un calendrier permet d'assister la saisie
d'une date dans le formulaire d'édition des notices.
