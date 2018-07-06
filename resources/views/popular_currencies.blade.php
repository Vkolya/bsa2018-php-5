<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Popular currencies</title>
    </head>
    <body>
        <h1>Popular currencies</h1>
        <ul>
            @foreach ($currencies as $currency)
            <li><img src="{{ $currency->getImageUrl() }}" />{{ $currency->getName() }}</li>
            @endforeach
        </ul>
    </body>
</html>
