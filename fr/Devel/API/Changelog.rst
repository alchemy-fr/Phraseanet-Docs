API Changelog
=============

1.2
---

La version 1.2 de l'API présente deux problèmes de retro-compatibilité avec la 
version précédente.

Un bug a été corrigé et le retour de la route 
:doc:`feeds/content <Route/Feeds/Content>` a été mis à jour.

Description de flux
*******************

L'attribut "is_mine" a disparu au profit de deux nouvelles clefs : *readonly* et
*deletable*.
 
.. code-block:: javascript

    "feeds": {
        "288": {
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

.. note:: Ces attributs ont aussi été ajoutés dans la route 
:doc:`feeds/list <Route/Feeds/List>`.

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
        "entries": {
            ...
        }
    }

Ajout de routes
***************

- Ajout de la route :doc:`/ <Root>`
- Ajout de la route :doc:`/records/add/ <V1/Route/Records/Add>`
- Ajout de la route :doc:`/quarantine/list/ <V1/Route/Quarantine/List>`
- Ajout de la route :doc:`/quarantine/item/ <V1/Route/Quarantine/Item>`
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
            "api_version": "1.2",
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
                "technical_informations": {
                    "Height": 2448,
                    "Width": 3264
                },
                "phrasea_type": "image",
                "uuid": "d91372ec-ea94-4e8a-bf26-065ad8684180"
            }
        }
    }

Embeddables
***********

Embeddables media now give a 
Les embeddables fournissent maintenant une liste de *devices* adaptés. 
Ces devices sont compatibles avec CSS 2.

.. seealso::
    http://www.w3.org/TR/CSS2/media.html#media-types

Exemple : la thumbnail suivante est fournie pour un affichage à l'écran.

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
vers la route d'API :doc:`feed/entry <V1/Route/Feeds/Entry>` correspondant est fourni.

Requeter un media via un device et/ou un type mime
**************************************************

Il est maintenant possible de restreindre la demande a une gamme de devices et
de type mime dans la route :doc:`records/embed <V1/Route/Records/Embed>`

1.1
---

Mise à jour majeure de l'API. Cette version n'est pas entièrement
retro-compatible avec la précédente 1.0. Voir les :doc:`instructions
<V1/Upgrade/1.1>` avant de procéder à la mise à jour.

  - Changement dans la route :doc:`records/metadatas <V1/Route/Records/Metadatas>`
  - Changement dans la route :doc:`records/setmetadatas <V1/Route/Records/SetMetadatas>`
  - Ajout de la route :doc:`records/caption <V1/Route/Records/Caption>`

1.0
---

Première version stable de l'API Phraseanet.Cette API utilise OAuth2 comme
protocole d'authentification et fournie des routes POST et GET pour acceder aux
ressources.
