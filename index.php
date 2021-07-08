<?php
require("./Config/Config.inc.php");
$urlPage =  filter_input(INPUT_SERVER, "REQUEST_URI", FILTER_DEFAULT);
$urlPageAll =  "https://" . $_SERVER['HTTP_HOST'] . $urlPage;
?>
<!DOCTYPE html>
<html lang="pt-br" itemprop itemtype="https://www.schema.org/Article">

<head>
    <?php
    require "metatags.php";
    ?>
</head>

<body>
    <?php
    // INC
    require "{$masterFoderInc}/back-top.php";
    require "{$masterFoderInc}/modal-outpage.php";

    // header
    require "{$themesFolder}/header.php";

    // theme
    if (file_exists("{$themesFolder}/{$urlConfig[0]}.php") && !is_dir("{$themesFolder}/{$urlConfig[0]}.php")) {
        //theme root        
        require "{$themesFolder}/{$urlConfig[0]}.php";
    } elseif (!empty($urlConfig[1]) && file_exists("{$themesFolder}/{$urlConfig[0]}/{$urlConfig[1]}.php") && !is_dir("{$themesFolder}/{$urlConfig[0]}/{$urlConfig[1]}.php")) {
        //theme folder
        require "{$themesFolder}/{$urlConfig[0]}/{$urlConfig[1]}.php";
    } else {
        //theme 404
        if (file_exists("{$themesFolder}/404.php") && !is_dir("{$themesFolder}/404.php")) {
            require "{$themesFolder}/404.php";
        } else {
            echo "<div class='container'><div class='trigger trigger-error icon-error radius'>Desculpe, mas a página não existe!</div></div>";
        }
    }

    // footer
    require "{$themesFolder}/footer.php";
    ?>

    <?php
    require "scripts.php";
    ?>

</body>

</html>