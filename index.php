<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hoja de Vida PHP</title>
</head>
<body>
    <?php
    $nombre ="Daniel Ramirez";
    $profesiòn ="Ingeniero De Sistemas";
    $edad = 18;
    $habilidades = [
    "HTML",
    "CSS",
    "JAVA",
    "C#",
    "JavaScript",

    ];
    ?>
    <h1><?php echo $nombre ?></h1>
    <h2><?php echo $profesiòn ?></h2>
    <p><?php echo "Soy " . $nombre ." y soy ". $profesiòn  ?></p>
    <?php if ($edad >= 18):?>
    <p>Disponible para trabajar</p>
    <?php else: ?>
        <p>Menor de edad - No puede trabajar</p>
        <?php endif; ?>
</body>
</html>