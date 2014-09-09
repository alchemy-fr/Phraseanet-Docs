Thesaurus
=========

.. toctree::
    :maxdepth: 3

.. topic:: The essential
    
    The Thesaurus is a documentary language manageemnt tool. In Phraseanet, its
    implementation is optional. It is used with the Phrasea engine and is not
    compatible with the Sphinx engine.

    In Production, the thesaurus serves :

    * **The contributors**, to give a reference vocabulary to describe the
      documentary resources of the base in the edition form.
    * **The users**, to browse the assets and make suggestions allowing to 
      narrow or expand the searches.

    The Thesaurus application is the interface dedicated to the thesaurus
    administration. Some maintenance actions are however possible in Production.


Comments on the thesaurus
-------------------------

A terminology management tool
*****************************

At its simplest, a thesaurus is a corpus of simple words or expressions reduced
to a sample knowledge domain, the one covered by the assets. It brings the
reference terms to precisely describe the documentary resources of the assets.

Artificial language, the concepts are represented by terms or expressions,
organized so the relations are explicit. The preferred terms used to describe
the resources come along with their synonyms or quasi-synonyms.

Relations in the Phraseanet thesaurus
*************************************

The Phraseanet thesaurus manages : 

* The relations between generic terms and specific terms
* The synonymy relations, in the same language or to other languages of the
  application.

This synonymy relation can be used to reflect the association between terms and
expressions of the thesaurus.

.. Warning::

    A thesaurus is a very powerful tool and its implementation can seem easy but
    can need Documentation knowledge depending on its final use and the expected
    results.

Activation of the thesaurus on a *Phraseanet* instance
******************************************************

The Phraseanet thesaurus is activated in the optional modules of the section
:ref:`Administration settings<Application-setting>`.

Set the radio button to *True* then submit the form to activate the thesaurus.

Access the thesaurus of a base
------------------------------

Start the Thesaurus from the menu bar then...

* Choose the Thesaurus of the base in the suggested list
* Choose a working language then click on validate

.. image:: ../../images/Thesaurus-general.jpg
    :align: center

The Thesaurus application window is in two parts.

* The left part of the window displays the list of the **candidate terms**,
  terms and expressions from the documents indexation and the list of rejected
  or deleted terms that are displayed by the indexation field of the database.
* The right part displays the existing Thesaurus, as a tree that can be
  deployed. When putting the mouse cursor on a branch or a term, we display in
  rollover all the synonyms associated and the number of appearances in the
  database.
* To deploy a branch click on the "+" symbol. To close it, click on the "-"

Editing the thesaurus
---------------------

Add a term
**********

Adding a new specific term to a branch means that we add a lower lever term, it
is a "Master / Detail" relation.
A new specific term in the thesaurus can be added on any existing branch from
the main branch called **Thesaurus**.
To create a specific term :

* Right click on a branch, on a term
* Click on **New term**.
* Type the term
* Type if needed a context
* Select a language for the term
* Click on **Validate**

A window opens if the term is not part of the candidates.

By default, the checkbox **Add the term without re-indexation** is checked.
Choose this option in most cases.

The choice **Add the term and re-index** will re-index the base and reset the
rejected terms.

* Click on Validate

.. note::
    The immediate re-indexation is not necessary if other terms are not yet
    added. The re-indexation can be launched after from **Phraseanet Admin**.

Create a new synonym
********************

This action allows to create equivalence relations on the terms of a branch or
node of the thesaurus.

To create a synonym :

* Right click on a branch
* Click on **New synonym**.

In the **New synonym** window : 

* Type the term
* Type if needed the context between brackets
* Select a language for the term
* Click on **Validate**

A window opens if the term is not part of the candidates.

By default **Add a term without re-indexation** is checked.
See if it is necessary to re-index the Phraseanet base, and if so, set the radio
button on **Add the term and re-index**

* -> Click on **Validate**

Delete a branch or a specific term
**********************************

* Right click on a branch or thesaurus node
* Click on **Delete**.
* Confirm the deletion in the alert window

The branch or term is deleted an so are those linked to it (specific terms or
synonyms)

The branch or the term are deleted from the thesaurus and copied in the *Stock*
branch of the candidates. They are usable as candidate terms and can be added
to any branches or nodes of the thesaurus.

.. note::

    The relations between the terms being kept, this method can be used to move
    a part of the tree structure towards an other node or branch of the
    thesaurus.

Delete a synonym term
*********************

* Right click on a branch or thesaurus node*
* Click on Property

In the property window...

* Right click on the term to delete from the node
* Choose the Delete section then confirm the deletion in the alert window

.. note::
    
    In Firefox, a menu window can hide the Property window of the thesaurus.
    
Search for a term in the candidate terms or the Thesaurus
*********************************************************

* Right click on a branch or on a node of the candidate terms or the thesaurus
  then select the Search section
  
