<main>
    <section class="container bg-purple">
        <div class="content-95-1200 main_conteudo">
            <div class="box50">
                <h2>Conteúdo do site aqui!</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum distinctio unde quasi placeat magni, consectetur reprehenderit dignissimos. Rem, non cupiditate culpa rerum tenetur debitis voluptatem incidunt exercitationem similique doloribus saepe!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum distinctio unde quasi placeat magni, consectetur reprehenderit dignissimos. Rem, non cupiditate culpa rerum tenetur debitis voluptatem incidunt exercitationem similique doloribus saepe!</p>
                <a class="bt-links-radius-small bt-links-radius-white m30-top" href="#go_contact">Quero conhecer</a>
            </div>
            <div class="box50">
                <figure>
                    <img class="img-1 effect-grow" src="<?= $themesFolderImg; ?>/img-1.png" alt="Imagem" title="Imagem" />
                </figure>
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <div class="go_about"></div>
    <section class="container">
        <div class="content-95-1200 main_sobre">
            <div class="box50">
                <figure>
                    <img class="img-1 effect-levitate" src="<?= $themesFolderImg; ?>/img-2.png" alt="Imagem" title="Imagem" />
                </figure>
            </div>
            <div class="box50">
                <h2>Um pouco <strong>sobre nós!</strong></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum distinctio unde quasi placeat magni, consectetur reprehenderit dignissimos. Rem, non cupiditate culpa rerum tenetur debitis voluptatem incidunt exercitationem similique doloribus saepe!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum distinctio unde quasi placeat magni, consectetur reprehenderit dignissimos. Rem, non cupiditate culpa rerum tenetur debitis voluptatem incidunt exercitationem similique doloribus saepe!</p>
            </div>
    </section>

    <div class="go_services"></div>
    <section class="container main_servicos">

        <div class="content-95-1000">
            <h2>O que Fazemos!</h2>
            <ul>
                <li>
                    <div class="icons_servicos icon-code icon-notext"></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </li>
                <li>
                    <div class="icon-code-fork icon-notext icons_servicos"></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </li>
                <li>
                    <div class="icon-mobile icon-notext icons_servicos"></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </section>

    <div class="container">
        <div class="content-95-1200 main_cta grid-container">
            <div class="box60">
                <div class="main_cta_title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>
                <div class="main_cta_desc">Cupiditate nesciunt optio accusantium natus consequuntur vero, ipsam, aperiam, ex eveniet est facilis consectetur cumque. Voluptate laudantium quis, nemo mollitia voluptatum ipsum!</div>
            </div>
            <div class="box40">
                <a class="bt-radius bt-yellow" href="#go_contact">Quero mais informações!</a>
            </div>

            <div class="clear"></div>
        </div>
    </div>

    <?php require "{$themesFolder}/blog.php"; ?>

    <div class="go_testimony"></div>
    <section class="container main_depoimentos bg-lightgray-two">
        <div class="content-95-1000">
            <h2>Por que nossos<br> <strong>clientes confiam em nós!</strong></h2>
            <ul>
                <li>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi velit voluptatum cum perferendis doloremque at, rerum veniam dolore reprehenderit unde adipisci exercitationem blanditiis est nemo fugit sed eaque quis minima.</p>
                    <div class="nome_cargo">Bruce Wayne<br><strong>Diretor Executivo</strong></div>
                </li>
                <li>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi velit voluptatum cum perferendis doloremque at, rerum veniam dolore reprehenderit unde adipisci exercitationem blanditiis est nemo fugit sed eaque quis minima.</p>
                    <div class="nome_cargo">Bruce Wayne<br><strong>Diretor Executivo</strong></div>
                </li>
                <li>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi velit voluptatum cum perferendis doloremque at, rerum veniam dolore reprehenderit unde adipisci exercitationem blanditiis est nemo fugit sed eaque quis minima.</p>
                    <div class="nome_cargo">Bruce Wayne<br><strong>Diretor Executivo</strong></div>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </section>

    <div class="go_costumers"></div>
    <section class="container main_clientes">
        <div class="content-95-1100">
            <h2>Veja alguns nossos<br> <strong>de nossos clientes</strong></h2>
            <div class="content-95-1100 main_clientes_img">
                <ul>

                    <?php
                    for ($i = 1; $i <= 10; $i++) :
                        echo "
                            <li>
                                <figure>
                                    <img src='" . $themesFolderImg . "/img-clientes.png' alt='Cliente' title='Cliente'>
                                </figure>
                            </li>";
                    endfor;
                    ?>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </section>

    <div class="go_contact"></div>
    <section class="container bg-purple p30-top-bottom">
        <h2 class="fontzero">Preencha o formulário ou entre em contato via telefone ou e-mail.</h2>
        <div class="content-95-1000 main_contato">
            <div class="box50 dados_contato_top">
                <h2>Entrar em Contato!</h2>
                <p>Iremos responder o mais rápido possível</p>
                <ul>
                    <li><span class="icon-phone txt-darkblue"></span> (11) 5555-4444</li>
                    <li><a href="#"><span class="icon-whatsapp txt-darkblue"></span> (11) 9 7878-8989</a></li>
                    <li><a href="#"><span class="icon-mail txt-darkblue"></span> contato@teste.com.br</a></li>
                    <li><a href="#"><span class="icon-location txt-darkblue"></span> Av. Paulista, 1875 - São Paulo - SP</a></li>
                </ul>

            </div>
            <div class="box50">
                <form class="main_form" method="POST" action="##">
                    <label>
                        <input type="text" name="" class="input_format" title="Digite seu Nome" placeholder="Digite seu Nome: *">
                    </label>
                    <label>
                        <input type="email" name="" class="input_format" title="Digite seu E-mail" placeholder="Digite seu E-mail: *">
                    </label>
                    <label>
                        <input type="text" name="" class="input_format" title="Digite seu WhatsApp" placeholder="Digite seu WhatsApp: *">
                    </label>
                    <label>
                        <textarea rows="4" cols="50" placeholder="Mensagem:"></textarea>
                    </label>
                    <button>Enviar</button>
                </form>
                <div class="clear"></div>
            </div>

            <!-- <div class="box50 dados_contato_bottom">
                <ul>
                    <li><i class="fas fa-phone icons-fontawesome"></i> (11) 5555-4444</li>
                    <li><i class="fab fa-whatsapp icons-fontawesome"></i> (11) 9 7878-8989</li>
                    <li><i class="fas fa-envelope icons-fontawesome"></i> contato@teste.com.br</li>
                    <li><i class="fas fa-map-marker-alt icons-fontawesome"></i> Av. Paulista, 1875 - São Paulo - SP</li>
                </ul>
            </div> -->

        </div>
        <div class="clear"></div>
    </section>
</main>