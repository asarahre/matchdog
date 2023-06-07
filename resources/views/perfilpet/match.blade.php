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
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body class="h-screen min-w-screen bg-blue-50">
    <x-nav />
    <div class="flex justify-center">
        <lottie-player class="absolute inset-0" src="https://assets1.lottiefiles.com/packages/lf20_ahrbr631.json" background="transparent" speed="1" loop autoplay></lottie-player>
    </div>

    <div class="flex flex-col items-center">
        <div class="text-2xl">Deu metch</div>
        <div>Entre em contato com {{ $perfilpet->user->name}} pelo email {{ $perfilpet->user->email}}</div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</body>

</html>