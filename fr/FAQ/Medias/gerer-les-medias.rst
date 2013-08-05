Gestion des médias
==================

A priori, Phraseanet est capable de cataloguer tous types de fichiers, surtout
si le paramétrage de la tâche d'archivage ne donne pas de restriction.

Phraseanet gère t'il tous les formats vidéo ?
---------------------------------------------

Il n'y a pas de restriction de format ou de codec d'entrée dans Phraseanet.
Toutefois, vous aurez peut être une limite concernant l'affichage de vignettes
ou de prévisualisations.

Vous avez sûrement remarqué que Phraseanet délègue le processing video à FFmpeg.

Si la version de FFMpeg utilisée par votre install Phraseanet supporte ces
codecs, alors vous aurez accès à des imagettes dans l'application, sinon vous
aurez une imagettes de substitution.

L'intérêt de mettre à jour FFmpeg est donc certains. Commercer par faire ces
mises à jour sur une install de test est une bonne pratique. C'est même un
préalable raisonnable à tout passage en prod.

Quoi qu'il en soit, même si vignettes et prévisualisation ne sont pas
disponibles, l'édition, le push, ainsi que l'ensemble des autres
actions Phraseanet restent possible.

Le rendu des documents multi calque est *bizarre*
-------------------------------------------------

Les exécutables en charge de la création des sous-définitions de ce type de
documents ne sont pas assez doués pour extraire des vignettes et des
prévisualisations fidèles pour ce type de documents.




