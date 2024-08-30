<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update room</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Style pour centrer le formulaire */
        .container {
            min-height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: beige; 
            padding: 20px; 
        }

        .form-box {
            padding: 30px; 
            background: #ffffff;
            border-radius: 12px; 
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); 
            max-width: 600px; 
            width: 100%; 
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 8px; 
            border: 1px solid #ced4da;
        }

        .btn {
            border-radius: 8px; 
            font-weight: bold;
            padding: 10px; 
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            color: #fff;
        }

        .btn-primary:hover,
        .btn-secondary:hover {
            opacity: 0.9; 
        }

        .btn-block {
            width: 100%;
        }

        .mt-3 {
            margin-top: 1rem; 
        }

        .mt-2 {
            margin-top: 0.5rem; 
        }
        
          
        
    </style>
</head>

<body>
<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h2 class="text-center mb-4">Update</h2>
      <form action="{{route ('rooms.update', $room->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="{{$room->nom}}" required>
        <div class="form-group">
        <label for="nom">Prix</label>
        <input type="text" id="prix" name="prix" value="{{$room->prix}}" required>
        <div class="form-group">
        <label for="nom">Nombre de lits</label>
        <input type="text" id="nombre_lits" name="nombre_lits" value="{{$room->nombre_lits}}" required>
        <div class="form-group">
        <label for="nom">Maximum d'adultes</label>
        <input type="text" id="max_adultes" name="max_adulte" value="{{$room->max_adulte}}" required>
        <div class="form-group">
        <label for="nom">Enfant max autorisé</label>
        <input type="text" id="max_enfants" name="max_enfants" value="{{$room->max_enfants}}" required>
        <div class="form-group">
        <label>Statut </label><br>
        <input type="radio" id="disponible" name="statut" value="1" checked>
        <label for="disponible">Dispo</label>
        <input type="radio" id="non_disponible" name="statut" value="0">
        <label for="non_disponible">Non dispo</label>
        <button type="submit" class="btn btn-primary btn-block mt-3">Update</button>
        <button type="button" class="btn btn-secondary ms-2" onclick="window.location.href='{{ route('rooms.index') }}'">Cancel</button>
      
        </form>
    </div>
  </div>
</div>
</body>