<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <nav class="navbar navbar-expand-sm ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Trenitalia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarID">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>

                </div>
            </div>
        </div>
    </nav>
    <main class="bg-light">
        <div class="container p-4">

            <table class="table table-bordered">
                <thead>
                    <tr>

                        <th scope="col">Compagnia</th>
                        <th scope="col">Stazione di partenza</th>
                        <th scope="col">Stazione di arrivo</th>
                        <th scope="col">Orario di partenza</th>
                        <th scope="col">Orario di arrivo</th>
                        <th scope="col">Codice</th>
                        <th scope="col">Numero Carrozze</th>
                        <th scope="col">In orario</th>
                        <th scope="col">Cancellato</th>


                    </tr>
                </thead>
                <tbody>
                    @forelse ($trains as $train)
                    <tr>
                        <td>{{$train->azienda}}</td>
                        <td>{{$train->stazione_partenza}}</td>
                        <td>{{$train->stazione_arrivo}}</td>
                        <td>{{$train->orario_partenza}}</td>
                        <td>{{$train->orario_arrivo}}</td>
                        <td>{{$train->codice_treno}}</td>
                        <td>{{$train->numero_carrozze}}</td>
                        <td>{{$train->in_orario == 1 ? "Si" : "No"}}</td>
                        <td>{{$train->cancellato == 1 ? "Si" : "No"}}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9">
                            <h1>nessun treno disponibile</h1>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>




        </div>
    </main>

</body>

</html>