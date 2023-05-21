<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>

    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        swiper-container {
            width: 100%;
            height: 100%;
        }

        swiper-slide {
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <title>Document</title>
</head>

<body class="h-screen w-screen bg-blue-50">
    <x-nav />
    <p>Dados do user</p>
    <div class="mySwiper" navigation="true">
        <swiper-container class="mySwiper" navigation="true">
            @foreach ($perfilpet as $perfil)
            <swiper-slide>
                <li>Nome: {{ $perfil -> name }}</li>
                <li>Id dono: {{ $perfil -> user_id }}</li>
                <li>Raça: {{ $perfil -> breed  }}</li>
                <li>age: {{ $perfil -> age  }}</li>
                <li>gender: {{ $perfil -> gender  }}</li>
                <li>bio: {{ $perfil -> bio  }}</li>
                <li>Image: {{ $perfil -> imagedecode  }}</li>
                <img class="w-64 h-40" src="{{ asset($perfil->image)}}" alt="Imagem do perfil do pet">
            </swiper-slide>
            <swiper-slide>
                <li>Nome: {{ $perfil -> name }}</li>
                <li>Id dono: {{ $perfil -> user_id }}</li>
                <li>Raça: {{ $perfil -> breed  }}</li>
                <li>age: {{ $perfil -> age  }}</li>
                <li>gender: {{ $perfil -> gender  }}</li>
                <li>bio: {{ $perfil -> bio  }}</li>
                <li>Image: {{ $perfil -> imagedecode  }}</li>
                <img class="w-64 h-40" src="{{ asset($perfil->image)}}" alt="Imagem do perfil do pet">
            </swiper-slide>

            @endforeach
        </swiper-container>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</body>

</html>
