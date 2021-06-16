Task Manager
============

Phraseanet integrates a task engine to perform asynchronous operations.

This different tasks are managed by a :ref:`Scheduler`.

Access to the tasks manager
---------------------------

* Log in to the application **with a Phraseanet Administrator account**
* Launch the **Admin** interface
* Click on the *Task Manager* item in the left side menu

  .. image:: ../images/Admin_tasks.jpg
    :align: center

.. _Scheduler:

Scheduler
---------

You will find in the Scheduler context menu list items to start, stop and
watch logs of the tasks.

.. _alternative-scheduler-start:

Alternative starts and stops
****************************

If you want to start and stop the Scheduler automatically, for example in a
cron script, you can use `KonsoleKommander <Console.html>`_ and find the right
command:

.. code-block:: bash

    task-manager:scheduler:pause-tasks        Pause scheduler started tasks jobs
    task-manager:scheduler:resume-tasks       Resume scheduler started tasks jobs
    task-manager:scheduler:run                Run the scheduler
    task-manager:scheduler:state              Returns scheduler state
    task-manager:task:list                    Lists tasks
    task-manager:task:run                     Runs a task
    task-manager:task:start                   Starts a task
    task-manager:task:state                   Returns the state of a task
    task-manager:task:stop                    Stops a task

Tasks
-----

.. seealso::

    For tasks editing, please refer to the
    :ref:`Task manager paragraph in the User manual<Tasks-Manager>`.

Indexation task (deprecated)
****************************

.. note::

    There is no need to use the Indexation task with Elasticsearch engine.

Subview creation
****************

This task creates sub-definitions (thumbnails, previews and other
sub-definitions set in the setup structure).

.. note::

    This task is required for common Phraseanet use

Write metadatas
***************

This task writes metadatas inside documents, depending of the configuration
you set up for subviews files.

Archive in collection
*********************

This task watch a HotFolder and archive its content in a  :term:`Collection`.

Settings
^^^^^^^^

* Collection: the collection where the files are going
* HotFolder: the directory to watch
* Period: time to wait between to check in the folder
* Period before archive: time to wait before starting archive
* Move docs in "_archived": keep a copy of archived documents
* Move docs in "_error": keep a copy of failed documents

.. warning::

    For security reasons, you have to write an empty .phrasea.xml
    file at the root of the HotFolder.

Archive files and their XML description is possible by editing the XML view.

Here is an example of XML configuration to archive `.jpg` and `.tif` files
associated with their `.xml` description:

.. code-block:: xml

    <?xml version="1.0" encoding="UTF-8"?>
    <tasksettings>

      ...

      <files>
        <file mask="^(.*)\.jpg$" caption="$1.jpg.xml"/>
        <file mask="^(.*)\.JPG$" caption="$1.JPG.xml"/>
        <file mask="^(.*)\.tif$" caption="$1.tif.xml"/>
        <file mask="^(.*)\.TIF$" caption="$1.TIF.xml"/>
        <file mask="^(.*\.xml)$" caption="$1"/>
      </files>
    </tasksettings>


FTP Push
********

This task will upload your FTP export. It requires the activation of FTP
export.

Settings
^^^^^^^^

* Proxy address (optional)
* Proxy port (optional)
* Period: time to wait between two checks

FTP Pull
********

This task fetch data from a remote FTP repository to a local storage. It can
be combined with an archive task to fetch datas.

Settings
^^^^^^^^

* Proxy address (optional)
* Proxy port (optional)
* Period: time to wait between two checks
* FTP Host
* FTP Port
* FTP User
* FTP Password
* FTP Directory
* Local Directory: the directory where to retrieve the datas
* Passive mode
* SSL connexion

API Bridge Uploader
*******************

This task manages synchro with others APIs (Youtube, DailyMotion ou Flickr)
through the :term:`Bridge`.

Record mover
************

This task performs actions on records from a Phraseanet collection to another.
depending of their status or some date fields.

It is intended to move (or delete) records from a Phraseanet collection to
another according to dates criteria or Phraseanet status-bits states.

Typically it can be used to automate end licence issues in organizations to
avoid the use of some media after an expiration date.

Settings
^^^^^^^^
* Databox: the databox ID number
* Period: time in seconds to wait between two checks
* Collection: from original Phraseanet collection => to destination
  Phraseanet collection
* Status-bit: from initial Phraseanet Status-bit state => to final Phraseanet
  Status-bit state

Overview
^^^^^^^^

RecordMover execute a list of tasks.

A job search for matching records to criteria (settings "from") and apply
update on these records (settings "to") or deletion.

The "RecordMover" task has replace a the "Workflow01" task from previous
Phraseanet versions because it allows more criteria.

Interface
^^^^^^^^^
The settings are editable in XML and the interface displays the corresponding
XML grammar, the number of records affected by each task (if the task was
performed now), and the first 10 affected record-id's.

A task can be kept "off" during its development : a red cross is visible.

XML Settings
^^^^^^^^^^^^

