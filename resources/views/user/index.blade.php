<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <p>Dados do user</p>
    @foreach ($user as $us)
    <ul>
        <li>Nome: {{ $us -> name }}</li>
        <li>Email: {{ $us -> email }}</li>
        <li>Senha: {{ $us -> password }}</li>
    </ul>
    @endforeach
</body>

</html>