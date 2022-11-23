<?php

// Escritura de archivos o crear un archivo

$nombreArchivo = "ejercicio39.txt";
$contenido = "Hola mundo";

// Archivo a crear
$archivo = fopen($nombreArchivo, "w");

// Escribir en el archivo
fwrite($archivo, $contenido);
fclose($archivo);
