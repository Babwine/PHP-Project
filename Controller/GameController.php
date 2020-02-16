<?php

class GameController {
  public $gameList;

  public function getGameList($gameDataFile) {
    $content = file_get_contents($gameDataFile, FILE_USE_INCLUDE_PATH);
    $result  = json_decode($content);

    $this->gameList = $result->games;

    return $this->gameList;
  }

  public function getGameById(int $id) {
    foreach ($this->gameList as $game) {
      if ($game->id == $id) {
        return $game;
      }
    }
    return null;
  }


}

 ?>
