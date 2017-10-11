<?php
require __DIR__.'/vendor/autoload.php';
use PhpOffice\PhpWord\PhpWord;

$word = new PhpOffice\PhpWord\PhpWord();

$section1 = $word->AddSection();
$section1->addText("Hola mundo!!",array("size"=>20,"bold"=>true));
$section1->addText("Este es un ejemplo de prueba de la libreria PHPWord.");

$filename = "myfile.docx";
$word->save($filename,"Word2007");
?>