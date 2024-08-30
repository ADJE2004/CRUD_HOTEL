<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOTEL_CRUD</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <style>
        /* Style personnalisé pour centrer le formulaire */
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #0d6efd;
        }

        /* Style pour le conteneur du formulaire */
        .form-box {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 15px; /* Espace entre les champs */
        }

        /* Style pour les labels et inputs */
        .form-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        label {
            margin-bottom: 5px;
            text-align: left;
            width: 100%;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #0d6efd;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .radio-group {
            display: flex;
            gap: 10px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="form-box">
            <form action="{{ route('rooms.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nom">Nom </label>
                    <input type="text" id="nom" name="nom" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="prix">Prix </label>
                    <input type="text" id="prix" name="prix" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="nombre_lits">Nombre de lits </label>
                    <input type="text" id="nombre_lits" name="nombre_lits" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="max_adultes">Maximum d'adultes </label>
                    <input type="text" id="max_adultes" name="max_adulte" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="max_enfants">Enfant maximum autorisé </label>
                    <input type="text" id="max_enfants" name="max_enfants" class="form-control" required>
                </div>

                <div class="form">
                    <label>Statut</label>
                    <div class="radio-group">
                        <input type="radio" id="disponible" name="statut" value="1" checked>
                        <label for="disponible">Disponible</label>
                        <input type="radio" id="non_disponible" name="statut" value="0">
                        <label for="non_disponible">Non disponible</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="hotel_id"> </label>
                    <select id="hotel_id" name="hotel_id" class="form-control" required>
                        @foreach($hotels as $hotel)
                        <option value="{{ $hotel->id }}">{{ $hotel->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn">Envoyer</button>
            </form>
        </div>
    </div>
</body>
</html>
