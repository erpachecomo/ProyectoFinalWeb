<?php

	require_once('Demo.php');

	$objDemo = new Demo;
	$objDemo->setName('r2d2');
	$objDemo->diHola();
	$objDemo->setName(False);
	$objDemo->diHola();
	$objDemo->setName(123);
	$objDemo->diHola();
?>
