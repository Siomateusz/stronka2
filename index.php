<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosta Strona PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #007BFF;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            // Pobieranie bieżącej daty i czasu
            $data = date("d-m-Y");
            $czas = date("H:i:s");
        ?>
        <h1>Witaj na mojej stronie!</h1>
        <p>Dziś jest <strong><?php echo $data; ?></strong>.</p>
        <p>Aktualny czas to <strong><?php echo $czas; ?></strong>.</p>
        <p>Miłego dnia, <strong>KOZAK KOLEJNA STRONKA</strong>!</p>
    </div>
</body>
</html>