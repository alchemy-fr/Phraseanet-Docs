Plugins install
===============

Add/Remove a plugin
-------------------

Two commands allow to add and remove plugins :

Add a plugin:

.. code-block:: none

    bin/console plugin:add /path/to/plugin

Remove a plugin:

.. code-block:: none

    bin/console plugin:remove plugin-name

Plugin structure
----------------

A plugin has a minimal structure:

.. code-block:: none

├── composer.json
├── manifest.json
└── public

manifest.json
*************

**manifest.json** is a declarative file for Phraseanet in a JSON format.
Here is the minimal manifest.json file:

.. code-block:: json

    {
        "name": "null-plugin",
        "description" : "A plugin that does nothing."
    }

Some properties can be added to the JSON document as follow:

.. code-block:: json

    {
        "name": "custom-connector",
        "description" : "A custom class connector",
        "keywords"    : ["connector"],
        "authors" : [
            {
                "name"     : "Author name",
                "homepage" : "http://example.com",
                "email"    : "email@example.com"
            }
        ],
        "homepage" : "http://example.com/project/example",
        "license"     : "MIT",
        "version"     : "0.1",
        "minimum-phraseanet-version": "4.0",
        "maximum-phraseanet-version": "4.1",
        "twig-paths": ["custom-twig-views"],
        "services" : [
            {
                "class": "Vendor\\PluginService"
            }
        ],
        "commands" : [
            {
                "class": "Vendor\\CustomCommand"
            }
        ],
        "extra" : {
            "custom-property" : "value"
        }
    }

Properties details for manifest.json:

- name (required, string): the name of the plugin. It must be lowercase, unique
  and can not contain space or special character.
- description (required, string): A test description of the plugin.
- keywords (array): An array of keywords related to the plugin.
- authors (array): An array of author objects. Author object accepts "name",
  "email" and "homepage" properties.
- homepage (string): A link to the plugin homepage.
- license (string): An `SPDX`_ license identifier.
- version (string): A `semver`_ compatible version number.
- minimum-phraseanet-version (string): The minimum Phraseanet compatible version
  (included).
- maximum-phraseanet-version (string): The maximum Phraseanet compatible version
  (excluded).
- twig-paths (string): An array of paths relatives to the plugin root directory
  that should be used by Twig (allows to customize Phraseanet templates).
- services: An array of service objects to register in Phraseanet. A service
  object is configured with a "class" property.
- commands: An array of command objects to register to Phraseanet Konsole. A
  command object is configured with a "class" property.
- extra: An object of custom properties.

.. note::

    Twig is automatically configured for plugins: If a "views" directory exists
    in the plugin root directory, then a "plugins-%nom-du-plugin%" namespace
    is created in Twig.

composer.json
*************

**composer.json** file is used to solve plugin PHP dependencies and create a
dedicated autoloader.

.. code-block:: json

    {
        "name": "vendor/phraseanet-plugin-name",
        "description": "A Hello world plugin",
        "license" : "MIT",
        "autoload": {
            "psr-0": {
                "Vendor" : "src"
            }
        }
    }

The file above declares that the plugin sources will be automatically loaded
from the **src** directory and will follow a `PSR-0`_ structure.
It is recommended to read `composer`_ documentation for more information.

Plugin authoring
----------------

Lots of customizations are available with plugins, most of them require a
strong knowledge in `Silex`_, `Twig`_ and other components used by Phraseanet.

Reading plugins source code like `Mail log plugin`_ and `Syslog plugin`_
might give some advices for developement.

Two things should be noted:

Service customization
*********************

Services registered with the "services" property of *manifest.json* file
must implement **Alchemy\\Phrasea\\Plugin\\PluginProviderInterface** interface.

Console commands
****************

Commands registered with the "commands" property of *manifest.json* file must
implement **Alchemy\\Phrasea\\Command\\CommandInterface** interface. The simplest
way to do so is to extend the **Alchemy\\Phrasea\\Command\\Command** abstract
class.

.. _Mail log plugin: https://github.com/Phraseanet/mail-log-plugin
.. _Syslog plugin: https://github.com/Phraseanet/syslog-plugin
.. _PSR-0: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
.. _composer: https://getcomposer.org/doc/
.. _Silex: https://silex.symfony.com/
.. _Twig: https://twig.symfony.com/
.. _semver: https://semver.org/
.. _SPDX: https://spdx.org/licenses/
