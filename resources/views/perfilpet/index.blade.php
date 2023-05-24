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
          <div class="block max-w-sm p-6 bg-white border border-red-200 rounded-lg shadow hover:bg-red-100">
                <div class="text-xl">Nome: {{ $perfil -> name }}</div>
                <div class="">Id dono: {{ $perfil -> user_id }}</div>
                <div class="">Raça: {{ $perfil -> breed  }}</div>
                <div class="">age: {{ $perfil -> age  }}</div>
                <!-- <div class="">Image: {{ $perfil -> image  }}</div> -->
                <img class="w-64 h-40" src="{{ asset($perfil->image)}}" alt="Imagem do perfil do pet">
                <div class="">gender: {{ $perfil -> gender  }}</div>
                <div class="">bio: {{ $perfil -> bio  }}</div>
         </div>
            </swiper-slide>
            @endforeach
        </swiper-container>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</body>

</html>
