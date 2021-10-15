Embed media in a third-party application
========================================

================
HTML Integration
================

Phraseanet allows the integration of media in third party applications (blog, CMS, etc.) using iframe.
This iframe has everything you need to read the targeted media (Image, PDF, videos, etc.).


See example below:

.. raw:: html

    <script src="../_static/embedIframe/js/phraseanetResponsiveIFrame.js"></script>
    <div style="margin:auto;text-align:center;padding:5px;">
    <iframe data-optimize-area="height"
                width="100%"
                style="border:none;"
                src="https://demo.alchemyasp.com/embed/?url=https%3A//demo.alchemyasp.com/permalink/v1/68/796/preview/796.mp4%3Ftoken%3DRVaKazI9F2Sr7NgdHwRmN1n6FjdeGllwXkOLobU1AhPKHM5Jj4y3rrxO7H5WHYzS"
                allowfullscreen></iframe>
    </div>

The dimensions of the content of this iframe automatically adapt to the dimensions of this iframe.

.. note::

    The dimensions of a media contained in an iframe may be reduced but not enlarged beyond the original size of the media.

======================
Responsive integration
======================

In order to facilitate responsive HTML integration, the content of the iframe emits via the JavaScript API `Window.postMessage <https://developer.mozilla.org/en-US/docs/Web/API/Window/postMessage>`_
the optimal dimensions of the content according to the defined dimensions of the iframe.
It is up to the parent container (the iframe container) to use these values ​​and adapt the size of the iframe.

To achieve it easily, we provide a javascript script to automatically adjust the size of iframes
in width or height.

`Javascript script download <../_static/embedIframe/phraseanetResponsiveIFrameDemo.zip>`_ (archive in zip format).

.. warning::

    This script will not work for multiple iframes of different dimensions with the same media (same URL).

Examples
********

Automatic height adjustment
^^^^^^^^^^^^^^^^^^^^^^^^^^^

For each iframe requiring an automatic height adjustment, just fix the width (inline or via sheet style) and
add the data attribute **data-optimize-area** with the value **'height'**:

.. code-block:: html

    <iframe src="http://..."
                width="..."
                data-optimize-area="height"
                allowfullscreen></iframe>


`Demo "Automatic height adjustment" <../_static/embedIframe/autoHeightIFrameTest.html>`_


Automatic width adjustment
^^^^^^^^^^^^^^^^^^^^^^^^^^

For each iframe requiring an automatic width adjustment, just fix the height (inline or via sheet
style) and add the data attribute **data-optimize-area** with the value **'width'**:

.. code-block:: html

    <iframe src="http://..."
                height="..."
                data-optimize-area="width"
                allowfullscreen></iframe>


`Demo "Automatic width adjustment" <../_static/embedIframe/autoWdthIFrameTest.html>`_
