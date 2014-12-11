Activer la réception de documents par FTP
=========================================

La réception de documents sur des serveurs de fichiers joignables par FTP est
une option de paramétrage dans Phraseanet.
Pour la rendre disponible auprès d'utilisateurs, il faut l'activer.

Activer l'export FTP
--------------------

Authentifier comme administrateur...

* Se rendre dans la rubrique Paramétrage de l'Admin
* A la section Export FTP, placer le bouton radio sur la position *True*

L'option **Activer l'export FTP** pour les utilisateurs permet de rendre
disponible l'export par FTP à tous les utilisateurs. Activer cette option si
souhaitée.

* Valider les modifications de paramétrage en soumettant le formulaire


Créer une tâche d'export FTP
----------------------------

Cette tâche est destinée à lancer à intervalle régulier les transferts FTP
contenus dans une file d'attente.

* Se rendre à la rubrique Gestionnaire de tâches de l'Admin
* Créer et paramétrer une tâche FTP Push
* Démarrer cette tâche


Utilisation de l'export par FTP
-------------------------------

L'activation de l'option de paramétrage ajoute un onglet FTP dans la fenêtre
d'export présentée aux utilisateurs qui en bénéficient.

* Renseigner les paramètres de connexion dans le formulaire d'export FTP

Ou bien

* Utiliser un préréglage préalablement édité dans la section Serveur FTP des
  :doc:`préférences du compte utilisateur<../../User/Manuel/MenuPhraseanet>`

Un bouton Essayer permet de tester la connexion au serveur FTP.
Le bouton Envoyer permet d'envoyer les fichiers vers le serveur distant.

