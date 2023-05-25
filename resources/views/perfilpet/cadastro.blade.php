<x-layout title="Cadastrar Perfil Pet">
    <div class="h-screen w-screen bg-blue-50">

        <section class=" w-full h-full bg-blue-50 ">
            <div class="flex flex-col items-center justify-center lg:py-0">

                <h1 class="text-xl p-4 font-semibold leading-tight tracking-tight text-gray-700 md:text-2xl">
                    Cadastre seu pet
                </h1>
                <form action="/perfil-pet/salvar" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                        <input type="text" name="name" id="name" class="bg-blue-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:outline-none focus:ring focus:ring-blue-300 w-full p-2 " required="">
                    </div>
                    <div class="mt-4">
                        <label for="breed" class="block mb-2 text-sm font-medium text-gray-900">Raça</label>
                        <input type="text" name="breed" id="breed" class="bg-blue-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:outline-none focus:ring focus:ring-blue-300 w-full p-2 " required="">
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="mt-4">
                            <label for="age" class="block mb-2 text-sm font-medium text-gray-900">Idade</label>
                            <input type="date" name="age" id="age" class="bg-blue-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:outline-none focus:ring focus:ring-blue-300 w-full p-2 " required="">
                        </div>
                        <div class="mt-4">
                            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900">Gênero</label>
                            <select id="gender" name="gender" class="bg-blue-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:outline-none focus:ring focus:ring-blue-300 w-full p-2 ">
                                <option selected>Escolha um sexo</option>
                                <option value="Macho">Macho</option>
                                <option value="Fêmea">Fêmea</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Selecione uma foto</label>
                        <input type="file" id="image" name="image" accept="image/png, image/jpeg" class="block cursor-pointer bg-blue-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:outline-none focus:ring focus:ring-blue-300 w-full p-2 " required="">

                    </div>
                    <div class="mt-4">
                        <label for="bio" class="block mb-2 text-sm font-medium text-gray-900">Bio</label>
                        <textarea id="bio" name="bio" class="w-full p-2 text-sm text-gray-900 bg-blue-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>

                    </div>

                    <button type="submit" class="w-full mt-4 text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-700 font-medium rounded-lg text-sm px-5 py-2 text-center mr-2 mb-2">
                        Cadastrar
                    </button>

                    {{ csrf_field() }}

                </form>
            </div>
        </section>
    </div>
</x-layout>