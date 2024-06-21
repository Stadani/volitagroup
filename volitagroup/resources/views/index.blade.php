<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Domov</title>

        <script src="https://kit.fontawesome.com/9ee462782c.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/domovskaStrankaStyle.css') }}">


    </head>
    <body>
        <div>
            <x-navbar>
            </x-navbar>
        </div>
        <div>
            <div class="carousel-container">
                <x-carousel>
                </x-carousel>
            </div>
        </div>




    </body>
</html>
