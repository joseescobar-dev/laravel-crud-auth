<x-app-layout>
    <h2>Nuevo Cliente</h2>

    <form method="POST" action="{{ route('clients.store') }}">
        @csrf

        <input type="text" name="name" placeholder="Nombre">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="phone" placeholder="Teléfono">

        <button type="submit">Guardar</button>
    </form>
</x-app-layout>
