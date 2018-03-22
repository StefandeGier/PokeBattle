<?php

class Pokemon{
//private datgene wat niet echt hoeft geprint te worden

public $name;
public $pokemon;
public $energy;
public $hitpoints;
public $attacks ;
public $weakness;
public $resistance;

  public function __construct($name, $pokemon, $energy,  $hitpoints, $attacks, $weakness, $resistance)
    {
        $this->name = $name;

    }

  public function __toString() {
        return json_encode($this);
    }
}
