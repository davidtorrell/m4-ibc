<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estil.css" />
    <title>M4 - Base XML amb JAVASCRIPT ajax (XPATH)</title>
</head>

<body>
    <h1 class="text-center mt-3">Base XML amb JAVASCRIPT ajax (XPATH)</h1>
    <div class="container mb-4">
        <div class="row">
            <form>
                <div class="form-group">
                    <label for="xpath">XPATH</label>
                    <input type="text" class="form-control" id="xpath" placeholder="" value="/paisos/pais/name">
                </div>
                <button type="button" class="btn btn-primary" id="cerca">Cerca</button>
            </form>
        </div>
    </div>
    <div class="container">
        <div id="contingut" class="content">
            <h5>Exemples</h5>
            <p>/paisos/pais[1]/name </p>
            <p>/paisos/pais[last()]/name </p>
            <p>/paisos/pais[last()-1]/ </p>
        </div>
    </div>
    <footer class="bg-light text-center text-lg-start mt-3">
        <div class="text-center p-3">
            <a class="text-dark" href="https://www.ciber.cat">David Torrell Román</a>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function () {
            $("#cerca").click(function(){
                $("#contingut").html('');
                $.ajax({
                    type: "GET",
                    url: "{{route('base')}}",
                    dataType: "xml",
                    success: function(xml) {
                        if(xml.evaluate){
                            var txt = null;
                            var path = null;
                            var nodes = null;
                            var result = null;

                            var path = $("#xpath").val();
                            $("#contingut").append('<ol class="list-group col-xs-12 center-block">');

                            var nodes = xml.evaluate(path, xml, null, XPathResult.ANY_TYPE, null);
                            var result = nodes.iterateNext();

                            while (result) {
                                $("#contingut").append("<li class='list-group-item text-center'>"+result.childNodes[0].nodeValue+"</li>");
                                console.log(result.childNodes[0].nodeValue);

                                result = nodes.iterateNext();
                            }
                            $("#contingut").append('</ol>');
                        } else {
                            alert("navegador no suporta la funció evaluate()")
                        }
                    }
                });
            });

        });
    </script>
</body>

</html>

{{-- /bookstore/book[1] Selects the first book element that is the child of the bookstore element
/bookstore/book[last()] Selects the last book element that is the child of the bookstore element
/bookstore/book[last()-1] Selects the last but one book element that is the child of the bookstore element
/bookstore/book[position()<3] Selects the first two book elements that are children of the bookstore
    element //title[@lang] Selects all the title elements that have an attribute named lang //title[@lang='en'] Selects
    all the title elements that have a "lang" attribute with a value of "en" /bookstore/book[price>35.00] Selects all
    the book elements of the bookstore element that have a price element with a value greater than
    35.00 /bookstore/book[price>35.00]/title Selects all the title elements of the book elements of the bookstore
    element that have a price element with a value greater than 35.00 --}}
