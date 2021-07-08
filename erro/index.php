<?php
require_once __DIR__  . "/../vendor/autoload.php";
require "../Config/Config.php";
?>
<!DOCTYPE html>
<html lang="pt-br" itemprop itemtype="https://www.schema.org/Article">

<head>
    <?php
    require "../metatags.php";
    ?>
</head>

<body>

    <section class="container">
        <div class="content-95-600 main-error-form">
            <img src="<?= $masterFolderImg; ?>/success-form.jpg" alt="Formulário enviado com sucesso!" title="Formulário enviado com sucesso!" />
            <h1>Erro ao enviar seus dados!</h1>
            <p>Por favor, clique no botão abaixo e tente novamente.</p>
            <a class="bt-radius bt-blue" href="<?= $master; ?>#go_contact">Tentar novamente</a>
        </div>

    </section>
    <?php
    require "../scripts.php";
    ?>
</body>

</html>