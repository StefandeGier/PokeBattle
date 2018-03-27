<?php

class Pikachu extends Pokemon {

    public function __construct($name = 0)
    {
        $pokemon = "Pikachu";
        $energy = new EnergyType(EnergyType::ELECTRIC);
        $weakness = new Weakness(new EnergyType(EnergyType::FIRE), 1.5);
        $resistance = new Resistance(new EnergyType(EnergyType::FIGHTING),20);
        $attacks = [new Attack("pikapunch",80),new Attack("electricring",40)];

        parent::__construct($pokemon, $name, $energy, 60, $attacks, $weakness, $resistance);
      }


}