<tasks> lists all the <task>.

A <task> act on a Phraseanet base/Databox (attribute "sbas_id") and can either
update records or delete them ("action" attribute: update OR delete).

A <task> can be named ("name" attribute) so that it name appears in logs.

To execute a <task> it must have the attribute "active =" 1 "". Use 0 to keep
the task off during its development.

A <task> acts on ALL records corresponding to criterias listed in the
<from> part of the script.

Possible criteria:

- The Phraseanet record type:

.. code-block:: xml

    <type type="RECORD" />
    only documents

    <type type="STORY" />
    only stories

- Phraseanet collections:

.. code-block:: xml

    <coll compare="=" id="3,5,7" />
    records are in collections 3, 5 or 7

    <coll compare="!=" id="8,9" />
    records are in all collection, except collection 8 or 9

- Phraseanet status-bits (sb):

.. code-block:: xml

    <status mask="1x0xxxx" />
    status-bit number 4 is set to 0 AND status-bit number 6 is set 1
    (please note sb 0 to 3 are reseved to Phraseanet so the xxxx at the end of attribute)

- The value of a text field:

.. code-block:: xml

    <text field="City" compare="=" value="Paris"/>
    value in the City filed is Paris

    <text field="Author" compare="!=" value="Smith"/>
    all value in the Author field except Smith

- The value of a date in a Date type field, compared with the date of the day:

.. code-block:: xml

    <date direction="before" field="ONLINESINCE"/>
    before the date indicated in ONLINESINCE fleid compared to the date of the
    day (so where are before the indicated date)

    <date direction="after" field="ONLINESINCE" delta="+30" />
    the date in ONLINESINCE has passed since 30 days compared to the date of the
    day (so where are more than 30 days after the indicated date in the
    ONLINESINCE field)

    <date direction="after" field="PURGE" delta="-2" />
    2 days before the date indicated in a PURGE field

For the "update" action, operations described in <to> markup can concern:

- The Phraseanet collection

.. code-block:: xml

    <coll id="2" />
    records are moved to phraseanet collection 2

- Phraseanet Status-bits

.. code-block:: xml

    <status mask="0x1xxxx" />
    lower status-bits number 6 to 0, raise status-bit number 4 to 1

For the "delete", attribute *deletechildren="1"* calls for the removal of the
contents of the deleted stories.

Examples
^^^^^^^^

.. code-block:: xml

    <?xml version="1.0" encoding="UTF-8"?>
    <tasksettings>
    <period>10</period>
    <logsql>0</logsql>
    <tasks>

        <!-- leave off line (sb4=1) all records before the date in COPYRIGHT_END-->
        <task active="1" name="confidential" action="update" sbas_id="1">
        <from>
            <date direction="before" field="COPYRIGHT_END"/>
        </from>
        <to>
            <status mask="x1xxxx"/>
        </to>
        </task>

        <!-- keep on line (sb4=0) all records from 'public' collection between copyright date and archive date -->
        <task active="1" name="visible" action="update" sbas_id="1">
        <from>
            <coll compare="=" id="5"/>
            <date direction="after" field="COPYRIGHT_END"/>
            <date direction="before" field="ARCHIVAGE_DATE"/>
        </from>
        <to>
            <status mask="x0xxxx"/>
        </to>
        </task>

        <!-- tell 10 day before archiving (lower sb5) -->
        <task active="1" name="ending soon" action="update" sbas_id="1">
        <from>
            <coll compare="=" id="5"/>
            <date direction="after" field="ARCHIVE_DATE" delta="-10"/>
        </from>
        <to>
            <status mask="1xxxxx"/>
        </to>
        </task>

        <!-- move in 'archive' collection -->
        <task active="1" name="archiving" action="update" sbas_id="1">
        <from>
            <coll compare="=" id="5"/>
            <date direction="after" field="ARCHIVAGE_DATE" />
        </from>
        <to>
            <status mask="00xxxx"/>  <!-- clean status-bits states -->
            <coll id="666" />
        </to>
        </task>

        <!-- purge archived records since 1 year in 'archive' collection -->
        <task active="1" name="purge archive" action="delete" sbas_id="1">
        <from>
            <coll compare="=" id="666"/>
            <date direction="after" field="ARCHIVAGE_DATE" delta="+365" />
        </from>
        </task>

    </tasks>
    </tasksettings>

.. warning::

    In case of conflicts or overlaps between <task> criteria, successive records
    may 'jump' from one state to another at each execution of the task.

    ex :
    In the previous example, if the archive date of a record is prior to its
    copyright end date (inconsistent), sb 4 will go from 0 to 1 at each task
    execution.

    This kind of issue can be avoided by ensuring that none of the <from>
    clauses are overlapped by raising a specific Phraseanet Status-bit in each
    stage <to> of a <task>.

API Webhook
***********

This task allows to exploit the events listed in the Api_webhooks MySQL table
from the application box.
The proposed setting is to indicate the operating frequency of this task.
