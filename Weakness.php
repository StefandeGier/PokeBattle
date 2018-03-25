<?php

class Weakness {

  public $energytype;
  public $multiplier ;

  public function __construct($energytype, $multiplier)
  {
    $this->energytype = $energytype;
    $this->multiplier = $multiplier;

  }

  public function __toString() {
      return json_encode($this);
  }

}
