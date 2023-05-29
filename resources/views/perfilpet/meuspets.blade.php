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

<body class="h-screen w-screen bg-blue-50">
    <x-nav />
    <p>Dados do user</p>
    <ul>
        @foreach ($perfilpet as $perfil)
        <li>

            <a href="/perfil-pet/{{$petlike}}/match/{{ $perfil -> id }}">
                <p>Nome: {{ $perfil -> name }}</p>
                <img class="w-64 h-40" src="{{ asset($perfil->image)}}" alt="Imagem do perfil do pet">
            </a>

        </li>
        @endforeach
    </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</body>

</html>