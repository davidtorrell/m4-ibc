<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>IF XML</title>
                <link rel="stylesheet" type="text/css" href="css/estil.css" />
            </head>
            <body>
                <h1>Area &lt; 20000</h1>
                <h2>Canvi d'ordre</h2>
                <ol>
                    <xsl:for-each select="/paisos/pais">
                        <xsl:sort order="descending" />
                        <xsl:if test="area &lt; 20000">
                        <li>
                            <span><xsl:value-of select="name" /></span>
                            <label> - </label>
                            <span>Area: <xsl:value-of select="area" /></span>
                        </li>
                        </xsl:if>
                    </xsl:for-each>
                </ol>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
