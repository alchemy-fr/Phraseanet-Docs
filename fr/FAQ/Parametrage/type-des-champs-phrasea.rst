Les types de champs dans Phraseanet
===================================

L'utilisation du moteur Phrasea implique de typer les champs de la structure
documentaire.

Trois types sont disponibles :

Le type STRING
--------------

Le contenu des champs sont indexés par valeur, tel quel. Ce type est destiné aux
recherches par contenu exact (exemple : "auteur=Paul Verlaine") ou flou.
Notez que seuls les premiers 32 000 caractères seront pris en compte pour l'indexation.

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
