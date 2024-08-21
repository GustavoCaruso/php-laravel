<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/exer1resp">
        @csrf
        <input type="number" name="valor1" placeholder="valor 1"/>
        <input type="number" name="valor2" placeholder="valor 2"/>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>