<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Hotel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Style pour centrer le formulaire */
        .container {
            min-height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5; 
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="form-box">
                    <h3 class="text-center mb-4">Update Hotel</h3>
                    <form action="{{ route('hotels.update', $hotel->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" value="{{ $hotel->nom }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ $hotel->description }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-3">Update</button>
                        <button type="button" class="btn btn-secondary btn-block mt-2" onclick="window.location.href='{{ route('hotels.index') }}'">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
