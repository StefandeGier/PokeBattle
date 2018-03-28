<?php

class Charmeleon extends Pokemon {

  public function __construct($name = 0)
  {
      $pokemon = "Charmeleon";
      $energy = new EnergyType(EnergyType::FIRE);
      $weakness = new Weakness(new EnergyType(EnergyType::WATER), 2);
      $resistance = new Resistance(new EnergyType(EnergyType::ELECTRIC), 10);
      $attacks = [new Attack("Head Butt",10),new Attack("Flare",30)];

      parent::__construct($pokemon, $name, $energy, 60, $attacks, $weakness, $resistance);
    }


}
