<?php

/* DEFININDO CONSTANTES DE CAMINHO DO SERVIDOR */
if ($_SERVER['HTTP_HOST'] == "localhost"):
    define('MASTER', 'https://localhost/sites/study/study-private/git/gitlab/single-page/');
endif;

/* ==================================================== */
/* ========== DEFINES MASTER:: JS, CSS e IMG ========== */
/* ==================================================== */
define("MASTER_FOLDER_IMG", MASTER . "Assets/images"); /* não alterar */
define("MASTER_FOLDER_CSS", MASTER .  "Assets/css"); /* não alterar */
define("MASTER_FOLDER_JS", MASTER .  "Assets/js"); /* não alterar */
define("MASTER_FOLDER_INC",  "Assets/inc"); /* não alterar */
$master = MASTER;
$masterFoderImg = MASTER_FOLDER_IMG;
$masterFoderCss = MASTER_FOLDER_CSS;
$masterFoderJs = MASTER_FOLDER_JS;
$masterFoderInc = MASTER_FOLDER_INC;

/* ==================================================== */
/* ========== DEFINES THEMES:: JS, CSS e IMG ========== */
/* ==================================================== */

define("THEMES_FOLDER", "./Themes/Hotsite"); /* não alterar */
define("THEMES_FOLDER_IMG", MASTER . "Themes/Hotsite/Assets/images"); /* não alterar */
define("THEMES_FOLDER_CSS", MASTER .  "Themes/Hotsite/Assets/css"); /* não alterar */
define("THEMES_FOLDER_JS", MASTER .  "Themes/Hotsite/Assets/js"); /* não alterar */
define("THEMES_FOLDER_INC", "Themes/Hotsite/Assets/inc"); /* não alterar */
$themesFolder = THEMES_FOLDER;
$themesFolderImg = THEMES_FOLDER_IMG;
$themesFolderCss = THEMES_FOLDER_CSS;
$themesFolderJs = THEMES_FOLDER_JS;
$themesFolderInc = THEMES_FOLDER_INC;

/* ======================================== */
/* ========== NAVEGAÇÃO DINÂMICA ========== */
/* ======================================== */
$urlConfig = explode("/", strip_tags(filter_input(INPUT_GET, "url", FILTER_DEFAULT)));
$urlConfig[0] = (!empty($urlConfig[0]) ? $urlConfig[0] : "index");

/* ================================ */
/* ========== BREADCRUMB ========== */
/* ================================ */
$urlQueryString = $_SERVER["QUERY_STRING"];
$urlQueryString = str_replace("url=", "", $urlQueryString);
$urlQueryString = str_replace("/", "", $urlQueryString);
$urlQueryString = str_replace("-", " ", $urlQueryString);
$breadcrumb = ucfirst($urlQueryString);

/* ========================================================================================================== */
/* ========== DEFINES:: WEBFR = Dados da Empresa WEB-FR - Empresa responsável pela criação do site ========== */
/* ========================================================================================================== */

DEFINE('WEBFR', 'http://www.webfr.com.br/index.php?webfr=jacobpetry');
DEFINE('WEBFR_DESC', 'Web-Fr | Sua Solução Web!');








