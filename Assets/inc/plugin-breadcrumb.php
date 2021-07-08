<?php

$urlBreadcrumb = $_SERVER["QUERY_STRING"];
$urlBreadcrumb = str_replace("url=", "", $urlBreadcrumb);
$urlBreadcrumb = str_replace("/", "", $urlBreadcrumb);
$urlBreadcrumb = str_replace("-", " ", $urlBreadcrumb);
$pluginBreadcrumb = ucfirst($urlBreadcrumb);

/*    
=======================
==== IMPLEMENTAÇÃO ====
=======================
    - Para implementar o Plugin do Breadcrumb, você precisará pegar o arquivo breadcrumb.php dentro da pasta Themes/Hotsite/breadcrumb.php
    - Faça um require do arquivo breadcrumb.php para o local onde será visualizado.
*/
