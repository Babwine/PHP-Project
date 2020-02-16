<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Jeu</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<?php
include 'Model/GameModel.php';
include 'Controller/GameController.php';
include 'View/GameView.php';
include 'View/GameListView.php';

$controller = new GameController();
$controller->getGameList("./gameList.json");

$game = $controller->getGameById($_GET['id']);



$view = new GameView($game);

$view->displayGame();



?>

</div>

</body>
</html>
