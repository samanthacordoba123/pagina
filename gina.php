<!DOCTYPE html>
<html lang="es">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Días de la Semana</title>
</head>
<body>
    <h2>Días de la Semana</h2>
    <form method="post" action="">
        <label for="dia">Ingresa el número del día (1 para Lunes, 2 para Martes...): </label>
        <input type="text" id="dia" name="dia">
        <input type="submit" value="Obtener nombre del día">
    </form>

    <?php
    function nombreDiaSemana($dia) {
        if ($dia == 1) {
            return "Lunes";
        } elseif ($dia == 2) {
            return "Martes";
        } elseif ($dia == 3) {
            return "Miércoles";
        } elseif ($dia == 4) {
            return "Jueves";
        } elseif ($dia == 5) {
            return "Viernes";
        } elseif ($dia == 6) {
            return "Sábado";
        } elseif ($dia == 7) {
            return "Domingo";
        } else {
            return "Número de día inválido";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dia = isset($_POST["dia"]) ? (int)$_POST["dia"] : null;

        
        if ($dia >= 1 && $dia <= 7) {
            $nombre_dia = nombreDiaSemana($dia);
            echo "<p>El número $dia corresponde a: $nombre_dia</p>";
        } else {
            echo "<p>Ingresa un número válido de día (1 para Lunes, 2 para Martes, etc.)</p>";
        }
    }
    ?>
</body>
</html>