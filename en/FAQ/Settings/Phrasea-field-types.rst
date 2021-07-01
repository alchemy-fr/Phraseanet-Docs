Fields type in Phraseanet
=========================

Using Phrasea engine involves typing the fields of the Phraseanet base format.

Three types are available:

STRING
------

The fields contents are indexed by value, as they are. This type is best used
for exact searches ("author=William Shakespeare") or fuzzy.
Note that only the first 32 000 characters will be used for indexing.

NUMBER
------

The content are interpreted as a number. This type allows searches with
relational operators (width>1000) or sorting by numerical value (for example,
by filesize).

DATE
----

The expected content is an iso date format, eventually incomplete (for example :
2009). This formatting allows comparisons on dates ("date>=2000 and
date<2012/12/20") or sorting by date. When a field has a DATE format, a calendar
assists the typing of a date in edition form.
