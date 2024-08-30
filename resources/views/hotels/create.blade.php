<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOTEL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Style personnalisé pour centrer le formulaire */
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; 
            background-color: #0d6efd;
        }
        .a{
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
        }

        /* Style pour réduire la largeur des champs et du bouton */
        .form-control, .btn {
            max-width: 100%; 
        }
        .form-control-sm {
            max-width: 100%; 
            box-sizing: border-box; 
        }
        .btn-block {
            max-width: 100%; 
        }
    </style>
</head>
<body>
<div class="form">
    <h1 class="a">WELCOME HERE!!!</h1 >
    <div class="form-container">
        <div class="form-box">
            <h1 class="text-center mb-4">Ajouter un Hôtel</h1>
            <form action="{{ route('hotels.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control form-control-sm" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control form-control-sm" id="description" name="description" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
            </form>
        </div>
    </div>
</div>
  
</body>
</html>
