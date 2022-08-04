<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página privada</title>
</head>
<body>
    <form method = "POST" action = "{{route('validar-registro')}}">
        <h2>Mi area</h2> 
        <a href="{{route('logout')}}">
            <button type="button">Salir</button></a>
    
</body>
</html>