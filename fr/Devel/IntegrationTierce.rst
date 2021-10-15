Intégrer des médias dans une application tierce
===============================================

================
Intégration HTML
================

Phraseanet permet l'intégration de médias dans des application tièrces (blog, CMS, etc.) au moyen d'iframe.
Cette iframe embarque tout le nécessaire pour lire le média ciblé (Image, PDF, vidéos, etc.).

Exemple ci-dessous :

.. raw:: html

    <script src="../_static/embedIframe/js/phraseanetResponsiveIFrame.min.js"></script>
    <div style="margin:auto;text-align:center;padding:5px;">
    <iframe data-optimize-area="height"
                width="100%"
                style="border:none;"
                src="https://demo.alchemyasp.com/embed/?url=https%3A//demo.alchemyasp.com/permalink/v1/68/796/preview/796.mp4%3Ftoken%3DRVaKazI9F2Sr7NgdHwRmN1n6FjdeGllwXkOLobU1AhPKHM5Jj4y3rrxO7H5WHYzS"
                allowfullscreen></iframe>
    </div>

Les dimensions du contenu de cette iframe s'adaptent automatiquement aux dimensions de cette même iframe.

.. note::

    Les dimensions d'un media contenu dans une iframe pourront être réduites mais pas agrandies au delà de la taille originale du média.

======================
Intégration responsive
======================

Afin de faciliter l'intégration HTML responsive, le contenu de l'iframe emet via l'API Javascript `Window.postMessage <https://developer.mozilla.org/en-US/docs/Web/API/Window/postMessage>`_
les dimensions optimales du contenu selon les dimensions définies de l'iframe.
A charge au contener parent (le contener de l'iframe) d'exploiter ces valeurs et adapter la taille de l'iframe.

Pour faciliter cette tâche, nous fournissons un script javascript permettant d'ajuster automatiquement la taille des iframes
en largeur ou hauteur.

`Télécharger le script javascript <../_static/embedIframe/phraseanetResponsiveIFrameDemo.zip>`_ (archive au format zip).

.. warning::

    Ce script ne fonctionnera pas pour plusieurs iframes de dimensions différentes présentant le même média (même URL).

Exemples
********

Ajustement automatique de la hauteur
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

Pour chaque iframe nécéssitant un ajustement automatique en hauteur, il suffit de fixer la largeur (inline ou via feuille
de style) et ajouter l'attribut de donnée **data-optimize-area** avec la valeur **'height'** :

.. code-block:: html

    <iframe src="http://..."
                width="..."
                data-optimize-area="height"
                allowfullscreen></iframe>


`Démonstration "Ajustement automatique de la hauteur" <../_static/embedIframe/autoHeightIFrameTest.html>`_


Ajustement automatique de la largeur
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

Pour chaque iframe nécéssitant un ajustement automatique en largeur, il suffit de fixer la hauteur (inline ou via feuille
de style) et ajouter l'attribut de donnée **data-optimize-area** avec la valeur **'width'** :

.. code-block:: html

    <iframe src="http://..."
                height="..."
                data-optimize-area="width"
                allowfullscreen></iframe>


`Démonstration "Ajustement automatique de la largeur" <../_static/embedIframe/autoWdthIFrameTest.html>`_
