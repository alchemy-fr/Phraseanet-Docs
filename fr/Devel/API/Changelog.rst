API Changelog
=============

1.2
---

La version 1.2 de l'API est rétro-compatible avec la version présédente.

- Ajout de la route :doc:`/api/ <V1/Route/Api>`
- Ajout de la route :doc:`/monitor/scheduler/ <V1/Route/monitor/scheduler/>`
- Ajout de la route :doc:`/monitor/phraseanet/ <V1/Route/monitor/phraseanet/>`
- Ajout de la route :doc:`/monitor/tasks/ <V1/Route/monitor/tasks/>`
- Ajout de la route :doc:`/monitor/task/ <V1/Route/monitor/task/>`
- Ajout de la route :doc:`/monitor/task/ <V1/Route/monitor/task/start/>`
- Ajout de la route :doc:`/monitor/task/ <V1/Route/monitor/task/stop/>`

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
