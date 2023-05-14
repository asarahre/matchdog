<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="/perfil-pet/salvar" method="post">
        <input type="text" id="name" name="name" placeholder="nome do pet" />
        <input type="text" id="breed" name="breed" placeholder="breed" />
        <input type="date" id="age" name="age" placeholder="data nascimento" />
        <input type="text" id="gender" name="gender" placeholder="gender" />
        <input type="file" id="image" name="image" class="btn btn-success" accept="image/png, image/jpeg" multiple />

        <input type="text" id="bio" name="bio" placeholder="bio" />
        {{ csrf_field() }}
        <input type="submit" value="Enviar" />
    </form>
</body>

</html>