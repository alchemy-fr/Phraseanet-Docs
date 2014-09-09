Activate subscriptions on Phraseanet bases and collections
==========================================================

It is possible to allow the subscription on one or more Phraseanet collections
using a form accessible from the home page of the application.

Subscription process
--------------------

The subscription process is like any other applications. The user fills and
submits a subscription form that gives him access to the application and its
resources.

The subscription is either automatic or goes through a functional administrator
that will check every subscriptions demands.


Manual or automatic subscription?
---------------------------------

By default, the subscriptions are manual. When a user submits a subscription
form, the functional administrators receive a notification (on the screen and/or
by email) indicating a new access request was created.
They check in the Admin section that the inscription is legitimate then either
validate of reject a subscription application by granting user rights or not.
The users that subscribed are then notified of the decision on their application
Refer to :doc:`this page <../../User/Guide/AdministrationUsers>`
dedicated section on access requests.

The automatic subscription allows the user to request an access which is
automatically granted.

It is a choice on each instance and depending on the project, a strategy is
better than the other.

To activate the automatic subscription...

* Connect to the Admin interface as *Administrator*
* In the sidebar, click on the **Settings** node then...
* In the section **Subscription** set to **True** the radio-button
  *Activate the automatic subscription*
* Validate the form


Implementing subscription on collections
----------------------------------------

The subscriptions are implemented in the collections by inserting a XML tag in
the collection's settings. Having the **Collections management** right...

* Click on the section *Collection settings* of the concerned collection
* Activate the XML view
* Insert a <caninscript> XML tag indicating the value 1 as indicated in
  this example :

.. code-block:: xml

   <?xml version="1.0" encoding="UTF-8"?>
     <baseprefs>
       <caninscript>1</caninscript>
       <sugestedValues/>
     </baseprefs>

*  Validate the form

A **Subscription** link is then available on the home page of the application.

Letting choose which collection to subscribe to
-----------------------------------------------

The administrators can give the users a choice of collections they can subscribe
to.

* Connect to the Admin interface as *Administrator*
* In the sidebar, click on the **Settings** node then...
* In the section **Subscription**, act on the options suggested by the radio
  buttons *Automatic selection of databases*.
  
This option will activate or de-activate the selection of Phraseanet bases and
collections on which the user subscribes. If the option is de-activated, the
subscription is made on all the available bases and collections.

* Validate the form then apply the settings.

Customizing the subscription form
---------------------------------

It is possible to customize the fields of the subscription form.
Refer to the section "Optional records fields" of
:doc:`this page<../../Admin/Configuration>`.
