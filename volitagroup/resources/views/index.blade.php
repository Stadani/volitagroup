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
    <body style="
    background:
        url('{{ asset('images/background-1.jpg') }}') no-repeat center center fixed,
        linear-gradient(to top, rgba(27, 72, 250, 1), rgba(27, 72, 250, 1)),
        url('{{ asset('images/background-2.jpg') }}') no-repeat center center fixed;
    background-size: auto, auto, auto;
">

        <div>
            <x-navbar>
            </x-navbar>
        </div>
        <div class="content-container">
            <div>
                 <x-carousel>
                 </x-carousel>
            </div>

            <div>
                <div class="main-text">
                    Naše aktivity
                </div>
                <div class="sub-text">
                    Zameriavame sa na nasledovné
                </div>
                <x-ourActivities>
                </x-ourActivities>
            </div>

            <div>
                <div class="main-text">
                    Novinky
                </div>
                <div class="sub-text">
                    Blog
                </div>
                <x-news>
                </x-news>
            </div>
        </div>
    </body>
</html>
