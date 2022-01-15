<?php get_header(); ?>

<section class="img-bg ">
    <div class="container s-banner">
        <div class="row align-items-center justify-content-center pt-banner">
            <div class="col-md-6">
                <div class="center ">
                    <h1 class="mt-4 slide-in-elliptic-bottom-fwd" data-aos="fade-down">
                        Frequência <span> RH</span>
                    </h1>
                    <h3 class="lead mt-4" data-aos="fade-down">Recrutamento e Seleção com
                        <strong>especialistas</strong> no assunto.
                    </h3>
                </div>

                <button type="button" class="btn-grad center mt-5" data-aos="fade-down">
                    <a href="#cta">
                        Quero saber quanto custa
                    </a>
                </button>

                <p class="lead mt-4 center jello-horizontal " data-aos="fade-down">É super simples!
                    <?php $template_directory = get_template_directory_uri(); ?>
                    <img class="arrow-banner" src=" <?php echo $template_directory; ?>/img/arrow-banner.svg" />
                </p>


            </div>
            <div class="col-md-6 text-center d-none d-sm-block">
                <?php $template_directory = get_template_directory_uri(); ?>
                <img class="img-fluid img-hero" loading="lazy"
                    src=" <?php echo $template_directory; ?>/img/img-hero.png" />
            </div>
        </div>
    </div>
</section>

