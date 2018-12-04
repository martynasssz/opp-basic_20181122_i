<?php

include 'Transport.php';
include 'Ship.php';
include 'Train.php';

$t = new Transport();
$myNewShip= new Ship();

$myNewShip->break();
$myNewShip->signal();


$goodTrain = new Train();
$goodTrain->signal();

