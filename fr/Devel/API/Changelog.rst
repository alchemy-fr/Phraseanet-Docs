API Changelog
=============

1.4.0
-----

La version 1.4.0 est disponible depuis la version 3.8.4. Cette mise à jour est
complètement retro-compatible avec la précédente version et ajoute une nouvelle route
concernant l'utilisateur identifié.

Nouvelle route
**************

- :doc:`me <V1/Route/Me>` Route utilisateur.

Updated routes
**************

- :doc:`feeds/aggregated <V1/Route/Feeds/Aggregated>` ajout d'un attribut *feeds* pour restreindre
    l'agrégation des flux aux flux sélectionnés.
- :doc:`feeds/entry <V1/Route/Feeds/Entry>` ajout d'un attribut *feed_title* qui référence le titre du flux
    dans laquelle se trouve l'entrée.

1.3.1
-----

La version 1.3.1 est disponible depuis la version 3.7.9. Cette mise à jour est
complètement retro-compatible avec la précédente version et améliore les URL de
permaliens et ajoute une URL de téléchargement pour ceux-ci.

.. note::

    La retro-compatibilité des URLs générées avec des versions précédentes de
    l'API est préservée.

**Avant**

.. code-block:: javascript

    {
        "name": "preview",
        "permalink": {
            "created_on": "2012-12-19T18:46:17+01:00",
            "id": 249,
            "is_activated": true,
            "label": "SUPER",
            "updated_on": "2012-12-19T18:46:17+01:00",
            "page_url": "http://local.phrasea/permalink/v1/SUPER/1/99/9p6yOZMJ/preview/view/",
            "url": "http://local.phrasea/permalink/v1/SUPER/1/99/9p6yOZMJ/preview/"
        },
        "height": 533,
        "width": 800,
        "filesize": 26853,
        "devices": [],
        "player_type": "IMAGE",
        "mime_type": "image/jpeg"
    }

**version 1.3.1**

.. code-block:: javascript

    {
        "name": "preview",
        "permalink": {
            "created_on": "2012-12-19T18:46:17+01:00",
            "id": 249,
            "is_activated": true,
            "label": "SUPER",
            "updated_on": "2012-12-19T18:46:17+01:00",
            "page_url": "http://local.phrasea/permalink/v1/1/99/preview/?token=9p6yOZMJ",
            "download_url": "http://local.phrasea/permalink/v1/1/99/preview/SUPER.jpg?token=9p6yOZMJ&download"
            "url": "http://local.phrasea/permalink/v1/1/99/preview/SUPER.jpg?token=9p6yOZMJ",
        },
        "height": 533,
        "width": 800,
        "filesize": 26853,
        "devices": [],
        "player_type": "IMAGE",
        "mime_type": "image/jpeg"
    }

1.3
---

La version 1.3 de l'API Phraseanet est disponible depuis la version 3.7.5.
Cette mise à jour est complètement retro-compatible avec la précédente version
et introduit le concept de Reportage dans celle-ci.

Nouvelles routes
****************

- :doc:`stories/story <V1/Route/Stories/Story>` Route reportage.
- :doc:`stories/story <V1/Route/Stories/Embed>` Route reportage embed.
- :doc:`search <V1/Route/Search>` Le nouveau moteur de recherche compatible avec
  les reportages.

Routes dépréciées
*****************

- :doc:`records/search <V1/Route/Records/Search>`. Nous encourageons vivement
  les développeurs à mettre à jour leurs applications pour supporter la
  nouvelle route de recherche.

Updated routes
**************

- :doc:`records/search <V1/Route/Records/Related>` liste maintenant les
  reportages contenant le record aux côtés des paniers.

1.2
---

La version 1.2 de l'API présente deux problèmes de retro-compatibilité avec la
version précédente.

Un bug a été corrigé et le retour de la route
:doc:`feeds/content <V1/Route/Feeds/Content>` a été mis à jour.

