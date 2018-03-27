<?php

class Charmeleon extends Pokemon {

  public function __construct($name = 0)
  {
      $pokemon = "Charmeleon";
      $energy = new EnergyType(EnergyType::FIRE);
      $weakness = new Weakness(new EnergyType(EnergyType::WATER), 2);
      $resistance = new Resistance(new EnergyType(EnergyType::LIGHTING), 10);
      $attacks = [new Attack("pikapunch",80),new Attack("electricring",40)];

      parent::__construct($pokemon, $name, $energy, 60, $attacks, $weakness, $resistance);
    }


}
