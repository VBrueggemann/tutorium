<?php
include "Tier.php";
include "Huhn.php";
include "Hund.php";

$huhn = new Huhn('yellow');

$hund = new Hund();

echo $huhn->getFarbe();