- Un certains nombre de routes ont été modifiées

    - Sous définition d'un record :doc:`record/embed <V1/Route/Records/Embed>`
    - Métadonnée d'un record :doc:`record/metadatas <V1/Route/Records/Metadatas>`
    - Légende d'un record :doc:`record/caption <V1/Route/Records/Caption>`
    - Rechercher un record :doc:`record/search <V1/Route/Records/Search>`
    - Structure documentaire d'une databox :doc:`databox/metadatas <V1/Route/Databox/Metadatas>`
    - Description d'un panier :doc:`basket/list <V1/Route/Baskets/List>`
    - Description d'un élément du panier :doc:`basket/content <V1/Route/Baskets/Content>`

- Les objets avec des attributs numériques ont été supprimés. Tous les objets de
  collection sont maintenant représentés comme un tableau d'objets.

**Avant**

.. code-block:: javascript

    "response": {
        "items": {
            "1" : {
                "item_id": 1,
            },
            "3" : {
                "item_id" : 3
            }
        }
    }

**version 1.2**

.. code-block:: javascript

    "response": {
        "items": [
            {
                "item_id": 1,
            },
            {
                "item_id" : 3
            }
        ]
    }

Réponse pour une entrée des flux aggrégés
*****************************************

L'attribut **feed_id** a été ajouté, il représente l'identifiant du flux auquel
l'entrée appartient.

Réponse pour un record
**********************

L'attribut **last_modification** a été remplacé par **updated_on**.

Réponse pour un permalien
**************************

L'attribut **last_modified** a été remplacé par **updated_on**.

Réponse pour des sous-definitions
*********************************

Les sous-définition sont présentés comme un tableau d'objet.

L'attribut **name** a été ajouté.

**Avant**

