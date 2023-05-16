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
    @foreach ($perfilpet as $perfil)
    <ul>
        <li>Nome: {{ $perfil -> name }}</li>
        <li>Id dono: {{ $perfil -> user_id }}</li>
        <li>Raça: {{ $perfil -> breed  }}</li>
        <li>age: {{ $perfil -> age  }}</li>
        <li>gender: {{ $perfil -> gender  }}</li>
        <li>bio: {{ $perfil -> bio  }}</li>
        <li>Image: {{ $perfil -> imagedecode  }}</li>
        <img src="{{ asset($perfil->image)}}" alt="Imagem do perfil">

    </ul>
    @endforeach
</body>

</html>