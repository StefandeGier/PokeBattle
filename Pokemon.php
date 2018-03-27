<?php

class Pokemon{

public $pokemon;
public $name;
public $energy;
public $hitpoints;
public $attacks ;
public $weakness;
public $resistance;

  public function __construct($pokemon, $name, $energy, $hitpoints, $attacks, $weakness, $resistance)
    {
        $this->pokemon = $pokemon;
        $this->name = $name;
        $this->energy = $energy;
        $this->hitpoints = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;

    }



      public function __toString() {
          return json_encode($this);
      }


}

  function doAttack($par1, $par2)
  {
    $result = "$par1 $par2";
    return $result;
  }
