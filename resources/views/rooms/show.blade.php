<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails Chambre</title>
    <style>
        .container-xl {
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .card {
            max-width: 600px;
            width: 100%;
            margin-top: 20px;
            border: none;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            background: #ffffff;
        }

        .card-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .card-text {
            margin: 0;
            padding: 8px;
            border-radius: 8px;
            border: 1px solid #ced4da;
            background-color: #f8f9fa;
        }

        .btn {
            border-radius: 8px;
            font-weight: bold;
            padding: 10px;
            color: #fff;
            border: none;
            cursor: pointer;
            display: inline-block;
            margin-top: 10px;
            text-align: center;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container-xl">
        <div class="card">
            <h2 style="text-align: center; padding-top: 10px;">Détails d'une chambre</h2>
            <div class="card-body">
                <div>
                    <p class="label">Nom </p>
                    <p class="card-text">{{ $room->nom }}</p>
                </div>
                <div>
                    <p class="label">Prix </p>
                    <p class="card-text">{{ $room->prix }}</p>
                </div>
                <div>
                    <p class="label">Nombre de lits </p>
                    <p class="card-text">{{ $room->nombre_lits }}</p>
                </div>
                <div>
                    <p class="label">Max d’adultes </p>
                    <p class="card-text">{{ $room->max_adulte }}</p>
                </div>
                <div>
                    <p class="label">Enfants max </p>
                    <p class="card-text">{{ $room->max_enfants }}</p>
                </div>
               
                <div>
                    <p class="label">Statut </p>
                    <p class="card-text">{{ $room->statut }}</p>
                </div>
                <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Retour</a>
                <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-primary">Update</a>

                <form action="{{ route('rooms.destroy', $room->id) }}" method="post" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
