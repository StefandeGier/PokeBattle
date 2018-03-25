<?php

/**
 *
 */
class EnergyType
{

  const FIRE = 'Fire';
  const ICE = 'Ice';
  const ELECTRIC = 'Electric';


  public $name;

  function __construct($name)
  {
    $this->name = $name;
  }

  public function __toString() {
      return json_encode($this);
  }
}
