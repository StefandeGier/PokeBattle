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
$pikachu = new Pikachu('Lisa haar Pikachu');
$charmeleon = new Charmeleon('Stefan zijn Charmeleon');



print_r('<pre>'. $pikachu . '</pre>');

print_r('<pre>'. $charmeleon . '</pre>');
echo "HP:<br>";
//echo doAttack();
echo "Charmeleon attack op Pikachu";
$charmeleon->doAttack($charmeleon->attacks[1]->hitpoints,$pikachu);

echo "Pikachu attack op Charmeleon";
$pikachu->doAttack($pikachu->attacks[1]->hitpoints,$charmeleon);
