<?php

class Pikachu extends Pokemon {

  public $pokemon = "Pikachu";
  public $energy = "Lightning";
  //public $name = "Ash zijn Pikachu";
  public $hitpoints = "60";
  public $attacks = array("electricring" => 50, "punch" => 20);
  public $weakness = array("Fire" => 1.5);
  public $resistance = array("Fighting" => 20);

    public function __construct($name = 0)
      {
        parent::__construct($name, $this->pokemon, $this->energy, $this->hitpoints, $this->attacks, $this->weakness, $this->resistance);
      }

      public function getAttacks()
      {
      //  if ($this->attacks == "electricring") {

          /*foreach ($this->attacks as $attack) {
            echo '<h2>' . $attack . '</h2><br>';


          }*/
          //$result = $this->attacks["electricring"] - $this->$hitpoints;

        //  echo $this->attacks["electricring"];
          //echo '<h2>' . $this->hitpoints . '</h2><br>';
          //echo '<h2>' . $this->attacks["electricring"] . '</h2><br>';

          $result = $this->hitpoints - $this->attacks["electricring"];

          echo '<h2>' . $result . '</h2><br>';

          
          //echo $result;
          //echo '<h2>' . $this->attacks["electricring"] . '</h2><br>';
        //}
      }
}
