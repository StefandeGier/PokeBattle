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

    public function doAttack($attack, $target)
    {
      //define variables
      $hpadd = 0;
      $energy = $this->energy->name;
      $tenergy = $target->weakness->energytype->name;

        //checks if weakness is activated
        if ($energy == $tenergy) {
         $attack = $attack * $target->weakness->multiplier;
        // echo "<br> hij is uitgelopen in weakness";

         //checks if resistance is activated
        }
        if ($energy == $target->resistance->energytype->name) {
          $hpadd = $target->resistance->value;
          //echo "<br> hij is uitgelopen in resistance";
        }
        //calculate totall
        $hp = $target->hitpoints - $attack;
        $hpresult = $hp + $hpadd;
          /*echo "<br> hij is uitgelopen";
          echo '<br>'.$energy;
          echo '<br>'.$target->resistance->energytype->name;
          echo $energy;
          echo $tenergy;*/
          echo '<h2>' . $hpresult . '</h2>';
    }



      public function __toString() {
          return json_encode($this);
      }


}
