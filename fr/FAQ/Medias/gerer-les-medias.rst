Gestion des médias
==================

Si aucune restriction n'est effectuée dans le paramétrage, Phraseanet est
capable d'archiver tous types de fichiers. Seule la capacité de la plateforme
hôte à produire des fichiers de sous-définition peut introduire des limites
d'utilisation.

Phraseanet gère t-il tous les formats vidéo ?
---------------------------------------------

Il n'y a pas de restriction de format ou de codec d'entrée dans *Phraseanet*.
Toutefois, vous aurez peut être une limite concernant l'affichage des vignettes
ou des prévisualisations.

Phraseanet délègue le processing video à `FFmpeg <http://www.ffmpeg.org>`_.

Si la version de FFmpeg utilisée par votre installation *Phraseanet* supporte
les codecs audio/vidéo du fichier original, alors vous aurez accès à des
imagettes dans l'application, sinon vous aurez une vignette de substitution.

L'intérêt de mettre à jour régulièrement FFmpeg est certain. Commencer par faire
ces mises à jour sur une installation Phraseanet de test. C'est un préalable
raisonnable à tout passage en prod.

Quoi qu'il en soit, même si les vignettes et les prévisualisations ne sont pas
disponibles, l'édition, le push, et l'ensemble des autres actions Phraseanet
restent possibles.

Le rendu des documents multi calque est *bizarre*
-------------------------------------------------

La fabrication des sous-définitions de documents de type image est dévolue aux
logiciels `ImageMagick <http://www.imagemagick.org>`_, `GraphicsMagic <http://www.graphicsmagick.org/>`_
ou à défaut à la `librairie graphique GD <http://libgd.bitbucket.org/>`_.
Seuls ImageMagick et GraphicsMagic peuvent manipuler les document multi calques
(fichiers Photoshop PSD ou Tiff non aplatis).
Cependant ils ne sont pas en mesure d'extraire des vignettes et des images de
choix parfaitement fidèles pour ces documents.

.. note::

    Utiliser la fonctionnalité de substitution de vignette disponible
    dans la fenêtre **Outils** pour remplacer la vignette produite par
    Phraseanet à partir du document original par une autre fabriquée hors
    application.


