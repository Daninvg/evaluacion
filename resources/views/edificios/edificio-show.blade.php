<x-mi-layout>
    <h1>Detalles del Edificio: {{ $edificio->nombre }}</h1>
    <p><strong>Número de Pisos:</strong> {{ $edificio->niveles }}</p>

    <ul>
        @foreach ($edificio->aulas as $aula)
            <li>
                Número: {{ $aula->numero }} || Capacidad: {{ $aula->capacidad }}
                <a href="{{ route('aula.edit', $aula->id) }}" class="btn btn-warning btn-sm">Editar</a>
            </li>
        @endforeach
    </ul>
    
    <form action=" {{ route('edificio.crearAula', $edificio) }} " method="POST">
    @csrf
         <div>
            <label for="numero">Número de Aula:</label>
            <input type="text" id="numero" name="numero" required>
        </div>
        <div>
            <label for="capacidad">Capacidad:</label>
            <input type="number" id="capacidad" name="capacidad" required>
        </div>
        <button type="submit">Crear Aula</button>
    </form>
</x-mi-layout>