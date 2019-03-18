<?php

require 'Superhero.php';
require 'Avenger.php';

$spiderman =  new Superhero('Spider-Man', 'Male', 'Spiderfriends', 'With great power comes great responsibility!');

echo'<pre>';
print_r( $spiderman);

$spiderman->sayOneliner();

$thor = new Avenger('Thor', 'Male', 'For Asgard!');
$thor->sayOneliner();

print_r('<pre>' . $thor . '</pre>');
