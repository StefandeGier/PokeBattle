<?php

require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';
require 'Attack.php';
require 'EnergyType.php';
require 'Weakness.php';
require 'Resistance.php';

//EnergyType

//$energytype = new EnergyType('fire');
//print_r('<pre>'. $energytype . '</pre>');

//Attack
$powerkick = new Attack('powerkick', '120');
print_r('<pre>'. $powerkick . '</pre>');

//pokemons
$pikachu = new Pikachu('Lisa');
$charmeleon = new Charmeleon('Stefan zijn Charmeleon');

print_r('<pre>'. $pikachu . '</pre>');

print_r('<pre>'. $charmeleon . '</pre>');


echo "dit zijn de hitpoints:";



//getAttacks($test);