.. code-block:: javascript

    "response": {
            "embed": {
              "document": {
                    "permalink": {
                        "created_on": "2012-06-22T21:20:55+02:00",
                        "id": 1972,
                        "is_activated": true,
                        "label": "0113JPG",
                        "updated_on": "2012-06-22T21:20:55+02:00",
                        "page_url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/gAZMiywc/document/view/",
                        "url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/gAZMiywc/document/"
                    },
                    "height": 4256,
                    "width": 2832,
                    "filesize": 1101093,
                    "devices": [
                    "all"
                    ],
                    "player_type": "IMAGE",
                    "mime_type": "image/jpeg"
                }
        }

**version 1.2**

.. code-block:: javascript

    "response": {
            "embed": [
            {
                "name": "document",
                "permalink": {
                    "created_on": "2012-06-22T21:20:55+02:00",
                    "id": 1972,
                    "is_activated": true,
                    "label": "0113JPG",
                    "updated_on": "2012-06-22T21:20:55+02:00",
                    "page_url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/gAZMiywc/document/view/",
                    "url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/gAZMiywc/document/"
                },
                "height": 4256,
                "width": 2832,
                "filesize": 1101093,
                "devices": [
                "all"
                ],
                "player_type": "IMAGE",
                "mime_type": "image/jpeg"
            }

Réponse pour des métadonnées d'un record
****************************************

La réponse des métadonnés d'un record est maintenant contenu dans
l'attribut **record_metadatas**

.. code-block:: javascript

    "response": {
        "record_metadatas": [
        {
            "meta_id": 4437,
            "meta_structure_id": 1,
            "name": "Object",
            "value": "smoke"
        },
        {
            "meta_id": 4438,
            "meta_structure_id": 4,
            "name": "Keywords",
            "value": "fumée"
        }
        ]
    }

Réponse pour la structure documentaire d'une databox
****************************************************

La réponse de la structure documentaire d'une databox est maintenant
contenue dans l'attribut **document_metadatas**.

.. code-block:: javascript

    "response": {
             "document_metadatas": [
             {
                 "id": 1,
                 "namespace": "IPTC",
                 "source": "IPTC:ObjectName",
                 "tagname": "ObjectName",
                 "name": "Object",
                 "separator": "",
                 "thesaurus_branch": "",
                 "type": "string",
                 "indexable": true,
                 "multivalue": false,
                 "readonly": false,
                 "required": false
             },
             {
                 "id": 2,
                 "namespace": "IPTC",
                 "source": "IPTC:Category",
                 "tagname": "Category",
                 "name": "Category",
                 "separator": "",
                 "thesaurus_branch": "",
                 "type": "string",
                 "indexable": true,
                 "multivalue": false,
                 "readonly": false,
                 "required": false
             }
         ]
     }

Réponse pour une tache
***********************

Trois champs sont ajoutés à la réponse de la description d’une tâche.

- auto_start
- runner
- crash_counter

.. code-block:: javascript

    "response": {
        "task": {
            "id": 2,
            "name": "Création des sous définitions",
            "state": "started",
            "pid": 15705,
            "title": "Subviews creation",
            "last_exec_time": "2012-06-13T14:38:38+02:00",
            "auto_start": true,
            "runner": "scheduler",
            "crash_counter": 0
        }
    }

Réponse pour la légende d'un record
***********************************

La réponse d'une légende d'un record est maintenaint contenu dans l'attribut
'caption_metadatas'.

.. code-block:: javascript

    "response": {
        "caption_metadatas": [
            {
                "meta_structure_id": 29,
                "name": "Bits",
                "value": "8"
            },
            {
                "meta_structure_id": 30,
                "name": "Channels",
                "value": "3"
            }
        ]
    }

Réponse pour un contenu d'un panier
************************************

L'attribut 'basket_elements' à la racine de la reponse ne retourne plus que les
éléments du panier sous forme d'un tableau

.. code-block:: javascript

    "response": {
        "basket_elements": [
            {
                "basket_element_id": 9,
                "order": 4,
                "record": {

                }
            }
        ]
    }

Un attribut 'basket' a été ajouté à la racine de la reponse qui décrit le panier
demandé.

.. code-block:: javascript

    "response": {
        "basket": {
            "basket_id": 144,
            "created_on": "2012-06-18T16:29:37+02:00",
            "description": "",
            "name": "hello",
            "pusher_usr_id": null,
            "ssel_id": 144,
            "updated_on": "2012-06-18T16:29:37+02:00",
            "unread": false,
            "validation_basket": false
        }
    }

Dans l'objet qui décrit un panier un attribut 'validation_basket' a été ajouté,
il indique s'il s'agit d'un panier de validation.

Recherche d'un enregistrement
*****************************

Certains paramètres de la route :doc:`records/search <V1/Route/Records/Search>`
sont renommés :

 - datefield => date_field
 - datemin   => date_min
 - datemax   => date_max

Le paramètre 'page' de la requete ainsi que le champ de la reponse ont disparu
au profit du paramètre offset_start

.. code-block:: javascript

    "response": {
        "offset_start": 0,
        "per_page": 10,
        "available_results": 1,
        "total_results": 1,
        "error": "",
        "warning": "",
        "query_time": 0.000342,
        "search_indexes": "",
        "suggestions": [],
        "results": [{
            ....
         }]
    }

Réponse pour un flux
********************

L'attribut "is_mine" a disparu au profit de deux nouvelles clefs : *readonly* et
*deletable*.

.. code-block:: javascript

    "feeds": [
        {
            "id": 288,
            "title": "News",
            "subtitle": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. ",
            "total_entries": 0,
            "icon": "/skins/icons/rss32.gif",
            "public": false,
            "readonly": true,
            "deletable": false,
            "created_on": "2011-07-20T18:45:20+02:00",
            "updated_on": "2011-07-20T18:45:20+02:00"
        },

.. note::

    Ces attributs ont aussi été ajoutés dans la route :doc:`feeds/list <V1/Route/Feeds/List>`.

Correction de bug
*****************

La réponse de la route :doc:`feed content <V1/Route/Feeds/Content>` était sous
la forme

.. code-block:: javascript

    "response": {
        "offset_start": 0,
        "entries": {
            "offset_start": 0,
            "entries": {
                ...
            }
        }
    }

Ce problème a été corrigé, et la réponse est correctement renvoyé en 1.2 :

.. code-block:: javascript

    "response": {
        "offset_start": 0,
        "entries": [
            ...
        ]
    }

Ajout de routes
***************

- Ajout de la route :doc:`/ <Root>`
- Ajout de la route :doc:`/records/add/ <V1/Route/Records/Add>`
- Ajout de la route :doc:`/quarantine/list/ <V1/Route/Quarantine/List>`
- Ajout de la route :doc:`/quarantine/item/ <V1/Route/Quarantine/Item>`
- Ajout de la route :doc:`/monitor/scheduler/ <V1/Route/Monitor/Scheduler>`
- Ajout de la route :doc:`/monitor/phraseanet/ <V1/Route/Monitor/Phraseanet>`
- Ajout de la route :doc:`/monitor/tasks/ <V1/Route/Monitor/Tasks>`
- Ajout de la route :doc:`/monitor/task/ <V1/Route/Monitor/Task>`
- Ajout de la route :doc:`/monitor/task/start/ <V1/Route/Monitor/TaskStart>`
- Ajout de la route :doc:`/monitor/task/stop/ <V1/Route/Monitor/TaskStop>`
- Ajout de la route :doc:`/feeds/content/ <V1/Route/Feeds/Aggregated>`
- Ajout de la route :doc:`/feeds/entry/ <V1/Route/Feeds/Entry>`

Thumbnails
**********

Auparavant, un fichier de substitution était fourni par l'API lorsque la
thumbnail d'un record n'était pas disponible.
Cette substitution n'est plus fournie. Il en résulte que la clef thumbnail
d'un record peut désormais être nulle :

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/records/2/132/",
            "response_time": "2012-06-13T14:06:21+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "record": {
                "databox_id": 2,
                "record_id": 132,
                "mime_type": "image/jpeg",
                "title": "photo03.JPG",
                "original_name": "photo03.JPG",
                "last_modification": "2012-06-13T13:50:29+02:00",
                "created_on": "2012-06-13T13:49:29+02:00",
                "collection_id": 1,
                "sha256": "60691f538bdac78197004edcfb77dc772d824daeca54bd13e59f6b485f0293bc",
                "thumbnail": null,
                "technical_informations": [
                    {
                        "name"  : "Height",
                        "value" : 2448
                    },
                    {
                        "name"  : "Width",
                        "value" : 3264
                    }
                ],
                "phrasea_type": "image",
                "uuid": "d91372ec-ea94-4e8a-bf26-065ad8684180"
            }
        }
    }

Embeddables
***********

Les *Embeddables* fournissent maintenant une liste de *devices* adaptés.
Ces *devices* sont compatibles avec CSS 2.

.. seealso::

    http://www.w3.org/TR/CSS2/media.html#media-types

Exemple : la vignette thumbnail suivante est fournie pour un affichage à
l'écran.

.. code-block:: javascript

    "thumbnail": {
        "width": 150,
        "filesize": 4271,
        "devices": [
            "screen"
        ],
        "mime_type": "image/jpeg"
    },

Liens hypermedia
****************

Des liens hypermedia apparaissent dans certaines réponses. Ainsi, dans une
réponse :doc:`feed/content <V1/Route/Feeds/Content>`, pour chaque entrée, un lien
vers la route d'API :doc:`feed/entry <V1/Route/Feeds/Entry>` correspondant est
fourni.

Requêter un media via un device et/ou un type mime
**************************************************

Il est maintenant possible de restreindre la demande à une gamme de devices et
de types mime dans la route :doc:`records/embed <V1/Route/Records/Embed>`

1.1
---

Un changement majeur du schema apparait lors de la version 3.6 dans le stockage
des valeurs de champs. Les valeurs de champs multivalués étaient auparavant
stockées sérialisées.
Elles sont désormais stockées indépendamment les unes des autres.

Ce changement permet une amélioration majeure : le stockage de ressources
(Utilisateurs, Geonames, Entrée de thésaurus...) dans un champ multivalué.

La conséquence majeure réside dans les deux routes d'API
:doc:`records/metadatas </Devel/API/V1/Route/Records/Metadatas>` et
:doc:`records/setmetadatas </Devel/API/V1/Route/Records/SetMetadatas>`,
donc le passage de l'API en version 1.1.

Route records/metadatas
***********************

La route records/metadatas renvoyait auparavant les métadonnées sous la
forme :

.. code-block:: javascript

    "6272": {                    //champ monovalue
        "meta_id": 6272,
        "meta_structure_id": 2,
        "name": "Categorie",
        "value": "paysages"
    },
    "6273": {                    //champ multivalue
        "meta_id": 6273,
        "meta_structure_id": 4,
        "name": "MotsCles",
        "value": [
            "ciel",
            "météo",
            "nuage"
        ]
    }

La réponse records/metadatas est maintenant sous la forme :

.. code-block:: javascript

    "6272": {                    //valeur du champ monovalue
        "meta_id": 6272,
        "meta_structure_id": 2,
        "name": "Categorie",
        "value": "paysages"
    },
    "6273": {                    //valeur de champ multivalue
        "meta_id": 6273,
        "meta_structure_id": 4,
        "name": "MotsCles",
        "value": "ciel"
    },
    "6274": {                    //valeur de champ multivalue
        "meta_id": 6274,
        "meta_structure_id": 4,
        "name": "MotsCles",
        "value": "météo"
    },
    "6275": {                    //valeur de champ multivalue
        "meta_id": 6275,
        "meta_structure_id": 4,
        "name": "MotsCles",
        "value": "nuage"
    }

Route records/caption
*********************

Pour les développeurs qui utilisaient cette route pour l'affichage de la
fiche descriptive, la route
:doc:`records/caption </Devel/API/V1/Route/Records/Caption>` est plus aisée à
manipuler. L’usage de la route records/metadatas est à réservé au prélude de
l’édition des metadonnées.

.. code-block:: javascript

    "2": {                         //valeur du champ monovalue
        "meta_structure_id": 2,
        "name": "Categorie",
        "value": "paysages"
    },
    "4": {                         //valeur de champ multivalue sérialisé
        "meta_structure_id": 4,
        "name": "MotsCles",
        "value": "ciel ; météo ; nuage"
    }

.. seealso::

    documentation complète de la route
    :doc:`records/caption </Devel/API/V1/Route/Records/Caption>`

Route records/setmetadatas
**************************

La route records/setmetadatas fonctionnait auparavant sous la forme :

.. code-block:: javascript

    metadatas = {
        //Ajout d'un champ mono valué
        {
            meta_struct_id: 1,
            meta_id: null,
            value : [
                'A pretty string'
            ]
        },
        //update d'un champ multivalué
        {
            meta_struct_id: 3,
            meta_id: 487,
            value: [
                'one key word',
                'two key word'
            ]
        },
        //suppression d'un champ
        {
            meta_struct_id: 7,
            meta_id: 489,
            value: []
        }
    }

Désormais, il faut l'utiliser de la manière suivante :

.. code-block:: javascript

    metadatas = {
        //Ajout d'un champ mono valué
        {
            meta_struct_id: 1,
            meta_id: "",
            value : 'A pretty string'
        },
        //update d'une valeur de champ multivalué
        {
            meta_struct_id: 3, //champ multivalué
            meta_id: 487,
            value: 'one key word'
        },
        //ajout d'une valeur dans un champ multivalué
        {
            meta_struct_id: 3, //champ multivalué
            meta_id: "",
            value: 'second key word'
        },
        //suppression d'une valeur d'un champ multivalué
        {
            meta_struct_id: 3, //champ multivalué
            meta_id: 487,
            value: ""
        },
        //suppression d'une valeur dans un champ monovalué
        {
            meta_struct_id: 7,
            meta_id: 489,
            value: ""
        }
    }

1.0
---

Première version stable de l'API Phraseanet. Cette API utilise OAuth2 comme
protocole d'authentification et fournit des routes POST et GET pour accéder aux
ressources.
