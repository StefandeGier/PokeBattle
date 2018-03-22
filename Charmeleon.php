<?php

class Charmeleon extends Pokemon {

  public $pokemon = "Charmeleon";
  public $energy = "Fire";
  public $hitpoints = "60";
  public $attacks = array("Head Butt" => 10, "Flare" => 30);
  public $weakness = array("Water" => 2);
  public $resistance = array("Lightning" => 10);

    public function __construct($name = 0)
      {
        parent::__construct($name, $this->pokemon, $this->energy, $this->hitpoints, $this->attacks, $this->weakness, $this->resistance);
      }

}
