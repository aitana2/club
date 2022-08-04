<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method = "POST" action = "{{route('iniciar-sesion')}}">
        @esrf
        <div>
            <label for="email">Usuario</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <a href="{{route('registro')}}">Registrarse</a>
        </div>
        <button type="submit">Entrar</button>
    </form>  
    
</body>
</html>