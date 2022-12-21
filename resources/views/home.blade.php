<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <h1>{{ $saluto }} {{ $utente }}</h1>

    @if ($stampa_paragrafo)
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias error, molestiae vel molestias voluptate, at
            ipsa animi, delectus autem omnis quaerat. Laboriosam totam tempore deserunt. Aut eos inventore sunt iure.
        </p>
    @else
        <p>nessun paragrafo</p>
    @endif

    <ul>
        @foreach ($colori as $colore)
            <li> {{ $colore }} </li>
        @endforeach
    </ul>
</body>

</html>
