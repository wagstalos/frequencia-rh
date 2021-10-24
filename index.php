<?php get_header(); ?>

<section class="img-bg">
    <div class="container s-banner">
        <div class="row align-items-center justify-content-center pt-banner">
            <div class="col-md-6 ">
                <div class="center">
                    <h1 class="mt-4 tracking-in-expand " data-aos="fade-down">
                        Frequência <span> RH</span>
                    </h1>

                    <h3 class="lead mt-4" data-aos="fade-down">Recrutamento e Seleção com
                        <strong>especialistas</strong> no assunto.
                    </h3>

                </div>


                <button type="button" class="btn-grad center mt-5" data-aos="fade-down">
                    <a href="#contact">
                        Quero saber quanto custa
                    </a>
                </button>

                <p class="lead mt-4 center " data-aos="fade-down">É super simples!
                    <?php $template_directory = get_template_directory_uri(); ?>
                    <img class="arrow-banner" src=" <?php echo $template_directory;?>/img/arrow-banner.svg" />
                </p>


            </div>
            <div class="col-md-6 text-center d-none d-sm-block">
                <?php $template_directory = get_template_directory_uri(); ?>
                <img class="img-fluid img-hero" src=" <?php echo $template_directory;?>/img/img-hero.png"
                    style="position:absolute; z-index:1" />
                <?php $template_directory = get_template_directory_uri(); ?>
                <img class="img-fluid slide-top img-hero" src=" <?php echo $template_directory;?>/img/img-hero2.png"
                    style="position:relative; z-index:2" />
                <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player class="flip" src=" https://assets9.lottiefiles.com/packages/lf20_mxrkk5de.json"
                    mode="bounce" background="transparent" speed="1" style="width:100%; height: 600px;" loop autoplay>
                </lottie-player> -->
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
    <!-- <div class="circle">
        <?php $template_directory = get_template_directory_uri(); ?>
        <img class="img-fluid" src=" <?php echo $template_directory;?>/img/circle.svg" />
    </div> -->
    <div class="text-center m-title">
        <!-- <p><span>Sobre</span></p> -->
        <h2> Quem Somos</h2>
    </div>
    <div class="row align-items-center justify-content-center">
        <div class="col-md-6" data-aos="fade-right">
            <?php $template_directory = get_template_directory_uri(); ?>
            <img class="img-fluid" src=" <?php echo $template_directory;?>/img/img-sobre.png" />
        </div>
        <div class="col-md-6" data-aos="zoom-in">
            <?php $template_directory = get_template_directory_uri(); ?>
            <div class="center">
                <img class="img-fluid" src=" <?php echo $template_directory;?>/img/icone-frequencia.svg" width="40px" />
            </div>

            <h3 class="mt-4 center">Olá eu sou a Frêquencia RH</h3>
            <p class="mt-4 center">
                Uma empresa especiliazada em RH, iremos ajudar sua empresa a contratar os melhores profissionais!
            </p>
        </div>
    </div>
</section>

