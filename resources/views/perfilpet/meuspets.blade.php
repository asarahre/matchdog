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
    <title>Selecione seu pet</title>
</head>

<body class="h-screen min-w-screen bg-blue-50">
    <x-nav />
    <p class="p-8">Selecione um pet</p>
    <div class="flex flex-col items-center">
        @foreach ($perfilpet as $perfil)
        <a class="flex flex-col w-36 h-36 rounded-2xl justify-center items-center mt-4 hover:bg-gray-200" href="/perfil-pet/{{$petlike}}/match/{{ $perfil -> id }}">
            <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $perfil -> name }}</h5>
            <img class="w-24 h-24 mb-3 rounded-full  shadow-lg" src="{{ asset($perfil->image)}}" alt="Imagem do perfil do pet" />
        </a>
        @endforeach
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</body>

</html>