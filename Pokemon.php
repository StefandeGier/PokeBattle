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
      $tEnergy = $target->weakness->energytype->name;

      $damage = $attack->hitpoints;

        //checks if weakness is activated
        if ($energy == $tenergy) {
         $damage = $damage * $target->weakness->multiplier;
        // echo "<br> hij is uitgelopen in weakness";

         //checks if resistance is activated
        }
        if ($energy == $target->resistance->energytype->name) {
          $damage = $damage - $target->resistance->value;
          //echo "<br> hij is uitgelopen in resistance";
        }
        //calculate totall
        $target->resolveDamage($damage);
          /*echo "<br> hij is uitgelopen";
          echo '<br>'.$energy;
          echo '<br>'.$target->resistance->energytype->name;
          echo $energy;
          echo $tenergy;*/
          echo '<h2>' . $hpresult . '</h2>';
    }

    public function resolveDamage($damage) {
      $this->hitpoints = $this->hitpoints - $damage;
    }

      public function __toString() {
          return json_encode($this);
      }


}
