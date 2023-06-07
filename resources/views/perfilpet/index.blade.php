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
    <div class="w-full h-full">
        <x-nav />
        <div class="mySwiper flex h-3/4" navigation="true">
            <swiper-container class="mySwiper flex justify-center w-full h-full" navigation="true">

                @foreach ($perfilpet as $perfil)
                <swiper-slide class="flex h-full">
                    <div class="flex flex-col justify-center">

                        <div class="flex justify-between">
                            <div class="flex text-2xl font-semibold"> {{ $perfil -> name }}</div>
                            <div class="flex font-semibold items-end">{{ $perfil -> breed  }}</div>
                        </div>

                        <img class="w-64 h-40" src="{{ asset($perfil->image)}}" alt="Imagem do perfil do pet">
                        <div class="flex justify-between ">
                            <div class="flex">{{ $perfil -> gender  }}</div>
                            <div class="flex">{{ $perfil -> age  }}</div>
                        </div>
                        <div class="mt-4">{{ $perfil -> bio  }}{{ $perfil -> user_id }}</div>

                        <a class="p-4 w-64 text-center rounded-lg bg-blue-500 mt-8" href="/perfil-pet/{{ $perfil -> id }}">
                            tentar dar match
                        </a>
                    </div>
                </swiper-slide>

                @endforeach

            </swiper-container>


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</body>

</html>