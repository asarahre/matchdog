<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <body>
        <p>Dados contato</p>
        <ul>
            <li>Nome: {{ $nome }}</li>
            <li>Email: {{ $email }}</li>
            <li>Enderço: {{ $endereco }}</li>
            <li>Data nascimento: {{ $data_nascimento }}</li>
            <li>Senha: {{ $senha }}</li>
        </ul>
    </body>
</html>
