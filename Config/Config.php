<?php

/* DEFININDO CONSTANTES DE CAMINHO DO SERVIDOR */
if ($_SERVER['HTTP_HOST'] == "localhost"):
    define('MASTER', 'https://localhost/study/study-private/git/gitlab/single-page/');    
endif;

/* ==================================================== */
/* ========== DEFINES MASTER:: JS, CSS e IMG ========== */
/* ==================================================== */
define("MASTER_FOLDER_IMG", MASTER . "Assets/images"); /* não alterar */
define("MASTER_FOLDER_CSS", MASTER .  "Assets/css"); /* não alterar */
define("MASTER_FOLDER_JS", MASTER .  "Assets/js"); /* não alterar */
define("MASTER_FOLDER_INC",  "Assets/inc"); /* não alterar */
$master = MASTER;
$masterFolderImg = MASTER_FOLDER_IMG;
$masterFolderCss = MASTER_FOLDER_CSS;
$masterFolderJs = MASTER_FOLDER_JS;
$masterFolderInc = MASTER_FOLDER_INC;

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

$urlPage =  filter_input(INPUT_SERVER, "REQUEST_URI", FILTER_DEFAULT);
$urlPageAll =  "https://" . $_SERVER['HTTP_HOST'] . $urlPage;

/* ========================================================================================================== */
/* ========== DEFINES:: WEBFR = Dados da Empresa WEB-FR - Empresa responsável pela criação do site ========== */
/* ========================================================================================================== */

DEFINE('WEBFR', 'http://www.webfr.com.br/index.php?webfr=jacobpetry');
DEFINE('WEBFR_DESC', 'Web-Fr | Sua Solução Web!');








