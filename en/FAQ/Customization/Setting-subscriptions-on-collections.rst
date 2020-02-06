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

Accept registrations by whitelists
----------------------------------

Implementation of the white lists allows to automatically validate users
registrations based on a list of allowed domains.

To these authorized domains may correspond models of rights applied to the
user requesting the registration.

Registrations by whitelists are set on collections or on databox:

For a collection :

.. code-block:: xml

   <?xml version="1.0" encoding="UTF-8"?>
     <baseprefs> <status>0</status>
       <caninscript>1</caninscript>
         <registration>
           <auto_register>
             <email_whitelist>
               <email pattern="/^.*@alchemy\.fr$/" user_model="model_alchemy_fr"/>
               <email pattern="/^.*@phraseanet\.fr$/" user_model="model_phraseanet_fr"/>
             </email_whitelist>
           </auto_register>
         </registration>
          ...
     </baseprefs>

For a databox :

.. code-block:: xml

   <?xml version="1.0" encoding="UTF-8"?>
     <record modification_date="20180612182722">
       <caninscript>1</caninscript>
         <registration>
           <auto_register>
             <email_whitelist>
               <email pattern="/^.*@(alchemy|phraseanet)\..*$/" user_model="model_alchemy"/>
             </email_whitelist>
           </auto_register>
     </registration>
     ...
     </record>

With such configuration, requests are granted according to the provided email
address:

+------------------------+----------------------------------+
| Provided email         | Applied model                    |
+========================+==================================+
| dupond@alchemy.fr      | model_alchemy_fr                 |
+------------------------+----------------------------------+
| dupond@phraseanet.fr   | model_phraseanet_fr              |
+------------------------+----------------------------------+
| durand@alchemy.eu      | model_alchemy                    |
+------------------------+----------------------------------+
| durand@phraseanet.com  | model_alchemy                    |
+------------------------+----------------------------------+
| doe@gmail.com          | No applied model                 |
|                        |                                  |
|                        | *Goes through an access request* |
+------------------------+----------------------------------+

In the case where the regular expression would satisfy several filters, only
the first user model is applied.

At the end of templates/pattern applications (for each requested collection,
with or without whitelist), collections on which the requested
are not granted are subject to a request for access.

.. note::

    Whitelisting registration requires to enable auto-registration in
    configuration file.


Customizing the registration form
---------------------------------

It is possible to customize the fields of the subscription form.

.. seealso ::

    Refer to the section "Optional records fields" of
    :doc:`this page<../../Admin/Configuration>`.

