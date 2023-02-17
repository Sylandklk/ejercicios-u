<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
    $edad = $_POST["edad"];
    if ($edad >= 18) {
        echo "<p class='puede-votar'>Usted tiene " . $edad . " años y puede votar.</p>";
    } else {
        echo "<p class='no-puede-votar'>Lo siento, usted tiene solo " . $edad . " años y no puede votar todavía.</p>";
    }
    echo ' <a href="index.html">
    <input type="submit" value="Volver" class="btn">
  </a> '
?>