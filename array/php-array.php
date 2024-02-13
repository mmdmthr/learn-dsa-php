<?php
$startMemory = memory_get_usage();
$array = range(1,100000);
$endMemory = memory_get_usage();
echo ($endMemory - $startMemory) . " bytes\n";

/* $items = 100000;
$startMemory = memory_get_usage();
$array = new SplFixedArray($items);
for ($i = 0; $i < $items; $i++) {
    $array[$i] = $i;
}
$endMemory = memory_get_usage();

$memoryConsumed = ($endMemory - $startMemory) / (1024 * 1024);
$memoryConsumed = ceil($memoryConsumed);
echo "memory = {$memoryConsumed} MB\n";*/
