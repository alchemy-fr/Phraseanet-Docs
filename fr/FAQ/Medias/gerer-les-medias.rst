Gestion des médias
==================

Si aucune restriction n'est effectuée dans le paramétrage, Phraseanet est
capable de cataloguer tous types de fichiers. Seule la capacité de la plateforme
hôte à produire des fichiers de vignettes et de prévisualisation peuvent
présenter des limites d'utilisation.

Phraseanet gère t-il tous les formats vidéo ?
---------------------------------------------

Il n'y a pas de restriction de format ou de codec d'entrée dans *Phraseanet*.
Toutefois, vous aurez peut être une limite concernant l'affichage de vignettes
ou de prévisualisations.

Vous avez sûrement remarqué que Phraseanet délègue le processing video à `FFmpeg <http://www.ffmpeg.org>`_.

Si la version de FFmpeg utilisée par votre installation *Phraseanet* supporte
ces codecs, alors vous aurez accès à des imagettes dans l'application, sinon
vous aurez une imagettes de substitution.

L'intérêt de mettre à jour FFmpeg est donc certain. Commecer par faire ces
mises à jour sur une installation Phraseanet de test est une bonne pratique.
C'est même un préalable raisonnable à tout passage en prod.

Quoi qu'il en soit, même si vignettes et prévisualisation ne sont pas
disponibles, l'édition, le push, ainsi que l'ensemble des autres
actions Phraseanet restent possibles.

Le rendu des documents multi calque est *bizarre*
-------------------------------------------------

La fabrication des sous-définitions de documents de type image est dévolue aux
logiciels `ImageMagick <http://www.imagemagick.org>`_, `GraphicsMagic <http://www.graphicsmagick.org/>`_
ou à défaut la `librairie graphique GD <http://libgd.bitbucket.org/>`_.
Seuls ImageMagick et GraphicsMagic peuvent manipuler les document multi calques
(fichiers Photoshop psd ou Tiff non aplatis).
Cependant ils ne sont pas en mesure d'extraire des vignettes et des images de
choix parfaitement fidèles pour ce type de documents.

.. note::

    Essayer d'utiliser la substitution de sous-définition disponible dans la
    fenêtre **Outils**.


