<?php
ob_start();
session_start();
$nome = $_SESSION['nome'] ? $_SESSION['nome'] : "";
$email = $_SESSION['email'] ? $_SESSION['email'] : "";

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
        <div class="content-95-600 main-success-form">
            <img src="<?= $masterFolderImg; ?>/success-form.jpg" alt="Formulário enviado com sucesso!" title="Formulário enviado com sucesso!" />
            <h1>Formulário enviado com sucesso!</h1>
            <p>Sucesso <strong><?= $nome; ?></strong>, recebemos seu contato. Nossa equipe vai analisar e entraremos em contato pelo e-mail <strong><?= $email; ?></strong>.</p>

            <div><strong>Aviso:</strong> Caso não receba o e-mail na sua caixa de entrada, verifique a pasta de Spam ou Lixo Eletrônico</div><br><br>

            <a class="bt-radius bt-blue" href="<?= $master; ?>">Voltar ao site</a>
        </div>

    </section>
    <?php
    require "../scripts.php";
    ?>
</body>

</html>
<?php ob_end_flush(); ?>