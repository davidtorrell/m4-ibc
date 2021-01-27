<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>M4 IBC - Base XML amb ESTIL (CSS)</title>
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

                <link rel="stylesheet" type="text/css" href="css/estil.css" />

            </head>
            <body>
                <h1 class="text-center mt-3">M4 IBC - Base XML amb ESTIL (CSS)</h1>
                <br />
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group col-xs-12 center-block">
                                <xsl:for-each select="/paisos/pais">
                                    <li class="list-group-item text-center">
                                        <xsl:value-of select="name" />
                                    </li>
                                </xsl:for-each>
                            </ul>
                        </div>
                    </div>

                    <br />
                </div>

            </body>
            <footer class="bg-light text-center text-lg-start">
                <div class="text-center p-3">
                    <a class="text-dark" href="https://www.ciber.cat">David Torrell Román</a>
                </div>
            </footer>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </html>
    </xsl:template>
</xsl:stylesheet>
