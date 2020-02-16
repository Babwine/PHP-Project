<?php

class GameController {
  private $gameDataFile;

  public function __construct($gameDataFile) {
    $this->gameDataFile = $gameDataFile;
  }

  public function getGameList() {
    $content = file_get_contents($this->gameDataFile, FILE_USE_INCLUDE_PATH);
    $result  = json_decode($content);

    $gameList = $result->games;

    $gameModelList = array();
    foreach ($gameList as $game) {
      $model = new GameModel($game->id, $game->name, $game->imageUrl, $game->platform, $game->price);
      array_push($gameModelList, $model);
    }
    $gameListView = new GameListView($gameModelList);

    $gameListView->displayGameList();
  }

  public function getGameById(int $id) {
    $content = file_get_contents($this->gameDataFile, FILE_USE_INCLUDE_PATH);
    $result  = json_decode($content);

    $gameList = $result->games;

    $theGame = null;
    foreach ($gameList as $game) {
      if ($game->id == $id) {
        $theGame = $game;
      }
    }

    if ($theGame != null) {
      $gameModel = new GameModel($theGame->id, $theGame->name, $theGame->imageUrl, $theGame->platform, $theGame->price);
      $gameView = new GameView($gameModel);
      $gameView->displayGame();
    }
  }


}

 ?>
