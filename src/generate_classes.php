<?php
declare(strict_types=1);

$classnamePattern = "Class%d";
$filepathPattern = 'classes/%s.php';
$classTemplate = str_replace('TemplateClass', '%s', file_get_contents('TemplateClass.php'));

for ($i = 1; $i < 5000; ++$i) {
    $classname = sprintf($classnamePattern, $i);
    $filename = sprintf($filepathPattern, $classname);

    file_put_contents($filename, sprintf($classTemplate, $classname));
}