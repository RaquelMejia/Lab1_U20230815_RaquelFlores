<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);

    if ($numero < 0) {
        $resultado = "<p class='error'>Error: El número no puede ser negativo.</p>";
    } elseif ($numero == 0 || $numero == 1) {
        $resultado = "<div id='resultado'>Factorial de $numero = 1</div>";
    } else {
        $factorial = 1;
        for ($i = 2; $i <= $numero; $i++) {
            $factorial *= $i;
        }
        $resultado = "<div id='resultado'>Factorial de $numero = $factorial</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial de un Número</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            margin: 0;
        }
        .container {
            background-color: #88F1E9;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
        }
        input[type="number"], button {
            padding: 10px;
            margin-top: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: #090909;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        h3 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calculadora de Factorial</h2>
        
        <form method="post" action="">
            <label for="numero">Ingrese un número:</label>
            <input type="number" id="numero" name="numero" required>
            <button type="submit">Calcular Factorial</button>
        </form>
        <br>

        <?php
        if (isset($resultado)) {
            echo $resultado;
        }
        ?>
    </div>
</body>
</html>
