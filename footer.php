<footer>
    <div class="container center">

        <div class="row mb-5">
            <div class="col-md-3 mt-4">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand logo" width="100px">
                    <?php 
                        $pc_custom_logo = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src(  $pc_custom_logo, 'full');

                        if(has_custom_logo()) {
                            echo '<img src="' . esc_url($logo[0]) . '" alt="logotipo">';
                        }else{
                            echo '<h5 class="m-0" >' . get_bloginfo('name') . '</h5>';
                        }   
                    ?>
                </a>
                <p>Uma empresa especiliazada em RH, iremos ajudar sua empresa a contratar os melhores profissionais!</p>
            </div>
            <div class="col-md-3 mt-4">
                <h4>Contato</h4>
                <ul class="mt-4">
                    <li><a href="mailto:contato@frequenciarh.com">contato@frequenciarh.com</a></li>
                    <li><a href="https://api.whatsapp.com/send?l=pt_BR&amp;phone=5512992546556">(12)992546556</a></li>
                </ul>
            </div>

            <div class="col-md-3 mt-4">
                <h4>Links</h4>
                <ul class="mt-4">
                    <li> <a href="./vagas">Ver vagas</a></li>
                    <li> <a href="./politica-de-privacidade-2/">Política de privacidade</a></li>
                </ul>

            </div>

            <div class="col-md-3 mt-4">
                <h4>Redes sociais</h4>

                <?php $template_directory = get_template_directory_uri(); ?>
                <div class="center">
                    <a href="https://api.whatsapp.com/send?l=pt_BR&amp;phone=5512992546556"
                        class="d-flex justify-content-center justify-content-md-start mt-4">
                        <img class="img-fluid" src=" <?php echo $template_directory;?>/img/whatsapp.svg" />
                        (12) 992546556
                    </a>
                </div>



                <a href="" class="d-flex justify-content-center justify-content-md-start mt-2">
                    <img class="img-fluid" src=" <?php echo $template_directory;?>/img/instagram.svg" />
                    @frequeciarh
                </a>

            </div>
        </div>
        <hr>

        <div class="text-center mt-5">
            <p>2021 © Todos os direitos reservados. <strong>Frequência RH </strong></p>

            <div class="mt-2">
                <span>Desenvolvido por:</span>

            </div>
            <a href="https://wpsgames.com.br/">
                <img src="https://wpsgames.com.br/img/logo.png" alt="WPS Games" width="40px">
            </a>
        </div>

    </div>
    <a href="https://api.whatsapp.com/send?l=pt_BR&amp;phone=5512992546556" class="float" target="_blank">
        <img class="img-fluid my-float" src=" <?php echo $template_directory;?>/img/btn-whatsapp.svg" />
    </a>
</footer>
</body>
<?php wp_footer();?>

</html>