<?php

require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';

$pikachu = new Pikachu('Ash zijn Pikachu');
$charmeleon = new Charmeleon('Stefan zijn Charmeleon');

//print_r('<pre>'. $pikachu . '</pre>');

//print_r('<pre>'. $charmeleon . '</pre>');


print_r('<pre>'. $pikachu . '</pre>');



$pikachu->getAttacks();
