<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form method = "POST" action = "{{route('validar-registro')}}">
        @csrf
        <div>
            <label for="email">Usuario</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name">
        </div>
        <button type="submit">Registrarse</button>
    </form>  
    
</body>
</html>