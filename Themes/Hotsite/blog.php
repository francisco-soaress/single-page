<div class="go_blog"></div>
<section class="container bg-purple">
    <div class="content-95-1200 main_blog">
        <h2>Blog</h2>
        <ul>
            <?php
            for ($itemBlog = 1; $itemBlog < 7; $itemBlog++) :
                echo "
                        <li class='effect-grow'>
                            <a href='" . $master . "post'><img src='" . $themesFolderImg . "/blog/blog-{$itemBlog}.jpg' alt='Titulo aqui'></a>
                            <div class='p30'>
                                <div class='main_blog_titulo'>What is Lorem Ipsum?</div>
                                <div class='main_blog_desc'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            </div>
                        </li>
                        ";
            endfor;
            ?>

        </ul>
        <div class="clear"></div>
    </div>
</section>
<div class="container p60-bottom">
    <?php if (stripos($urlPage, "blog")) : ?>
        <div class="m60-top"><a href="<?= $master; ?>" class="post_go_back" title="Voltar ao Blog">Voltar a Home</a></div>
    <?php endif; ?>
</div>