In the Search window,

* Choose among the search options, type the searched term or expression then
  submit the form
  
The display refreshes and the terms searched are displayed in the tree structure
of the candidate terms or the thesaurus.

Export the candidates or the Thesaurus
**************************************

* Right click on a branch or on a node of the candidate terms or the thesaurus
  then select the **Export** section

In the Export window,

* Choose the export options then submit the form

The exported terms are displayed in a new tab, new window of the web browser.

Import an existing thesaurus
****************************

Tabulated text files encoded in UTF-8 can be integrated as thesaurus in the
application.

* Right click on the term Thesaurus on the top right of the interface
* Select the section **Import**

In the Import window...

* Select the thesaurus file on the computer then click on **Validate**

.. note::

    In case of errors in the tabulated text file, the import is suspended and
    an alert window indicated the anomaly.

To proceed with the integration of the imported thesaurus, link the branches
to the documentary fields of the base.

Link one or more branches of the thesaurus to a documentary field
*****************************************************************

This action allows to link one or more documentary fields of the base to a
branch of the thesaurus, to collect as candidate terms the vocabulary they
contain (after re-indexation) and organize the tree structure of the descriptive
terms for the field.

At the root of the thesaurus...

* Create the used term to name the branch of the thesaurus
* Right click on this branch
* Click on **Link to field**

In the Link to field window of the thesaurus...

* Check the box(es) of the fields to link then submit the form

.. note::
    All the new terms contained in the documents documentary sheets that will be
    added, or that the indexation will be modified, will appear as candidate
    terms in a branch named after the field.

Work on the candidates
----------------------

The candidate terms are terms and expressions linked to branches of the
thesaurus bu are not part of it. These terms can either come from information
extracted from the metadatas of a file that was added, or from the information
types from the Edit form of the records.

A part of the maintenance of the thesaurus consists in examining these
candidates. If they are relevant, they are destined to be integrated. On the
contrary, a correction of the notes can be necessary to use more appropriate
descriptors.

Adding candidate terms to the thesaurus is made either in Thesaurus or in
Production.

In Thesaurus
************

Accept a candidate
^^^^^^^^^^^^^^^^^^

* Click on the candidate term in the Candidate window and drag/drop it on the
  generic term it relates with.

In the Accept window...

* Choose to add as a specific term or a synonym then Validate

.. note::

    The candidates can only be added to the branches linked to the documentary
    fields they come from.

Reject a candidate
^^^^^^^^^^^^^^^^^^

* Right click on a candidate term of the Candidate window
* Select the section **Reject**

If it is typed again in the documentary notes, a rejected term is no more
categorised as a candidate.

**To display the rejected terms**, check the case *Display the rejected terms*
in the interface.

**Rejecting a candidate is not permanent** : 

* Display the rejected terms
* Right click on the rejected term
* Select **Accept**

Delete a candidate
^^^^^^^^^^^^^^^^^^

* Right click on a term
* Click on **Delete**
* Confirm the deletion in the alert window

The deletion of a candidate term does not affect the records. A candidate can
be deleted then re-added : 

* If it is reused during the edition of records notes
* If it stays in the documentary notes and that the base is re-indexed

.. Warning::

    During the re-indexation of a base, the refused or deleted terms of a 
    thesaurus reappear, this action reinitialises the candidates of the
    thesaurus.

In Production
*************
  
Candidates section
^^^^^^^^^^^^^^^^^^

Click on the *Thesaurus* tab of the work area then on the section Candidates.
The documentary fields linked to the thesaurus branches are showed and the **+**
allows to show the list of candidate terms sorted by alphabetical order.

Searches on the candidate terms can be launched with a double-click. The search
is then on a question by field.

The *Candidate* tab allow an ad-hoc of the Thesaurus.

Accept a candidate
^^^^^^^^^^^^^^^^^^

To add a candidate term to the Thesaurus : 

* Right click (or click while pressing the "ctrl" key pressed) on a term to
  display the pop-up menu.
* Accept the term in one of the interface languages

The display switches to the Thesaurus tab

* Search or browse to the term of the thesaurus to link to the candidate term
  and right click on it
* Accept the candidate term as a specific term or a synonym

Delete a candidate
^^^^^^^^^^^^^^^^^^

Made from Production, this operation deletes the candidate term from the
documents notes as well. Up to 25 sheets can be treated during this deletion.

To delete a candidate term :

* Right click on the term to delete
* Select **Delete**
* Confirm the deletion in the alert window

Replace a candidate
^^^^^^^^^^^^^^^^^^^

This operation allows to correct a used candidate term in up to 25 documentary
notes.

To replace a candidate term in the notes : 

* Right click on the term to correct then select Replace by
* Fill the form then click on Search
* Confirm the replacement in the alert window

.. note::

    To delete or replace a term in more than 25 sheets, use the edition form.
