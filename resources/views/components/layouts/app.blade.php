<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Crypto Currency Converter</title>
</head>
<body data-bs-theme="light">
<header data-bs-theme="dark">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                Crypto Currencies Showcase App
            </a>
        </div>
    </nav>
</header>
<main>
    <div class="container" data-bs-theme="dark">
        <div class="row">
            <div class="col-lg-6">
                <div class="card mt-4">
                    <img class="card-image-top" src="images/img.webp"/>

                    <div class="card-body">
                        <h5 class="card-title">
                            Crypto ~ Fiat Calculator
                        </h5>
                        <div class="card-text">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>

</footer>
</body>
</html>
