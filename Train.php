<?php

/**
 * Train
 */
class Train extends Transport
{
	
	public $maxWagonCount;

	public function goToDepo() {
		echo "I am going to the depo";
	}
	

	public function signal() {
		echo "Tututtuutututututu....<br>";
	}

}