<?php

//Formulario

$txtNombre = "";
$rdgLenguaje = "";

$chkphp = "";
$chkhtml = "";
$chkcss = "";

$lsAnime = "";

$txtComentario = "";

if ($_POST) {
    $txtNombre = (isset($_POST["txtNombre"])) ? $_POST["txtNombre"] : "";
    $rdgLenguaje = (isset($_POST["lenguaje"])) ? $_POST["lenguaje"] : "";

    $chkphp = (isset($_POST["chkphp"]) == "si") ? "cheked" : "";
    $chkhtml = (isset($_POST["chkhtml"]) == "si") ? "cheked" : "";
    $chkcss = (isset($_POST["chkcss"]) == "si") ? "cheked" : "";

    $lsAnime = (isset($_POST["lsAnime"])) ? $_POST["lsAnime"] : "";

    $txtComentario = (isset($_POST["txtComentario"])) ? $_POST["txtComentario"] : "";
    // instruccion de insertar
    //rutina de algún cálculo
    // Aqui se pueden manipular los valores del formulario
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <!-- ver en pantalla -->
    <?php if ($_POST) { ?>
        <strong>Hola</strong>: <?php echo $txtNombre; ?>
        <br>
        <strong>Tu lenguaje es: <?php echo $rdgLenguaje; ?> </strong>
        <br>
        <strong>Estas aprendiendo: </strong>
        <?php if ($chkphp == "cheked") { ?>
            <br>
            <strong> -PHP</strong>

        <?php } ?>

        <?php if ($chkhtml == "cheked") { ?>
            <br>
            <strong> -HTML</strong>

        <?php } ?>

        <?php if ($chkcss == "cheked") { ?>
            <br>
            <strong> -CSS</strong>

        <?php } ?>
        <br>
        <strong>Tus series favoritas son:</strong>
        <br>
        <?php echo $lsAnime; ?>
    <?php } ?>
    <br>
    <strong>Tu Comentario es :</strong>
    <?php echo $txtComentario; ?>
    <br>

    <form action="ejercicio31.php" method="post">

        Nombre: <br>
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
        <br>
        ¿Te gusta?: <br>
        <!-- Radio buttons -->
        <br>php: <input type="radio" <?php echo ($rdgLenguaje == "php") ? "checked" : ""; ?> name="lenguaje" value="php" id=""><br>
        <br>html: <input type="radio" <?php echo ($rdgLenguaje == "html") ? "checked" : ""; ?> name="lenguaje" value="html" id=""><br>
        <br>css: <input type="radio" <?php echo ($rdgLenguaje == "css") ? "checked" : ""; ?> name="lenguaje" value="css" id=""><br>
        <br>

        <!-- checkbox -->

        Estas aprendiendo...
        <br> php:<input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="si" id="">
        <br> html:<input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="si" id="">
        <br> css<input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="si" id="">
        <br>



        <!-- select option  -->
        <br>
        ¿Qué anime te gusta?...
        <select name="lsAnime" id="">
            <option value="">Ninguna serie</option>
            <option value="naruto" <?php echo ($lsAnime == "naruto") ? "selected" : ""; ?>>Naruto</option>
            <option value="dragonball" <?php echo ($lsAnime == "dragonball") ? "selected" : ""; ?>>Dragon Ball</option>
            <option value="onepiece" <?php echo ($lsAnime == "onepice") ? "selected" : ""; ?>>One Piece</option>
        </select>
        <br>

        <!-- textarea -->
        ¿Tienes alguna duda? <br>
        <textarea name="txtComentario" id="" cols="30" rows="10">
        <?php echo $txtComentario; ?>
        </textarea>
        <br>
        <input type="submit" value="Enviar información">
    </form>
</body>

</html>