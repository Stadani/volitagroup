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


        <style>

            body {
                position: relative;
            }
            .background {
                position: absolute;
                width: 100%;
                height: 33.333%;
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
                z-index: -1;
            }

            .background:nth-child(1) {
                top: 0;
                background-image: url('{{ asset('images/background-1.jpg') }}');
            }

            .background:nth-child(2) {
                top: 33.333%;
                background-color: #1b48fa;
            }

            .background:nth-child(3) {
                top: 66.666%;
                background-image: url('{{ asset('images/background-2.jpg') }}');
            }
        </style>

    </head>
    <body>
    <div class="background"></div>
    <div class="background"></div>
    <div class="background "></div>
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

            <div>
                <x-aboutUs>
                </x-aboutUs>
            </div>

            <div>
                <div class="main-text">
                    Partneri
                </div>
                <div class="sub-text">
                    Zakladatelia EAO
                </div>
                <x-partners>
                </x-partners>
            </div>

            <div>
                <div class="main-text">
                    Partneri
                </div>
                <div class="sub-text">
                    Generálny partner
                </div>
                <img src="{{ asset('images/logo-volita.svg') }}">
            </div>

            <div>
                <div class="main-text">
                    Partneri
                </div>
                <div class="sub-text">
                    Naši partneri
                </div>
                <x-ourPartners>
                </x-ourPartners>
                <div class="partner-text">
                    <p>Etiam ipsum lacus, vehicula eu porttitor in, eleifend quis purus. Sed a nibh condimentum quam cursus eleifend.</p>
                    <p>Nam eleifend sem dolor, eu sodales tortor ullamcorper at. Curabitur a mauris sodales, interdum ipsum vitae, posuere tellus.</p>
                    <button class="btn btn-primary px-4">CHCETE SA STAŤ PARTNEROM?</button>
                </div>
            </div>

        </div>
    </body>
<footer>

</footer>
</html>
