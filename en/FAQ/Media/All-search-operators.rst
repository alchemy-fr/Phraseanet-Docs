All the search operators available in Phraseanet
================================================

Here is the list of the different search operators available in *Phraseanet*.

Boolean operators
-----------------

The conjunction operator *AND*
******************************

Used by default, it is not mandatory to type it, the operator *AND* displays the
media that contains all the typed terms in their descriptive note.

The join operator *OR*
**********************

It allows to search for several terms in the media notes.
If the search is **sweet OR sour** the descriptive sheets of the media will
contain either the word sweet, or the word sour, or both.

The negation operator *EXCEPT*
******************************

It allows to exclude terms from the search.

The common operators **ALL** and **LAST**
-----------------------------------------

* *all* : to search all the documents in the selected Phraseanet
  :term:`bases <Phraseanet Base>` and collections.

* *last* (with no specific number) displays by default the last 12 documents
  added in the Phraseanet base.

The operator *last* is valid per opened Phraseanet :term:`bases <Phraseanet Base>`
and collections.

The substitution operators
--------------------------

The wildcard *****
******************

Tue truncation character *****, used on the right of a string allows to search
descriptive notes that contains terms starting with the characters before the
asterisks.

The replacement character **?**
*******************************

A character can be replaced by **?**.
So, the search *wo?ds* displays the media which descriptive notes contains terms
like *words* or *woods*.

The proximity operators
-----------------------

The operator **PRES**
*********************

It allows to fetch all the media in which the result of the term 1 is at a 
specific distance (n) of the term 2.

For example, (Eiffel PRES 2 Tower) will select all the records in which there is
a maximum distance of 2 words between *Eiffel* and *Tower*.

.. note::

	If no distance is specified, the PRES operator is handled like a boolean
	operator AND.

The operator **BEFORE**
***********************

It allows to fetch all the records in which the result of the term 1 is before
the term 2 at a specified distance (n). For example, (Eiffel BEFORE Tower) will
select all the records in which the term *Eiffel* is located, at max, two words
before the word *Tower*.

.. note::

	It is not mandatory to specify a distance. If the distance is not specified,
	the default value is 12.

The operator **AFTER**
**********************

It allows to fetch all the records in which the result of term 1 is after the
term 2 at a specified distance (n). For example, (Tower AFTER 2 Eiffel) will
select all the records in which the word *Tower* is located, at max, two words
after the word *Eiffel*.

.. note::

	If the distance is not specified, the default value is 12.

.. warning::

	For all the operators stated earlier, using double quotes on the operator
	will cancel its function.

Numerical comparisons
---------------------

It is possible to select documents comparing dates and numbers, for documentary
fields typed as Date or Number.
So, the search **date > 14/07/2012** displays the media that have a field
labelled date containing a date before the 14th of July 2012.

The comparison operators are : >, <, =, <=, >=, between (the limits are included
).

The days (DD), months(MM), years (YYYY) can be staggered or separated with a
slash /, a dash -, a space.

* Search on one day: DD/MM/YYYY, YYYYMMDD, DD/MM/YY, YYYY/MM/DD,
  DD-MM-YYYY, YY-MM-DD
* Search on one month: MM/YY, YYYY/MM, YYYYMM, MM/YYYY
* Search on one year: YYYY

The dates fields type is strict. The user can prefer to search using an
advanced search window.
