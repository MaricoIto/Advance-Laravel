<?php
$date = new DateTime();
echo $date->modify('-1 seconds')->format('Y-m-d H:i:s');

$date = new DateTime();
echo $date->modify('1 seconds')->format('Y-m-d H:i:s');
