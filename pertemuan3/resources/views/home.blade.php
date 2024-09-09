<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="text-center">
            <h1>Selamat Datang di Website</h1>
            <h3>Kapal Lawd</h3>
        </div>

        <div class="row mt-4 justify-content-center">
          
            
            <div style = 'margin-left: 300px' class="col-md-5">
                <a href="/matakuliah" class="btn btn-secondary btn-lg btn-block">Mata Kuliah</a>
                <a href="/profilkayla" class="btn btn-secondary btn-lg btn-block">Profil</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>