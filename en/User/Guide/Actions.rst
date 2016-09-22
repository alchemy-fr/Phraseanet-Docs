Actions on records
==================
.. toctree::
   :maxdepth: 3

.. topic:: The essential

    The actions on the records are made with commands of actions palettes.

    The :term:`main palette<Actions Palette>` under the search form allows to
    act on the selected documents in the display area.

    In the work area, the actions palette of the opened basket or story allows
    to act on the records it contains or that are selected.

    **The actions are accessible depending on the users rights**. Some of these
    actions are basic features while others are advanced features.


.. image:: ../../images/Actions-PaletteBeta.jpg
   :align: center

Basic features
--------------

Export and Print
****************

.. seealso::

   :doc:`Refer to the Export and Printing section in Phraseanet<Export>` in the
    fundamentals.

Advanced features
-----------------

The advanced features are accessible using the actions palette buttons or using
actions context menus.

Edit
****

This function allows editing records: documents and stories.
Complete or modify the documentary descriptions of the *assets*, either one by
one or by batch.

.. seealso::

   :doc:`Refer to the Edit section <Edit>`.

In the main palette, the context menu regroups the functions
:ref:`Properties<Actions-Properties>` and:ref:`Move<Actions-Move>`.

.. _Actions-Properties:

Properties
**********

This action allows to modify:

* the :term:`statuses<Status>` of the selected records (documents or stories)
* the type of the selected documents

Modify the records status
^^^^^^^^^^^^^^^^^^^^^^^^^

The :term:`statuses<Status>` allows to categorize records. They bring
information on their statuses: progress in a *workflow*, alerts on expired
rights, restricted access for users...*etc*.

.. note::

    28 statuses are customizable in Phraseanet Admin. They can be implemented
    for *workflow* needs or for access restrictions on records by custom tasks.
    A status change is also directly available from the :doc:`Edit <Edit>`
    form.

To edit records statuses:

* Select one or more records in the display area or in the opened basket or
  story
* Click on the **Properties** button in the corresponding actions palette
* Use the radio-buttons to act on available statuses
* Click on **Apply change** to save the changes

.. note::

    The statuses edition is also available in the Edit window.

    **The interfaces is asynchronous**. Statuses symbols displayed for records
    are refreshed when the interface is refreshed.

Modify the documents types
^^^^^^^^^^^^^^^^^^^^^^^^^^

This action allows to change the documents types that are automatically set when
importing in *Phraseanet*. It is useful when some documents were not correctly
interpreted when imported by the host platform.

* Select one or more records in the display area or in an opened basket or story
* Click on the **Properties** button in the corresponding actions palette
* Select the tab **Type of documents**
* Choose a type for the selected documents. This action can either be unitary
  or applied by batch
* Click on **Apply change** to save the changes

.. _Actions-Move:

Move
****

**Move** allows to move media from one collection to an other, in one
same Phraseanet base.

* Select one or more records in the display area or in an opened basket or story
* Click on the **Move** button
* Select the collections where the documents shall be moved
* Click on **Validate** to save the changes

.. note::

    Asynchronous, the interface doesn't show collection changes in real time.
    Refresh display by searching again moved records if you want to check that
    action has been successfully done.

Push, feedback, bridge and publications
***************************************

The **Push** button and its context menu regroups the Push and Feedback
functions, the Bridge function and the Publish action.
These functions allow to push and promote records towards recipients or
applications.

.. seealso::

    * Refer to the section dedicated to :doc:`Push and validation <Push>`
    * Refer to the section dedicated to the :ref:`Bridge<Publish-Bridge>`
    * Refer to the section dedicated to :ref:`publications<Publish-Publications>`

Tools
*****

Tools regroups the actions allowing to act on:

* **The thumbnails or preview images** (regeneration, substitution, rotation or
  sharing options for preview and thumbnail, choice of thumbnail for videos)
* **The substitution of original document or thumbnail** if the feature
  is activated in the application's settings
* **To display all metadata** of a selected document

Select one or more records in the display area or in an opened basket or story
of the work zone then click on the **Tools** button. Choose one of the
suggested tabs:

* **Regenerating the sub-definition**: to regenerate thumbnails and
  subviews from original documents for the selected records.
* **Video tools**: Available only if the selected media is a video, this
  tab propose tools to customize the thumbnail of the selected video.
* **Rotation**: Rotate thumbnails, previews images and original documents for
  the selected media when possible.
* **Substitution**: Replace the original document by an other. A checkbox
  allows to choose if the thumbnail and the preview image have to be rebuilt.
* **Substitution for subview**: Replace the thumbnail image by an other file.
* **Metadatas**: Display all the metadatas information read by the
  **Exiftool** application in the original media of the selected document (this
  tab is available if only one document is selected)
* **Subviews sharing**: since 3.8.7, disabling (or enabling) permalinks for
  documents, sub-definitions or thumbnails files of a selected document ;
  disabling permalinks giving HTTP 404 error codes when reaching its URLs.

Delete
******

**In the display area**, the Delete action allows to delete records (documents,
or stories).

* Select one or more records in the display area or in an opened basket or story
* Click on the **Delete** button and confirm deletion for selected records

**In the work zone**, click on the Delete icon in the actions palette of an
opened basket or story. A checkbox allows to choose if the documents of a
story shall be deleted.
