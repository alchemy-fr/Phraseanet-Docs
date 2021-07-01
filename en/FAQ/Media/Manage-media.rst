Media management
================

If no restrictions are applied in settings, Phraseanet can archive all file
types. The only limits are the ability of the host platform to generate
thumbnails and previews of archived documents.

Does Phraseanet manage every video formats ?
--------------------------------------------

There are no format or codec restriction in *Phraseanet*. However, there might
be a limit on displaying thumbnails or previews.

You might have noticed that Phraseanet uses `FFmpeg <http://www.ffmpeg.org>`_
for video processing.

If the FFmpeg version used by your *Phraseanet* supports these codecs, then you
will have access to thumbnails and subviews in the application. If not, you
will have a standard static thumbnail.

FFmpeg's update can be useful. Updating these components on a Phraseanet
sandbox first is a good practice.

In all cases, even if the thumbnails and previews are not available, edition,
push, and all others Phraseanet actions are still available.

The multi-layers documents rendering is *weird*
-----------------------------------------------

The creation of the subviews for pictures is handled by softwares such as
`ImageMagick <http://www.imagemagick.org>`_,
`GraphicsMagic <http://www.graphicsmagick.org/>`_
or by default by the
`GD graphics library <https://libgd.github.io//>`_.
Only ImageMagick and GraphicsMagic can handle multi-layers documents (Photoshop
psd files, or non flatten Tiff). However, they can not extract thumbnails and
good sub-definitions for this type of document.

.. note::

	Try using the thumbnail substitution available in the **Tools** window

