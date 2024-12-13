<?php
include '../util.php';

$left = $right = [];
$totalDistance = 0;

foreach (getInput() as $line) {
    $left[] = substr($line, 0, strpos($line, ' '));
    $right[] = substr($line, strrpos($line, ' ') + 1);
}

sort($left);
sort($right);

for ($i = 0; $i < count($left); $i++) {
    $totalDistance += abs($left[$i] - $right[$i]);
}

echo $totalDistance;