<!--Waves Container-->
<div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(121,71,221,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(233,36,240,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(89,225,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#212C42" />
        </g>
    </svg>
</div>
<!--Waves end-->

<section class="container" id="s-who-we-are">
    <div class="text-center m-title">
        <h2> SOBRE NÓS </h2>
    </div>
    <div class="row align-items-center justify-content-center">
        <div class="col-md-6 text-center" data-aos="fade-right">
            <?php $template_directory = get_template_directory_uri(); ?>
            <img class="img-fluid" loading="lazy" src=" <?php echo $template_directory; ?>/img/img-sobre.png" />
        </div>
        <div class="col-md-6 mt-4" data-aos="zoom-in">
            <?php $template_directory = get_template_directory_uri(); ?>
            <!-- <div class="center">
                <img class="img-fluid" loading="lazy" src=" <?php echo $template_directory; ?>/img/icone-frequencia.svg"
                    width="40px" />
            </div> -->

            <h4 class="mt-2 center">Somos uma consultoria de RH<br> </h4>
            <p class="lead mt-4 center">
            Somos uma consultoria de RH com soluções personalizadas 
            para empresas de diversos portes e segmentos. 
            Resolvemos o seu problema utilizando técnicas e 
            metodologias apropriadas, aliadas a estratégia do seu 
            negócio.
            Recrutamento e seleção humanizado, proporcionamos a 
            melhor experiência ao candidato, zelando pela sua marca 
            empreendedora.
            </p>
        </div>
    </div>
</section>

<section class="container s-about" id="s-about">

    <div class="text-center m-title">
        <div class="circle">
            <?php $template_directory = get_template_directory_uri(); ?>
            <img class="img-fluid" src=" <?php echo $template_directory; ?>/img/frequencia.svg" />
        </div>
        <h2> SERVIÇOS</h2>
    </div>

    <div class="row text-center">
        <div class="col-md-6">
            <div class="dpc-card shadow-sm mb-5">
                <?php $template_directory = get_template_directory_uri(); ?>
                <img class="img-fluid" src=" <?php echo $template_directory; ?>/img/icon-empresa-new.svg"
                    alt="ícone empresa" />
                    <div class="flex-wps">
                        <h4 class="text-uppercase mt-4 degrade-blue">Para sua empresa</h4>
                        <ul class="lead">
                            <li class="mt-2">Recrutamento e Seleção.</li>
                            <li>Implantação, projetos e gerenciamento do departamento 
                                de Recursos Humanos sob medida.</li>
                        </ul>
                        <div class="mt-2">
                            <a href="https://api.whatsapp.com/send?l=pt_BR&phone=5512992546556&text=Olá,%20contato%20via%20site!">
                                <h5>Fale com o especilista</h5>
                            </a>
                        </div>
                    </div>
                
                <!-- Modal 2 -->
                <div class="modal fade" id="ex-m-2" tabindex="-1" aria-labelledby="ex-m-l-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title text-light" id="ex-m-l-1">PARA SUA EMPRESA</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-light">
                                <h6> Recrutamento e Seleção.</h6>
                                <h6> Implantação e Gerenciamento de todo o ator de RH (sob medida).</h6>
                                <h6> Atendimento on-line ao seu colaborador.</h6>
                                <h6> Gestão de Benefícios (convênio, vale transporte, vale alimentação.</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-6">
            <div class="dpc-card shadow-sm mb-5" data-aos="flip-left">
                <?php $template_directory = get_template_directory_uri(); ?>
                <img class="img-fluid" src=" <?php echo $template_directory; ?>/img/icon-voce.svg" />
                <div class="flex-wps">
                    <h4 class="text-uppercase mt-4 degrade-blue ">Para você</h4>
                    <ul class="lead">
                        <li class="mt-4">Aqui você se cadastra e tem a oportunidade real de <br>
                        conseguir um emprego.
                        </li>
                    </ul>
                    <div class="mt-4">
                        <a href="https://frequenciarh.pandape.com.br/">
                            <h5>Ver vagas</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container" id="vagas">

    <div class="box d-flex align-items-center justify-content-around center">
        <h4 class="mt-4 mb-4">FIQUE DE OLHO NAS NOSSAS VAGAS: </h4>
        <?php $template_directory = get_template_directory_uri(); ?>
        <img class="img-fluid" width="150px" src=" <?php echo $template_directory; ?>/img/arrow.svg" />
        <button class="btn-vagas center"> <a href="https://frequenciarh.pandape.com.br/">ver mais vagas</a> </button>
    </div>
    <!-- <div class="mt-4">
        <div class="row">
            <div class="col-md-6">
                <?php echo do_shortcode(
                    ' [job-postings show_filters = "true" limit="4" category="11,15"]  '
                ); ?>
            </div>
            <div class="col-md-6">
                <?php echo do_shortcode(
                    ' [job-postings show_filters = "true" limit="4" category="12,14"]  '
                ); ?>
            </div>
        </div>

    </div> -->
</section>

<section class="container" id="depositions">
    <div class="text-center m-title">
        <!-- <p><span>Sobre</span></p> -->
        <h2>NOSSOS CLIENTES </h2>
    </div>

    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->

            <div class="swiper-slide text-center">
                <div class="card-depoimentos">
                    <img class="img-fluid" loading="lazy" src="<?php echo $template_directory; ?>/img/fluencypass.png"
                alt="fluencypass" title="fluencypass" />
                    <!-- <h4 class="mt-4">Fluencypass</h4> -->
                </div>

            </div>
            <div class="swiper-slide text-center">
                <div class="card-depoimentos">
                <img class="img-fluid" loading="lazy" src="<?php echo $template_directory; ?>/img/foxvidros.png"
                alt="foxvidros" title="foxvidros" />
                    <!-- <h4 class="mt-4">Fox vidros</h4> -->
                </div>
            </div>
            <div class="swiper-slide text-center">
                <div class="card-depoimentos">
                <img class="img-fluid" loading="lazy" src="<?php echo $template_directory; ?>/img/dog.png"
                alt="dog" title="Dog friends forever" />
                    <!-- <h4 class="mt-4">Dog friends forever</h4> -->
                </div>
            </div>

            <div class="swiper-slide text-center">
                <div class="card-depoimentos">
                <img class="img-fluid" loading="lazy" src="<?php echo $template_directory; ?>/img/tbm-educacao.png"
                alt="dog" title="tbm-educacao" />
                    <!-- <h4 class="mt-4">TMB educacao</h4> -->
                </div>
            </div>

        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>

</section>

<section class="container s-blog" id="s-blog">
    <div class="text-center m-title">
        <h2 class="text-upercase"> Veja nossas dicas</h2>
    </div>

    <div>
        <!-- encurtar title  -->
        <?php add_filter('the_title', 'max_title_length'); ?>
        <?php echo do_shortcode(
            '[pgaf_post_filter limit="20" pgaf_post_filter all_filter_text="Todos" pgaf_post_filter grid="3"  content_words_limit="5" show_date="true" show_comments="false" show_author="false" extra_class=""]'
        ); ?> <?php if (have_posts()):
     while (have_posts()):
         the_post(); ?> <?php
     endwhile;
 else:
      ?> <p>There is nothing yet to be displayed...</p>
        <?php
 endif; ?>

    </div>
</section>

<section class="container s-contact" id="contact">
    <div class="m-title text-center ">
        <!-- <p><span>Contato</span></p> -->
        <h2 class="text-upercase">Entre em contato conosco!</h2>
    </div>
    <div class="row">
        <!-- <div class="col-md-6 justify-content-center mb-5" id="cta">
            <h3 class="center">Achamos os melhores profissionais com a maior rapidez!</h3>
            <img class="img-fluid mt-4" loading="lazy" src="<?php echo $template_directory; ?>/img/profissionais.svg"
                alt="contato imagem" />
        </div> -->
        <div class="offset-md-3 col-md-6">
            <?php echo do_shortcode(' [wpforms id="79"] '); ?>
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-md-4 text-center mt-4">
            <div class="card-contact">
                <div class="text-center">
                    <img width="34px" src="<?php echo $template_directory; ?>/img/icon-message.svg"
                        alt="contato imagem" />
                </div>
                <h5 class="text-center mt-2"><a
                        href="mailto:contato@frequenciarh.com.br">contato@frequenciarh.com.br</a>
                </h5>
            </div>
        </div>

        <div class="col-md-4 text-center mt-4">
            <div class="card-contact">
                <div class="text-center">
                    <img width="34px" src="<?php echo $template_directory; ?>/img/icon-phone.svg" alt="contato imagem" />
                </div>
                <h5 class="text-center mt-2 text-light"> <a
                        href="https://api.whatsapp.com/send?l=pt_BR&amp;phone=5512992546556">(12)992546556</a></h5>
            </div>
        </div>

        <div class="col-md-4 text-center mt-4">
            <div class="card-contact">
                <div class="text-center">
                    <img width="34px" src="<?php echo $template_directory; ?>/img/icon-location.svg"
                        alt="contato imagem" />
                </div>
                <h5 class="text-center mt-2">São Bernado do Campo - SP</h5>
            </div>
        </div>
    </div> -->

</section>

<?php get_footer(); ?>
