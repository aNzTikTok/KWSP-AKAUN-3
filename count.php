<?php
$counter_file = $_SERVER['DOCUMENT_ROOT'] . '/kwsp/counter.txt';

$count = @file_get_contents($counter_file);

$count = intval($count) + 1;

file_put_contents($counter_file, $count);

echo $count;
?>
