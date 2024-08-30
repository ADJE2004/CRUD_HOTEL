
@section('content')
    <div class="container">

        <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
            <a href="{{ route('hotels.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
@endsection