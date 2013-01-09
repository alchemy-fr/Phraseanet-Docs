Chercher un document
====================

A propos
--------

  Retourne la liste des documents trouvés

  Cette route est dépréciée depuis la version 1.3 en faveur de
  :doc:`search <../Search>`.

  .. code-block:: bash

    /api/v1/records/search/

  ========================== ======
   Informations
  ========================== ======
   Méthode HTTP               POST
   Authentification requise   Oui
  ========================== ======

Paramètres
----------

  ============= =========== ========= =============
   Paramètres    Type        Exemple   Information
  ============= =========== ========= =============
   query         chaîne                La requête de recherche est la même syntaxe que dans Phraseanet, La valeur par défaut est une chaîne égale à "all records"
   bases         tableau               Un tableau d'identifiants de collections. Si aucun identifiant de collection n'est donné, la requête est exécutée sur toute les collections disponibles.
   offset_start  entier         1      Le numéro de la page recherchée (La première page est la page 1)
   per_page      entier         10     Le nombre d'items à retourner
   ord           chaîne                Cette option n'est disponible qu'avec le moteur de recherche "Sphinx". Les valeurs possibles sont "asc" et "desc"
   sort          chaîne                Cette option n'est disponible qu'avec le moteur de recherche "Sphinx". Les valeurs possibles sont "relevance","created_on" et "random".
   record_type   chaîne                Le type de document recherché. Les valeurs disponibles sont "audio", "video", "image", "document" et "flash"
   search_type   entier         0      "0" pour rechercher des documents et "1" pour rechercher des reportages
   stemme        entier         1      Cette option n'est disponible qu'avec le moteur de recherche "Sphinx". "1" pour activer la recherche morphologique
   date_field    chaîne                Sélectionner un champ pour rechercher avec les filtres "date_min" et "date_max"
   date_min      chaîne                La date minimum sous la forme 'd/m/Y' (Le paramètre "date_field" doit être renseigné)
   date_max      chaîne                La date maximum sous la forme 'd/m/Y' (Le paramètre "date_field" doit être renseigné)
   status        tableau               Un tableau qui restreint les documents recherchés aux status donnés
   fields        tableau               un tableau qui restreint le champ de recherche aux champs sélectionnés
  ============= =========== ========= =============

Attribut de la réponse
----------------------

  ================== ================================
   Attribut              Description
  ================== ================================
  offset_start        Le numéro du premier document recherché
  per_page            Le nombre de résultats par page
  available_results   La quantité de résultats disponibles dans la requête. Ce nombre peut être inférieur à celui des résultats disponibles. Le moteur de recherche "Sphinx" limite par défaut le nombre de résultats à 1000. Toutefois, cette limite est paramétrable.
  total_results       Le nombre total des résultats disponibles
  error               Erreur du moteur de recherche sous la forme d'une chaîne si il y a
  warning             Avertissement du moteur de recherche sous la forme d'une chaîne si il y a
  query_time          Le temps d'éxécution de la requête exprimé en secondes
  search_indexes      Les index de recherche utilisés par le moteur de recherche
  results             La liste des enregistrements trouvés
  query               La requête envoyée
  suggestions         La liste des suggestions proposées par le moteur de recherche
  ================== ================================

Exemple de requête
------------------

Rechercher tous les enregistrements qui se trouvent dans la databox 58 et qui ont le status 4 à "on"
ainsi que tous les enregistrements de la databox 52 qui ont le status 5 à "off"

  .. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&status[4][on][]=58&status[5][off][]=52" https://mydomain.tld/api/v1/records/search/

Rechercher tous les enregistrement sur la collection 85:

  .. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&bases[]=85" https://mydomain.tld/api/v1/records/search/

Rechercher les enregistrement qui correspondent à la requête "house" dans les champs "Object" ou "Credit"

  .. code-block:: bash

    curl -v -d "oauth_token=xxxxxxx&fields[]=Objet&fields[]=Credut&query=house" https://mydomain.tld/api/v1/records/search/


Exemple de réponse
------------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "POST /api/v1/records/search/",
            "response_time": "2012-06-29T18:12:19+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "offset_start": 0,
            "per_page": 10,
            "available_results": 1,
            "total_results": 1,
            "error": "",
            "warning": "",
            "query_time": 0.0003,
            "search_indexes": "",
            "suggestions": [],
            "results": [
            {
                "databox_id": 1,
                "record_id": 644,
                "mime_type": "image/jpeg",
                "title": "0050.JPG",
                "original_name": "0050.JPG",
                "updated-on": "2012-06-22T21:22:08+02:00",
                "created_on": "2012-06-22T21:22:08+02:00",
                "collection_id": 2,
                "sha256": "9f44884438cab8ad6a8a557c4101ec866e0af2eb58b890c9c0e9cad385181fb8",
                "thumbnail": {
                "name": "thumbnail",
                "permalink": {
                    "created_on": "2012-06-25T18:05:20+02:00",
                    "id": 2016,
                    "is_activated": true,
                    "label": "0050JPG",
                    "updated_on": "2012-06-25T18:05:20+02:00",
                    "page_url": "http://dev.phrasea.net/permalink/v1/0050JPG/1/644/m466mwxi/thumbnail/view/",
                    "url": "http://dev.phrasea.net/permalink/v1/0050JPG/1/644/m466mwxi/thumbnail/"
                },
                "height": 100,
                "width": 150,
                "filesize": 3436,
                "devices": [
                    "screen"
                ],
                "player_type": "IMAGE",
                "mime_type": "image/jpeg"
                },
                "technical_informations": [
                {
                    "name": "Aperture",
                    "value": 5
                },
                {
                    "name": "CameraModel",
                    "value": "NIKON D700"
                },
                {
                    "name": "Channels",
                    "value": 3
                },
                {
                    "name": "ColorDepth",
                    "value": 8
                },
                {
                    "name": "ColorSpace",
                    "value": "RGB"
                },
                {
                    "name": "FileSize",
                    "value": 3221035
                },
                {
                    "name": "FlashFired",
                    "value": 1
                },
                {
                    "name": "FocalLength",
                    "value": 70
                },
                {
                    "name": "Height",
                    "value": 2832
                },
                {
                    "name": "HyperfocalDistance",
                    "value": 32.616371538043
                },
                {
                    "name": "LightValue",
                    "value": 11.940613708927
                },
                {
                    "name": "MimeType",
                    "value": "image/jpeg"
                },
                {
                    "name": "ShutterSpeed",
                    "value": 0.004
                },
                {
                    "name": "Width",
                    "value": 4256
                }
                ],
                "phrasea_type": "image",
                "uuid": "fc766012-a9c8-49eb-bcbd-c6f5270cb6f5"
            }
            ],
            "query": "recordId=644"
        }
    }
