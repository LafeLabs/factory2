<?php

$path = $_POST['path'];

$jsontemplate = file_get_contents("json/currentjson.txt");

$codetemplate = file_get_contents("javascript/topfunctions.txt");

mkdir("curves/".$path);
    mkdir("curves/".$path."/"."json");
    mkdir("curves/".$path."/"."svg");
    mkdir("curves/".$path."/"."javascript");
    
$file = fopen("curves/".$path."/"."json/currentjson.txt","w");// create new file with this name
fwrite($file,$jsontemplate); //write data to file
fclose($file);  //close file

$file = fopen("curves/".$path."/"."javascript/topfunctions.txt","w");// create new file with this name
fwrite($file,$codetemplate); //write data to file
fclose($file);  //close file


?>