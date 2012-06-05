API Changelog
=============

1.2
---

La version 1.2 de l'API est rétro-compatible avec la version présédente.

- Add route :doc:`/api/ <V1/Route/Api>`
- Add route :doc:`/monitor/scheduler/ <V1/Route/monitor/scheduler/>`
- Add route :doc:`/monitor/phraseanet/ <V1/Route/monitor/phraseanet/>`
- Add route :doc:`/monitor/tasks/ <V1/Route/monitor/tasks/>`
- Add route :doc:`/monitor/task/ <V1/Route/monitor/task/>`
- Add route :doc:`/monitor/task/ <V1/Route/monitor/task/start/>`
- Add route :doc:`/monitor/task/ <V1/Route/monitor/task/stop/>`

1.1
---

Major API upgrade. This version is not fully backward compatible with 1.0. See
the complete :doc:`documentation <V1/Upgrade/1.1>` before upgrading.

  - Change in route :doc:`records/metadatas <V1/Route/Records/Metadatas>`
  - Change in route :doc:`records/setmetadatas <V1/Route/Records/SetMetadatas>`
  - Add route :doc:`records/caption <V1/Route/Records/Caption>`

1.0
---

First stable version of Phraseanet API. The API uses OAuth2 as authentication
and provides GET/POST routes to access ressources.
