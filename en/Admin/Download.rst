Download
========

Sources are available on our GitHub repository :  
`https://github.com/alchemy-fr/Phraseanet <https://github.com/alchemy-fr/Phraseanet>`_
you can fetch them with

  .. code-block:: bash

    git clone git://github.com/alchemy-fr/Phraseanet.git Phraseanet
    cd Phraseanet
    ./vendors.php

  .. warning:: Phraseanet requires two dependencies that we provide :

  * http://github.com/alchemy-fr/Phraseanet-Extension

  * http://github.com/alchemy-fr/Phraseanet-Indexer

Verify :doc:`prerequisite <Prerequisite>` and proceed to install.

*Note:* We need to fetch some dependencies for inner folders:

  .. code-block:: bash

    cd lib/vendor/Silex/
    git submodule update --init --recursive

