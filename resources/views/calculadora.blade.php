<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>hello world</h1>
    <form action="/calcular" method="POST">
        @csrf
        <input type="number" placeholder="Número 1" name="num1">
        <input type="text" placeholder="Operador" name="operador">
        <input type="number" placeholder="Número 2"name="num2">
        <button type="submit" >Calcular</button>


    </form>
</body>
</html