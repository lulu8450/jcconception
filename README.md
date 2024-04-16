## Installation
Téléchargez le projet avec la commande :

    git clone https://github.com/lulu8450/jcconception.git

Modifier le .env pour la bdd

Et exécutez les commandes suivantes :

    composer install 
    composer prepare
    symfony console d:m:m

    <!-- Used to populate the database with initial data. -->
    symfony console doctrine:fixture:load

Et lancer le serveur avec :

symfony server:start

Rendez vous sur http://localhost:8000 pour accéder au projet.

## Testez
Pour pouvoir tester le projet, vous possédez deux utilisateurs :

Un utilisateur administration : 
Username : admin
Mot de passe : adminadmin

Et un utilisateur normal :
Username : test
Mot de passe : testtest
