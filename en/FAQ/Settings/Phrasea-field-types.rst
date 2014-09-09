Fields type in Phraseanet
=========================

Using Phrasea engine involves typing the fields of the documentary structure.

Four types are available :

The type STRING
---------------

It is the default type. There are no indexation by value(*). It neither allows
searches with relational operators =, <, >... nor sorting.

The type TEXT
-------------

The fields contents are indexed by value, as they are. This type is best used
for exact searches ("author=William Shakespeare").

The type NUMBER
---------------

The content are interpreted as a number. This type allows searches with
relational operators (width>1000) or sorting by numerical value (for example,
by file weight).

The type DATE
-------------

The expected content is an iso date format, eventually incomplete (for example :
2009). This formatting allows comparisons on dates ("date>=2000 and
date<2012/12/20") or sorting by date. When a field has a DATE format, a calendar
assists the typing of a date in the guides edition form.
