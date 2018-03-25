<?php

class Resistance {

  public $energytype;
  public $value;

  public function __construct($energytype, $value)
  {
    $this->energytype = $energytype;
    $this->value = $value;
  }

  public function __toString() {
      return json_encode($this);
  }

}
