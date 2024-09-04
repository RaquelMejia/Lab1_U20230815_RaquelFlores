<?php
if (isset($_GET['texto'])) {
    $texto = strtolower($_GET['texto']);

    $vocales = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];

    foreach (str_split($texto) as $letra) {
        if (array_key_exists($letra, $vocales)) {
            $vocales[$letra]++;
        }
    }

    $resultado = "<div class='result'><h3>Conteo de vocales:</h3>";
    foreach ($vocales as $vocal => $conteo) {
        $resultado .= "<p>$vocal = $conteo</p>";
    }
    $resultado .= "</div>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Vocales</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            color: #00796b;
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #00796b;
        }
        input[type="text"] {
            padding: 10px;
            width: calc(100% - 22px);
            border: 2px solid #00796b;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            padding: 12px;
            width: 100%;
            background-color: #00796b;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #004d40;
        }
        .result {
            margin-top: 20px;
            background-color: #e0f2f1;
            padding: 20px;
            border-radius: 8px;
            color: #004d40;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Contador de Vocales</h2>
        <form method="GET" action="">
            <label for="texto">Ingrese una cadena de texto:</label>
            <input type="text" id="texto" name="texto" required>
            <input type="submit" value="Contar Vocales">
        </form>

        <?php
        if (isset($resultado)) {
            echo $resultado;
        }
        ?>
    </div>
</body>
</html>
