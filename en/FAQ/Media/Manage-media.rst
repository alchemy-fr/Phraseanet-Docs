Media management
================

If no restrictions are applied in the settings, Phraseanet can class all file
types. The only limits are the ability of the host platform to generate
thumbnails and previews.

Does Phraseanet manage every video formats ?
--------------------------------------------

There are no format or codec restriction in *Phraseanet*. However, there might
be a limit on displaying thumbnails or previews.

You might have noticed that Phraseanet uses `FFmpeg <http://www.ffmpeg.org>`_
for video processing.

If the FFmpeg version used by your *Phraseanet* supports these codecs, then you
will have access to thumbnails in the application, if not, you will have a
standard static thumbnail.

FFmpeg's update is very useful. Updating these components on a Phraseanet
sandbox first is a good practice. It should be done before the integration in
the production environment.

In all cases, even if the thumbnails and previews are not available, edition,
push, and all others Phraseanet actions are still available.

The multi-layers documents rendering is *weird*
-----------------------------------------------

The creation of the sub-definitions for pictures is handled by the softwares
`ImageMagick <http://www.imagemagick.org>`_,
`GraphicsMagic <http://www.graphicsmagick.org/>`_
or by default by the default
`graphics library GD <http://libgd.bitbucket.org/>`_.
Only ImageMagick and GraphicsMagic can handle multi-layers documents (Photoshop
psd files, or non flat Tiff). However, they can not extract thumbnails and
good sub-definitions for this type of document.

.. note::

	Try using the sub-definition substitution available in the **Tools** window.

