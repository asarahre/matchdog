<x-layout title="Users">
    <p>Dados do user</p>
    @foreach ($user as $us)
    <ul>
        <li>Nome: {{ $us -> name }}</li>
        <li>Email: {{ $us -> email }}</li>
        <li>Senha: {{ $us -> password }}</li>
    </ul>
    @endforeach
</x-layout>
