<?php

$classFiles = glob('classes/*.php');
$classes = [];
$instances = [];
foreach ($classFiles as $index =>  $classFile) {
    require $classFile;
    preg_match('/Class\d+/i', $classFile, $matches);
    $className = "random\\$matches[0]";
    $classes[$index] = $className;
    $instances[$index] = new $className();
}

echo sprintf('%d declared classes', count(get_declared_classes()));