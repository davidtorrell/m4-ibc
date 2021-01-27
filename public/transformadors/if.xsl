<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Base XML amb CONDICIONALS (IF)</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

                <link rel="stylesheet" type="text/css" href="css/estil.css" />
            </head>
            <body>
                <h1 class="text-center mt-3">Area &lt; 20000</h1>
                <h2 class="text-center mt-3">Canvi d'ordre</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="list-group col-xs-12 center-block">
                                <xsl:for-each select="/paisos/pais">
                                    <xsl:sort order="descending" />
                                    <xsl:if test="area &lt; 20000">
                                        <li class="list-group-item text-center">
                                            <span>
                                                <xsl:value-of select="name" />
                                            </span>
                                            <label> - </label>
                                            <span>
                                                Area:
                                                <xsl:value-of select="area" />
                                            </span>
                                        </li>
                                    </xsl:if>
                                </xsl:for-each>
                            </ol>
                        </div>

                    </div>
                </div>
                <footer class="bg-light text-center text-lg-start mt-3">
                    <div class="text-center p-3">
                        <a class="text-dark" href="https://www.ciber.cat">David Torrell Román</a>
                    </div>
                </footer>
                <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            </body>

        </html>
    </xsl:template>
</xsl:stylesheet>
