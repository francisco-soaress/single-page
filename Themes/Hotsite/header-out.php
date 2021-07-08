<div class="go_home header_all"></div>
<?php
if (!stripos($urlPage, "post") && !stripos($urlPage, "blog")) :
?>
    <header class="container header">
        <div class="main_menu_fixed"></div>
        <div class="content-95-1100">
            <h1>Titulo <strong>Aqui</strong></h1>
            <p>Descrição: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero nisi eligendi sit ullam fugit,
                iusto quae at voluptatibus. Eligendi iure quam deserunt. Iste, asperiores odit praesentium tempora pariatur
                illum quisquam!</p>
            <div class="clear"></div>
        </div>
    </header>
<?php
else :
?>

    <!-- start-menu -->
    <div class="main_menu_fixed"></div>
    <section class="container main_menu">
        <h2 class="fontzero">Barra do menu de navegação</h2>
        <nav>
            <h3 class="fontzero">Menu de navegação</h3>
            <ul>
                <li><a href="#go_home">Home</a></li>
                <li><a href="#go_about">Sobre</a></li>
                <li><a href="#go_services">Serviços</a></li>
                <li><a href="#go_blog">Blog</a></li>
                <li><a href="#go_testimony">Depoimentos</a></li>
                <li><a href="#go_costumers">Clientes</a></li>
                <li><a href="#go_contact">Contato</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </section>
<?php
    //chamando o Breadcrumb
    require __DIR__ . "/breadcrumb.php";
endif;
?>

<!-- <section class="main_menu main_menu_sticky">
            <h2 class="fontzero">Barra do menu de navegação</h2>
            <nav>
                <h3 class="fontzero">Menu de navegação</h3>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Depoimentos e Clientes</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </section> -->
<!-- end-menu -->