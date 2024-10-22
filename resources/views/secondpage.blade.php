<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <button class="btn btn-primary"><a class="nav-link fw-bold" href="{{ route('home') }}">Home</a></button>
            </li>
        </ul>
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-4 mb-5">
                    {{ $titolo }}
                </h1>
            </div>
        </div>
        <div class="row">
            @foreach ($charactersArray as $charactersItem)
            <div class="col-md-4"> <!-- Bootstrap col-4 per avere 3 card per riga -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $charactersItem['name'] }}</h5>
                        <p class="card-text">
                            <strong>Role:</strong> {{ $charactersItem['role'] }} <br>
                            <strong>Team:</strong> {{ $charactersItem['team'] }} <br>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>
