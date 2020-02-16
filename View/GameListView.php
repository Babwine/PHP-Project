<?php

class GameListView {
  public $gameModelList;

  public function __construct($gameModelList) {
    $this->gameModelList = $gameModelList;
  }

  public function displayGameList() {
    echo "<h1 class='title-home'>Liste des jeux</h1>";
    echo "<div id='gameList'>";
    foreach ($this->gameModelList as $game) {
      echo "<a href='game_details.php?id=$game->id'>";
        echo "<div class='game'>";
          echo "<img class='game-img' src='$game->imageUrl' alt='$game->name'/>";

          echo "<div class='game-content'>";

            echo "<h2 class='game-name'>$game->name</h2>";
            echo "<p class='game-price'>Prix : $game->price"."€</p>";

          echo "</div>";

        echo "</div>";
      echo "</a>";
    }

    echo "</div>";

  }

}

?>
