<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>M4 IBC</title>
</head>

<body>
    <h1 class="text-center mt-3">M4 IBC</h1>
    <br />

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="col-sm-12">Tota la base del projecte es gestiona amb el framework Laravel, i la
                    informació
                    per
                    generar els XML es fa
                    amb una API de informació de països.</p>
            </div>
            <div class="col-sm-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Base XML</h5>
                        <p class="card-text">Estructura base d'arxiu XML consultant a una API.</p>
                        <a href="{{route('base')}}" target="_blank" class="btn btn-primary">Anar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Base XML amb ESQUEMA</h5>
                        <p class="card-text">Estructura basica d'arxiu XML amb arxiu XSD per validar l'esquema.</p>
                        <a href="{{route('esquema')}}" target="_blank" class="btn btn-primary">Anar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Base XML amb TRANSFORMADORS </h5>
                        <p class="card-text">Estructura d'arxiu amb transformadors per visualizar unicament el nom</p>
                        <a href="{{route('transformador')}}" target="_blank" class="btn btn-primary">Anar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Base XML amb ESTIL (CSS) </h5>
                        <p class="card-text">Estructura d'arxiu HTML amb el framework bootstrap per mostar pàgina en
                            HTML.</p>
                        <a href="{{route('estil')}}" target="_blank" class="btn btn-primary">Anar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Base XML amb CONDICIONALS (IF) </h5>
                        <p class="card-text">Estructura com l'anterior exemple però amb sentències IF amb control XML i
                            mostrar a l'inversa.</p>
                        <a href="{{route('if')}}" target="_blank" class="btn btn-primary">Anar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Base XML amb JAVASCRIPT ajax (XPATH)</h5>
                        <p class="card-text">Estructura de pàgina amb HTML amb consulta via AJAX amb input per poder
                            filtrar via XPATH.</p>
                        <a href="{{route('javascript')}}" target="_blank" class="btn btn-primary">Anar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Accés API</h5>
                        <p class="card-text">API de contingut en format JSON que previament es consulta per generar el
                            XML.</p>
                        <a href="https://restcountries.eu/rest/v2/regionalbloc/eu" target="_blank"
                            class="btn btn-primary">Anar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Repositori</h5>
                        <p class="card-text">Repositori GITHUB con està el contingut d'aquest projecte.</p>
                        <a href="https://github.com/davidtorrell/m4-ibc" target="_blank"
                            class="btn btn-primary">Anar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3">
            <a class="text-dark" href="https://www.ciber.cat">David Torrell Román</a>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
