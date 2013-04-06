<?php

include ('../vendor/autoload.php');

use NlpTools\Random\Distributions\Dirichlet;

$dir = new Dirichlet(1,10);

var_dump(
	$dir->sample()
);
