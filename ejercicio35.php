<?php

//consumir una api 

$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

$opciones = array("ssl" => array(
    "verify_peer" => false,
    "verify_peer_name" => false,
)); // desactiva compatibilidad para poder leer la informacion

$respuesta = file_get_contents($url, false, stream_context_create($opciones)); // devuelve un string

$objRespuesta = json_decode($respuesta); // devuelve un objeto

// print_r($objRespuesta);


foreach ($objRespuesta->list as $video) {
    // echo $video->title . "<br>";
    // echo $video->channel . "<br>";
}


?>

<!-- //Lista html -->
<ul>
    <?php foreach ($objRespuesta->list as $video) : ?>
        <li>
            <h3><?php echo $video->title; ?></h3>
            <p><?php echo $video->channel; ?></p>
        </li>
    <?php endforeach; ?>