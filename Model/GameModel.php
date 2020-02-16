<?php

class GameModel {

  public $id;
  public $name;
  public $imageUrl;
  public $platform;
  public $price;

  public function __construct(
    int $id,
    string $name,
    string $imageUrl,
    string $platform,
    float $price
  )
  {
    $this->id = $id;
    $this->name = $name;
    $this->imageUrl = $imageUrl;
    $this->platform = $platform;
    $this->price = $price;
  }
}

?>
