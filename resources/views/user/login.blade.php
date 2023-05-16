<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Login </title>
</head>

<body>
    <form action="/user/login" method="post">
        <input type="email" id="email" name="email" placeholder="email" />
        <input type="password" id="password" name="password" placeholder="senha" />
        {{ csrf_field() }}
        <input type="submit" value="Login" />
    </form>

    <a href="{{ route('usercriar') }}">Criar cadastro</a>

</body>

</html>