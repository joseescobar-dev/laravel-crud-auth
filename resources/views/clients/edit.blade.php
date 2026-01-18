<x-app-layout>
    <h2>Editar Cliente</h2>

    <form method="POST" action="{{ route('clients.update', $client) }}">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $client->name }}">
        <input type="email" name="email" value="{{ $client->email }}">
        <input type="text" name="phone" value="{{ $client->phone }}">

        <button type="submit">Actualizar</button>
    </form>
</x-app-layout>
