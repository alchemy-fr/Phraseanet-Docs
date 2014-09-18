Users Management
================

.. toctree::
    :maxdepth: 3

.. topic:: The essential

    Available for users who have the users management right, the users section
    allows to manage subscription, rights and information on users.

Click on the Users section to go to the users management interface.

.. image:: ../../images/General-Administration.jpg
    :align: center

Concepts related to users and their rights
------------------------------------------

In Phraseanet, if a user does not see a function or section, it is because he
does not have the required access rights.
Also, it is not possible for a user to give more rights than he has himself.

.. note::

    An user who have no allocated rights is a ghost user.
    He is recognizable by a ghost icon in the users list.

    .. image:: ../../images/Administration-utilisateurfantome.jpg
        :align: center


Create, modify, delete an user
------------------------------

Create a new user
*****************

* Click on the button  **New user**.
* Enter the email of the new user to create and click on the **Create a user**
  button.
* Allocate rights to the created user

.. seealso::

    :ref:`Refer to the Rights edition section<User-Rights>`.

* To edit information related to the user's details, click on the Information
  tab then edit the form.
* Apply changes by clicking on the **Validate** button.

.. note::

    For users created *via* the users management interface, the email
    address is used as unique identifier.

Modify the user's rights
************************

* Double click on the username in the list
* Edit then validate forms in Rights and Infos tabs

Delete a user
*************

* Select a user in the list
* Click on Delete button

Sort existing users
-------------------

It is possible to sort users list by criteria such as the identifier,
the name/first name, email, country or company.

Users templates
---------------

User templates allows to apply the same rights on one or several users.
In the users list, a template is indicated with an **M** icon.

.. image:: ../../images/Administration-modeleutilisateur.jpg
    :align: center

Create a User template
**********************

* Click on the **New template** link
* Enter a name for the template then validate the form
* Give rights to the new template then validate the form

.. note::

    Templates belong to user who created it. Template will not be visible or
    usable by the other administrators.

Apply templates to users
************************

It is possible to apply templates to one or more users.

* Select users in the list
* Choose the template to apply in the **Apply a template** menu list
* Click on Apply

.. image:: ../../images/Administration-appliquermodele.jpg
    :align: center

An alert window allows to choose a rule to apply :

* **Apply the template** : the rights of the template are added to the existing
  rights
* **Reset and apply the template** : the rights are reseted then applied to the
  user

.. _Setting-Guest-Access:

Guest access setup
------------------

A guest access can be setup in Phraseanet, if needed. It allows to give
access to media to persons not registered in the system.

To set up the guest access:

* Click on the **Guest access setup** link.

.. image:: ../../images/Administration-Barre-invite.jpg
    :align: center

* Edit the rights of the guest account then validate the form

As a right is activated, the Guest access button is displayed on the login
page of Phraseaenet.

.. _User-Rights:

Rights edition
--------------

Rights editing concerns users as well as templates.
To display the rights edition form of a user or of a template, double click
on its names.
The rights form allows viewing and managing rights per available Phraseanet
bases and collections. Rights are granted when the corresponding boxes are
checked.

For users, the Info tab gives access to the user's information.

.. note::

    The modification of the user's rights can be made in batches by selecting
    several users.

When editing by batch, a grayed box indicates that the right is at least granted
to one of the selected users.
A user cannot give more rights than he has himself : a red dot indicates that it
is impossible to give rights.

The **i** icon indicates a secondary form. Click on it to display this
subsidiary form.

Headers on the columns are clickable. They allow to check or un-check the
boxes on all the collections of a Phraseanet base.

View rights
***********

The first and leftmost part of the rights window:

* **Access** to allow access to a Phraseanet Base or to a collection
* **Active** to activate the user account. Unchecking the box allows to
  disable the user access without loosing other settings
* **Add to baskets** to allow baskets creation and edition
* **Access Subviews** allows to view and download the subviews of the
  *Preview* class
* **No Watermark** acts on the watermarks applied on the subviews of the
  image type documents. Leave the box uncheck to applied watermark
* **Documents** authorize the download of the original document and subviews of
  the *Document* class
* Order allows to order documents

Other restrictive options exist:

Limitation by Quotas
^^^^^^^^^^^^^^^^^^^^

Quota allows to define download limits per base or per collection. Click on
the Quotas icon to set these limits.

* Check the **Restriction** box to activate download restrictions
* Enter the number of authorized downloads per month for the collection.
* Click on the "Validate" button to save the setting and close the window.

Date expiration
^^^^^^^^^^^^^^^

Date expiration allows to set a time limit for user's access to a Phraseanet
base or collection.

* Check the **Activate** box to activate the system
* Fill the validity dates of the access then submit the form

Restrict on Status
^^^^^^^^^^^^^^^^^^

Limitation through status allows to hide records for users according to
the state of one or several status.

.. note::

    Refer to the settings of the base for creation and management of status
    bits.

Click on the statuses icon to set the access restrictions to the records.

* Uncheck boxes to hide records to users the submit form

Exploitation and management rights
**********************************

The left part of the rights form form regroups exploitation and the managing
rights on documents and on Phrasesanet bases and collections.

Rights on documents and users
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

* **Add** authorizes to add documents and stories in the collection
* **Edit** authorizes capturing records
* **Change status** authorizes to edit records statuses
* **Delete** authorizes records deletion in the collection
* **Image tools** gives access to the Tools button actions

* **Manage users** gives access to the users management
* **Access Reports** gives access to Report
* **Push** authorizes documents broadcasting by Pushes and Feedbacks

Rights on Phraseanet bases and collections management
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

Management rights are additional upon each other. They give access on
Phraseanet bases and collections setup.

* **Manage Collection** reveals access to collections settings in Admin.
  These rights must be completed by at least one of the following rights.
* **Manage value lists** allows to edit the suggested values for fields in a
  Collection.
* **Publications** allows to publish with Bridge and the available RSS Streams
* **Manage thesaurus** allows to edit the thesaurus
* **Manage database** gives access to bases management functions including
  creation, purge and deletion
* **Manage DB Fields** gives access to base fields setup

.. _Pending-Registration:

Pending registration
--------------------

The **Demands** section lists the subscription requests made through available
forms.

.. image:: ../../images/Administration-demande.jpg
    :align: center

The subscriptions are made on collections and there are as many lines than
collections access requests.

A rollover on the name allows to display the information related to the
applicant.

Select the rights to allocate per collections by clicking on icons.

The possible choices are:

* **Deny the access** to the requested collection.
* **Allows display and download for preview** give access to the requested
  collection with download possibilities
* **Allows display and download for previews and documents** give access to the
  requested collection, with documents in high definition.
* **Apply watermark on previews** add watermark on subview previews

Click on **Validate** to apply the selected choices.

The other option to accept a subscription request consists in applying a user
template.
