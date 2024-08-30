
@section('content')
    <div class="container">

        <form action="{{ route('rooms.destroy', $room->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
            <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
@endsection