<?php

// echo $BaseDir;

// function registrar($txt){
//     $BaseDir = getcwd() . '\registro';
//     $File = fopen("{$BaseDir}/registro.txt", "a+");
//     fwrite($File, $txt);
//     fclose($File);
// }
// registrar("Francisco Assis2 \r\nfrancisco@webfr.com.br\r\nSão Paulo\r\n");

$BaseDir = getcwd() . '\registro';
$File = fopen("{$BaseDir}/registro.txt", "a+");
$txt = "Francisco Assis2 \r\nfrancisco@webfr.com.br\r\nSão Paulo\r\n";
fwrite($File, $txt);
fclose($File);

$File = "{$BaseDir}/registro.txt";
$File = file($File);
var_dump($File);


