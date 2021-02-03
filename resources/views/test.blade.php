<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>TEST</h1>
    <h1>      <?= $variable; ?>      </h1> <!-- la variable la coge desde el segundo argumento #nota5 !-->
    <h1>{{ $variable }}</h1>
    <h1>{ !! $variable !! }</h1> <!-- además de hacer el script del GET (nota5) imprime el código { !! $variable !! } -->
</body>
</html>