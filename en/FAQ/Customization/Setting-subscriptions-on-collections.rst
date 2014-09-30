Activate registration on Phraseanet bases and collections
=========================================================

It is possible to allow user registration on one or more Phraseanet collections
using a form accessible from the homepage of the application.

Registration process
--------------------

The registration process is like many other applications. Users fill and
submits a registration form that gives him access to the application and its
resources.

The registration is either automatic or goes through an administrator that
will check every registration demands.


Manual or automatic registration?
---------------------------------

**By default, the subscriptions are manual**. When a user submits a registration
form, functional administrators receive a notification (on the screen and/or
by email) indicating a new access request.
:ref:`They check in the Admin section that the registration is legitimate <Pending-Registration>`
then either validate or reject a subscription application by granting user
rights or not. The users that subscribed are then notified of the decision on
their application

.. seealso::

    Refer to :doc:`this page <../../User/Guide/AdministrationUsers>`
    dedicated section on access requests.

**Automatic subscription allows user to request access which is automatically
granted**.

It is a choice for each instance and depending on the project, a strategy is
better than the other.

To activate the automatic subscription...

* Connect to the Admin interface as *Administrator*
* Click on the **Setup** item then...
* In **Registration** section set the **Enable auto registration** radio-button
  to **True**
* Validate the form


Enable registration on collections
----------------------------------

To enable registration on collections insert a XML tag in the collection
settings. With *Manage value list* right applied...

* Click on the section *Collection settings* of the concerned collection
* Switch to XML view
* Insert a **<caninscript>** XML tag with the value 1 as indicated in
  this example :

.. code-block:: xml

   <?xml version="1.0" encoding="UTF-8"?>
     <baseprefs>
       <caninscript>1</caninscript>
       <sugestedValues/>
     </baseprefs>

*  Validate the form

A **Subscription** link is then available on the homepage of Phraseanet.

Letting user choose collection to register on
---------------------------------------------

The administrators can give users a choice of collections on which they can
register.

* Connect to the Admin interface as *Administrator*
* Click on the **Setup** item then...
* In **Registration** section set the **Auto select databases** parameter to
  false

This parameter will activate or de-activate the selection of Phraseanet bases
and collections on which a user can subscribes.
If the option is de-activated, the subscription is made on all the available
bases and collections featuring the *Caninscript* XML tag.

* Validate the form then apply the settings.

Customizing the registration form
---------------------------------

It is possible to customize the fields of the subscription form.

.. seealso ::

    Refer to the section "Optional records fields" of
    :doc:`this page<../../Admin/Configuration>`.

