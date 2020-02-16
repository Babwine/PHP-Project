# Projet PHP
## Master E-Services


### par Pierre PATTE

Ce dépôt contient tous les fichiers liés au projet à rendre dans le cadre du cours de IFI - PHP.

## Description rapide

L'application est un catalogue e-commerce listant des jeux vidéo. On peut afficher les détails d'un jeu en cliquant dessus.

La liste des jeux est représentée par le contenu du fichier JSON [gameList.json](./gameList.json).

Il existe la page de [catalogue](./index.php) et la page d'un [jeu](./game_details.php) dont l'identifiant est récupéré lors de sa consultation dans le catalogue.

Ainsi, pour tester l'application il suffit d'effectuer la commande :

```
php -S localhost:<port>
```

Et d'ouvrir dans un navigateur l'URL `localhost:<port>`.

# Description technique

Il existe un contrôleur [GameController](./Controller/GameController.php).

Il existe également un modèle [GameModel](./Model/GameModel.php).

Enfin, il existe deux vues, [GameListView](./View/GameListView.php) et [GameView](./View/GameView.php), la première étant celle utilisée par le catalogue, et la seconde pour la page d'un jeu.

L'application suit donc un pattern MVC très basique.

Tout le style utilisé est disponible dans le fichier [style.css](./style.css).
