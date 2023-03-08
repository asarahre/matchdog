<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <body>
        <form action="/contato" method="post">
            <input type="text" id="nome" name="nome" placeholder="nome" />
            <input type="email" id="email" name="email" placeholder="email" />
            <input
                type="date"
                id="data_nascimento"
                name="data_nascimento"
                placeholder="data nascimento"
            />
            <input
                type="text"
                id="endereco"
                name="endereco"
                placeholder="endereco"
            />
            <input
                type="password"
                id="senha"
                name="senha"
                placeholder="senha"
            />
            {{ csrf_field() }}
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>
