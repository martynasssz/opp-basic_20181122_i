<?php


/**
 * Transport
 */
class Transport
{
	public $maxSpeed;
	public $registraton;
	public $maxPassengerCount;
	public $maxCargoWeight;

	public function break() {
		echo "I broke<br>";
	}

	public function move_goods() {
		echo "Transporting goods<br>";
	}

	public function signal() {
		echo "signaling.....<br>";
	}
}


