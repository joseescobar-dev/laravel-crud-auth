<x-app-layout>
    <x-slot name="header">
        <h2>Clientes</h2>
    </x-slot>

    <a href="{{ route('clients.create') }}">Nuevo Cliente</a>

    <ul>
        @foreach($clients as $client)
            <li>
                {{ $client->name }} - {{ $client->email }} - {{ $client->phone }}
                <a href="{{ route('clients.edit', $client) }}">Editar</a>

                <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-app-layout>
