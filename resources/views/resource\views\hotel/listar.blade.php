<a href="{{ route('hotel,create') }}">Novo hotel</a>
@foreach ($hotel as $hotel)
    <p>
        {{ $hotel->nome }} - {{ $hotel->cidade }}
        <a href="{{ route('hotel,edit', $hotel)}}">Editar</a>

        <form action="{{ route('hotel,destroy', $hotel)}}"></form>
    method="post">
                @csrf
                @method(delete)
                <button>Excluir</button>
            </form>
    </p>
@endforeach