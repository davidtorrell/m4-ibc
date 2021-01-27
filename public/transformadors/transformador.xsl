<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>M4 - Transformador</title>
            </head>
            <body>
                <ol>
                    <xsl:for-each select="/paisos/pais">
                        <li>
                            <xsl:value-of select="name" />
                        </li>
                    </xsl:for-each>
                </ol>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