<section class="container s-about" id="s-about">

    <div class="text-center m-title">
        <div class="circle">
            <?php $template_directory = get_template_directory_uri(); ?>
            <img class="img-fluid" src=" <?php echo $template_directory;?>/img/frequencia.svg" />
        </div>
        <!-- <p><span>Nossos</span></p> -->
        <h2> Serviços</h2>
    </div>

    <div class="row text-center">
        <div class="col-md-4 ">
            <div class="dpc-card shadow-sm mb-5">
                <?php $template_directory = get_template_directory_uri(); ?>
                <img class="img-fluid" src=" <?php echo $template_directory;?>/img/icon-especialidade.png" />
                <h5 class="text-uppercase mt-4" style="color: #fff">Nossa especialidade</h5>
                <p class="mt-4">Somos uma consultoria especializada em ajudar empresas em todas as etapas de RH.
                </p>
                <div class="mt-4">
                    <a href="" data-bs-toggle="modal" data-bs-target="#ex-m-1">
                        <h5>Ver Mais</h5>
                    </a>
                </div>

                <!-- Modal 1 -->
                <div class="modal fade " id="ex-m-1" tabindex="-1" aria-labelledby="ex-m-l-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title text-light" id="ex-m-l-1">Nossa especialidade</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-light">
                                <h5> Consultoria sob medida para sua empresa</h5>

                                <h6 class="mt-4"> Você está em busca de descomplicar o setor de RH e não sabe por onde
                                    começar?
                                </h6>
                                <h6> A Frequência RH vai te ajudar em todas as etapas. Temos soluções
                                    personalizadas
                                    para
                                    sua empresa que cabem no seu bolso.</h6>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class=" col-md-4">
            <div class="dpc-card shadow-sm mb-5">
                <?php $template_directory = get_template_directory_uri(); ?>
                <img class="img-fluid" src=" <?php echo $template_directory;?>/img/icon-empresa.png" />
                <h5 class="text-uppercase mt-4" style="color: #fff;">Para sua empresa</h5>
                <p class="mt-4">Nosso serviços variam desde a implantação do RH até o gerenciamento completo do
                    setor.
                </p>
                <div class="mt-4">
                    <a href="" data-bs-toggle="modal" data-bs-target="#ex-m-2">
                        <h5>Ver Mais</h5>
                    </a>
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
                                <h6> tendimento on-line ao seu colaborador.</h6>
                                <h6> Gestão de Benefícios (convênio, vale transporte, vale alimentação.</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="dpc-card shadow-sm mb-5" data-aos="flip-left">
                <?php $template_directory = get_template_directory_uri(); ?>
                <img class="img-fluid" src=" <?php echo $template_directory;?>/img/icon-voce.svg" />
                <h5 class="text-uppercase mt-4" style="color: #fff;">Para você</h5>
                <p class="mt-4">Aqui você se cadastra e tem a oportunidade real de conseguir emprego.
                </p>
                <div class="mt-4">
                    <a href="./#depositions">

                        <h5>Veja os comentários</h5>
                    </a>
                </div>

                <!-- Modal 3 -->
                <!-- <div class="modal fade " id="ex-m-3" tabindex="-1" aria-labelledby="ex-m-l-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title text-dark" id="ex-m-l-1">PARA VOCÊ</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-dark">
                                <h6> * veja os depoimentos * </h6>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
</section>

<section class="container" id="vagas">

    <div class="box d-flex align-items-center justify-content-around center">
        <h4 class="mt-4 mb-4">FIQUE DE OLHO NAS NOSSAS VAGAS: </h4>
        <?php $template_directory = get_template_directory_uri(); ?>
        <img class="img-fluid" width="150px" src=" <?php echo $template_directory;?>/img/arrow.svg" />
        <button class="btn-vagas center"> <a href="./vagas">ver mais vagas</a> </button>
    </div>
    <div class="mt-4">
        <div class="row">
            <div class="col-md-6">
                <?php echo do_shortcode(' [job-postings show_filters = "true" limit="4" category="11"]  '); ?>
            </div>
            <div class="col-md-6">
                <?php echo do_shortcode(' [job-postings show_filters = "true" limit="4" category="12"]  '); ?>
            </div>
        </div>

    </div>


</section>

<section class="container" id="depositions">
    <div class="text-center m-title">
        <!-- <p><span>Sobre</span></p> -->
        <h2> Veja o que falam de nós 😊!</h2>
    </div>

    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->

            <div class="swiper-slide text-center">
                <div class="card-depoimentos">
                    <img class="rounded-circle depoimentos" src="https://i.pravatar.cc/100?img=11" alt="img cliente" />
                    <h4 class="mt-4">WPS Games</h4>
                    <p>
                        <em>" Obrigado Frequência RH, graças a vocês consequi contratar de forma rápida e fácil."</em>
                    </p>

                    <span>Wagner Paulo </span>
                    <small class="text-muted">Head Tech</small>
                </div>

            </div>
            <div class="swiper-slide text-center">
                <div class="card-depoimentos">
                    <img class="rounded-circle depoimentos" src="https://i.pravatar.cc/100?img=11" alt="img cliente" />
                    <h4 class="mt-4">WPS Games</h4>
                    <p>
                        <em>"Obrigado Frequência RH, graças a vocês consequi contratar de forma rápida e fácil."</em>
                    </p>

                    <span>Wagner Paulo </span>
                    <small class="text-muted">Head Tech</small>
                </div>
            </div>
            <div class="swiper-slide text-center">
                <div class="card-depoimentos">
                    <img class="rounded-circle depoimentos" src="https://i.pravatar.cc/100?img=11" alt="img cliente" />
                    <h4 class="mt-4">WPS Games</h4>
                    <p>
                        <em>"Obrigado Frequência RH, graças a vocês consequi contratar de forma rápida e fácil."</em>
                    </p>

                    <span>Wagner Paulo </span>
                    <small class="text-muted">Head Tech</small>
                </div>
            </div>

        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->


    </div>


</section>

<section class="container s-blog" id="s-blog">

    <div class="text-center m-title">
        <!-- <p><span>Blog</span></p> -->
        <h2> Veja nossas dicas</h2>
    </div>

    <div>
        <!-- encurtar title  -->
        <?php add_filter ('the_title', 'max_title_length'); ?>
        <?php echo do_shortcode ('[pgaf_post_filter limit="20" pgaf_post_filter all_filter_text="Todos" pgaf_post_filter grid="3"  content_words_limit="5" show_date="true" show_comments="false" show_author="false" extra_class=""]'); ?> <?php
		 	if(have_posts()):
				while( have_posts() ): the_post(); 
		 ?> <?php
		 		endwhile;
			else:
		 ?> <p>There is nothing yet to be displayed...</p>
        <?php endif; ?>

    </div>
</section>

<section class="container s-contact" id="contact">
    <div class="m-title text-center ">
        <!-- <p><span>Contato</span></p> -->
        <h2>Entre em contato conosco!</h2>
    </div>
    <div class="row">
        <div class="col-md-6 justify-content-center mb-5">
            <h3 class="center">Achamos os melhores profissionais com a maior rapidez!</h3>
            <img class="img-fluid mt-4" src="<?php echo $template_directory;?>/img/profissionais.svg"
                alt="contato imagem" />
        </div>

        <div class="col-md-6">

            <?php echo do_shortcode(' [wpforms id="79"] '); ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-4 text-center mt-4">
            <div class="card-contact">
                <div class="text-center">
                    <img width="34px" src="<?php echo $template_directory;?>/img/icon-message.svg"
                        alt="contato imagem" />
                </div>
                <h5 class="text-center mt-2"><a href="mailto:contato@frequenciarh.com">contato@frequenciarh.com</a></h5>
            </div>
        </div>


        <div class="col-md-4 text-center mt-4">
            <div class="card-contact">
                <div class="text-center">
                    <img width="34px" src="<?php echo $template_directory;?>/img/icon-phone.svg" alt="contato imagem" />
                </div>
                <h5 class="text-center mt-2 text-light"> <a
                        href="https://api.whatsapp.com/send?l=pt_BR&amp;phone=5512992546556">(12)992546556</a></h5>
            </div>
        </div>

        <div class="col-md-4 text-center mt-4">
            <div class="card-contact">
                <div class="text-center">
                    <img width="34px" src="<?php echo $template_directory;?>/img/icon-location.svg"
                        alt="contato imagem" />
                </div>
                <h5 class="text-center mt-2">São Bernado do Campo - SP</h5>
            </div>
        </div>


    </div>

</section>

<?php get_footer() ?>