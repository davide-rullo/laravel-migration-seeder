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
    <nav class="nav justify-content-center  ">
        <a class="nav-link text-white p-4" href="#" aria-current="page">
            <h3>Trenitalia</h3>
        </a>

    </nav>
    <main class="">
        <div class="container p-4">

            <table class="table table-bordered">
                <thead>
                    <tr>

                        <th class="theadrow" scope="col">Compagnia</th>
                        <th class="theadrow" scope="col">Stazione di partenza</th>
                        <th class="theadrow" scope="col">Stazione di arrivo</th>
                        <th class="theadrow" scope="col">Orario di partenza</th>
                        <th class="theadrow" scope="col">Orario di arrivo</th>
                        <th class="theadrow" scope="col">Codice</th>
                        <th class="theadrow" scope="col">Numero Carrozze</th>
                        <th class="theadrow" scope="col">In orario</th>
                        <th class="theadrow" scope="col">Cancellato</th>


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