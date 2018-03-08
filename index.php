<?php get_header(); ?>



<?php

$lang = substr(get_bloginfo ( 'language' ), 0, 2);



$translations = array(

    'en' => array(

        'home_banner_text' => 'MORE THAN 80 YEARS OF SUSTAINABLE CROPS',

        'our_farms' => 'FARMS',

        'mission_vission' => 'Mission and Vission',

        'read_more' => 'Read more',

        'natural_reserves' => 'NATURAL RESERVES AND STUDIES',

        'certifications' => 'CERTIFICATIONS',

        'contact_us' => 'CONTACT US',

        'address' => "Diagonal 6 10-01 Torre II Oficina 10-02B, Centro Gerencial Las Margaritas, Central America, Guatemala City 0110<br/> Phones +502 2334-7295 / +502 5201 9367",

        'form_name' => 'Name',

        'form_email' => 'Email Address',

        'form_message' => 'Message',

        'form_send' => 'SEND',

        'form_name_error' => 'Please enter your name.',

        'form_email_error' => 'Please enter your email address.',

        'form_email_invalid_error' => 'Not a valid email address.',

        'form_message_error' => 'Please enter a message.',

    ),

    'es' => array(

        'home_banner_text' => 'más de 80 años de cultivos sostenibles',

        'our_farms' => 'FINCAS',

        'mission_vission' => 'Misión y Visión',

        'read_more' => 'Más información',

        'natural_reserves' => 'RESERVAS Y ESTUDIOS',

        'certifications' => 'CERTIFICACIONES',

        'contact_us' => 'CONTÁCTENOS',

        'address' => "Diagonal 6 10-01 Torre II Oficina 10-02B, Centro Gerencial Las Margaritas, Centro América, Guatemala 0110<br/> Teléfonos +502 2334-7295 / +502 5201 9367",

        'form_name' => 'Su nombre',

        'form_email' => 'Su correo electrónico',

        'form_message' => 'Déjenos su mensaje',

        'form_send' => 'ENVIAR',

        'form_name_error' => 'Por favor escriba su nombre.',

        'form_email_error' => 'Por favor escriba su correo.',

        'form_email_invalid_error' => 'No es una dirección de correo valida.',

        'form_message_error' => 'Por favor escriba su mensaje.',

    )

);

?>



    <div id="background-image" style="background-image: url('<?php bloginfo("template_url")?>/img/home.jpg');">

        <h1><?php echo $translations[$lang]['home_banner_text']; ?></h1>

    </div>



    <!-- quienes somos -->

    <section id="nosotros">

        <div class="container">



            <?php

            // the query

            $args = array(

                'post_type' => 'page',

                'post__in' => array( 2 )

            );

            $the_query = new WP_Query( $args ); ?>



            <?php if ( $the_query->have_posts() ) : ?>



                <!-- pagination here -->



                <!-- the loop -->

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



                    <div class="row">

                        <div class="col-lg-12 text-center">

                            <h1 class="section-heading"><?php the_title(); ?></h1>

                        </div>

                    </div>



                    <div class="row">

                        <div class="col-md-12">



                            <?php the_content(); ?>



                            <p><a href="#modal" class="details"><?php echo $translations[$lang]['mission_vission']; ?> &gt;</a></p>



                        </div>

                    </div>



                <?php endwhile; ?>

                <!-- end of the loop -->



                <!-- pagination here -->



                <?php wp_reset_postdata(); ?>



            <?php endif; ?>



        </div>

    </section>



    <section id="fincas" class="blue">

        <div class="container">



            <div class="row">

                <div class="col-lg-12 text-center">

                    <h1 class="section-heading"><?php echo $translations[$lang]['our_farms']; ?></h1>

                </div>

            </div>



            <div class="row">

                <div class="col-xs-4 col-sm-4 spacer">



                    <?php

                    // the query

                    $args = array(

                        'post_type' => 'page',

                        'post__in' => array( 15 )

                    );

                    $the_query = new WP_Query( $args ); ?>



                    <?php if ( $the_query->have_posts() ) : ?>



                        <!-- pagination here -->



                        <!-- the loop -->

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



                            <img src="<?php echo get_field('preview_image')['url']; ?>" />



                            <div class="row">

                                <div class="col-lg-12 text-center">

                                    <h2 class="section-heading"><?php the_title(); ?></h2>

                                </div>

                            </div>



                            <div class="row">

                                <div class="col-md-12">



                                    <?php the_content(); ?>



                                </div>

                            </div>



                        <?php endwhile; ?>

                        <!-- end of the loop -->



                        <!-- pagination here -->



                        <?php wp_reset_postdata(); ?>



                    <?php endif; ?>



                    <a href="<?php echo get_permalink( icl_object_id(15, 'page', true) ); ?>" class="details"><?php echo $translations[$lang]['read_more']; ?> &gt;</a>



                </div>



                <div class="col-xs-4 col-sm-4 spacer" style="border-style: solid; border-width: 0 1px; border-color: lightgrey;">



                    <?php

                    // the query

                    $args = array(

                        'post_type' => 'page',

                        'post__in' => array( 17 )

                    );

                    $the_query = new WP_Query( $args ); ?>



                    <?php if ( $the_query->have_posts() ) : ?>



                        <!-- pagination here -->



                        <!-- the loop -->

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



                            <img src="<?php echo get_field('preview_image')['url']; ?>" />



                            <div class="row">

                                <div class="col-lg-12 text-center">

                                    <h2 class="section-heading"><?php the_title(); ?></h2>

                                </div>

                            </div>



                            <div class="row">

                                <div class="col-md-12">



                                    <?php the_content(); ?>



                                </div>

                            </div>



                        <?php endwhile; ?>

                        <!-- end of the loop -->



                        <!-- pagination here -->



                        <?php wp_reset_postdata(); ?>



                    <?php endif; ?>



                    <a href="<?php echo get_permalink( icl_object_id(17, 'page', true) ); ?>" class="details"><?php echo $translations[$lang]['read_more']; ?> &gt;</a>



                </div>



                <div class="col-xs-4 col-sm-4 spacer">



                    <?php

                    // the query

                    $args = array(

                        'post_type' => 'page',

                        'post__in' => array( 19 )

                    );

                    $the_query = new WP_Query( $args ); ?>



                    <?php if ( $the_query->have_posts() ) : ?>



                        <!-- pagination here -->



                        <!-- the loop -->

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



                            <img src="<?php echo get_field('preview_image')['url']; ?>" />



                            <div class="row">

                                <div class="col-lg-12 text-center">

                                    <h2 class="section-heading"><?php the_title(); ?></h2>

                                </div>

                            </div>



                            <div class="row">

                                <div class="col-md-12">



                                    <?php the_content(); ?>



                                </div>

                            </div>



                        <?php endwhile; ?>

                        <!-- end of the loop -->



                        <!-- pagination here -->



                        <?php wp_reset_postdata(); ?>



                    <?php endif; ?>



                    <a href="<?php echo get_permalink( icl_object_id(19, 'page', true) ); ?>" class="details"><?php echo $translations[$lang]['read_more']; ?> &gt;</a>



                </div>

            </div>



        </div>

    </section>



    <section id="reservas" class="white">

        <div class="container">



            <div class="row">

                <div class="col-lg-12 text-center">

                    <h1 class="section-heading"><?php echo $translations[$lang]['natural_reserves']; ?></h1>

                </div>

            </div>



            <div class="row">

                <div class="col-xs-6 col-sm-6 spacer" style="border-style: solid; border-width: 0 1px 0 0; border-color: lightgrey;">



                    <?php

                    // the query

                    $args = array(

                        'post_type' => 'page',

                        'post__in' => array( 21 )

                    );

                    $the_query = new WP_Query( $args ); ?>



                    <?php if ( $the_query->have_posts() ) : ?>



                        <!-- pagination here -->



                        <!-- the loop -->

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



                            <img src="<?php echo get_field('preview_image')['url']; ?>" />



                            <div class="row">

                                <div class="col-lg-12 text-center">

                                    <h2 class="section-heading"><?php the_title(); ?></h2>

                                </div>

                            </div>



                            <div class="row">

                                <div class="col-md-12">



                                    <p><?php echo get_excerpt(); ?></p>



                                    <a target="_blank" href="<?php bloginfo("template_url")?>/downloads/pampojila-reserva-privada.pdf" class="details"><?php echo $translations[$lang]['read_more']; ?> &gt;</a>



                                </div>

                            </div>



                        <?php endwhile; ?>

                        <!-- end of the loop -->



                        <!-- pagination here -->



                        <?php wp_reset_postdata(); ?>



                    <?php endif; ?>



                </div>

                <div class="col-xs-6 col-sm-6 spacer">



                    <?php

                    // the query

                    $args = array(

                        'post_type' => 'page',

                        'post__in' => array( 23 )

                    );

                    $the_query = new WP_Query( $args ); ?>



                    <?php if ( $the_query->have_posts() ) : ?>



                        <!-- pagination here -->



                        <!-- the loop -->

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



                            <img src="<?php echo get_field('preview_image')['url']; ?>" />



                            <div class="row">

                                <div class="col-lg-12 text-center">

                                    <h2 class="section-heading"><?php the_title(); ?></h2>

                                </div>

                            </div>



                            <div class="row">

                                <div class="col-md-12">



                                    <p><?php echo get_excerpt(); ?></p>



                                    <?php

                                    // ID of a given category

                                    $category_id = 9;



                                    // Get the URL of this category

                                    $category_link = get_category_link( $category_id );

                                    ?>



                                    <a href="<?php echo esc_url( $category_link ); ?>" class="details"><?php echo $translations[$lang]['read_more']; ?> &gt;</a>



                                </div>

                            </div>



                        <?php endwhile; ?>

                        <!-- end of the loop -->



                        <!-- pagination here -->



                        <?php wp_reset_postdata(); ?>



                    <?php endif; ?>



                </div>

            </div>



        </div>

    </section>

<!--

    <section id="certificaciones" class="white">

        <div class="container">



            <div class="row">

                <div class="col-lg-12 text-center">

                    <h1 class="section-heading"><?php echo $translations[$lang]['certifications']; ?></h1>

                </div>

            </div>



            <div class="row">

                <div class="col-md-12">

	<?php if($lang == 'en'){ ?>
             	<?php echo do_shortcode('[owl-carousel category="homepage" items="5" autoPlay="true" navigation="false" pagination="false" slideSpeed="900" paginationSpeed="400"]'); ?> 
	<?php }else{ ?>
		<?php echo do_shortcode('[owl-carousel category="eshome" items="5" autoPlay="true" navigation="false" pagination="false" slideSpeed="900" paginationSpeed="400"]'); ?>
	<?php } ?>

 	



                </div>

            </div>



        </div>

    </section>

-->

    <section id="responsabilidad" class="blue">

        <div class="container">



            <?php

            // the query

            $args = array(

                'post_type' => 'page',

                'post__in' => array( 25 )

            );

            $the_query = new WP_Query( $args ); ?>



            <?php if ( $the_query->have_posts() ) : ?>



                <!-- pagination here -->



                <!-- the loop -->

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



                    <div class="row">

                        <div class="col-lg-12 text-center">

                            <h1 class="section-heading"><?php the_title(); ?></h1>

                        </div>

                    </div>



                    <div class="row">

                        <div class="col-md-12">



                            <?php the_content(); ?>



                        </div>

                    </div>



                <?php endwhile; ?>

                <!-- end of the loop -->



                <!-- pagination here -->



                <?php wp_reset_postdata(); ?>



            <?php endif; ?>



            <div class="row padding box">

                <div class="col-xs-4 col-sm-4">

                    <img src="<?php bloginfo("template_url")?>/img/responsabilidad-social/estimulaciontempr.jpg" />

                    <p>Centro de Estimulación Temprana</p>

                </div>

                <div class="col-xs-4 col-sm-4">

                    <img src="<?php bloginfo("template_url")?>/img/responsabilidad-social/escuelasantaadelaida.jpg" />

                    <p>Escuela Oficial Rural Mixta Santa Adelaida</p>

                </div>

                <div class="col-xs-4 col-sm-4">

                    <img src="<?php bloginfo("template_url")?>/img/responsabilidad-social/centrocomesfuerzo.jpg" />

                    <p>Centro Comunitario de Diversificado El Esfurezo</p>

                </div>

            </div>



        </div>

    </section>



<!--

    <section id="noticias">

        <div class="container">



            <div class="row">

                <div class="col-lg-12 text-center">

                    <h1 class="section-heading">NOTICIAS</h1>

                </div>

            </div>



            <?php

            $args = array(

                'post_type'      => 'post',

                'posts_per_page' => -1,

                'category_name'         => 'noticias',

                'order'          => 'ASC',

                'orderby'        => 'menu_order'

            );



            $loop = new WP_Query( $args ); ?>



            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>



                <div class="row">

                    <div class="col-xs-12 col-sm-12">

                        <div class="row news">

                            <p><strong><?php the_title(); ?></strong><br/><?php the_time( get_option( 'date_format' ) ); ?></p>

                            <p><?php echo the_content(); ?></p>

                        </div>

                    </div>

                </div>



            <?php endwhile; ?>



        </div>

    </section>

-->

    <section id="contacto" class="gray">

        <div class="container">



            <div class="row">

                <div class="col-lg-12 text-center">

                    <h1 class="section-heading"><?php echo $translations[$lang]['contact_us']; ?></h1>

                </div>

            </div>



            <div class="row">

                <p><strong><?php echo $translations[$lang]['address']; ?></strong></p>

            </div>



            <div class="row">



                <div class="row">

                    <div id="message-success" style="display: none;">

                        <div class='alert alert-success'>

                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>

                            <strong>Your message has been sent. </strong>

                        </div>

                    </div>

                    <div id="message-error" style="display: none;">

                        <div class='alert alert-danger'>

                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>

                            <strong>Sorry, it seems that my mail server is not responding. Please try again later!

                        </div>

                    </div>

                </div>

                <form name="sentMessage" id="contactForm" novalidate>

                    <div class="row control-group">

                        <div class="form-group col-xs-6 floating-label-form-group controls">

                            <input type="text" class="form-control" placeholder="<?php echo $translations[$lang]['form_name']; ?>" id="name" required data-validation-required-message="<?php echo $translations[$lang]['form_name_error']; ?>">

                            <p class="help-block text-danger"></p>

                        </div>



                        <div class="form-group col-xs-6 floating-label-form-group controls">

                            <input type="email" message="<?php echo $translations[$lang]['form_email_invalid_error']; ?>" class="form-control" placeholder="<?php echo $translations[$lang]['form_email']; ?>" id="email" required data-validation-required-message="<?php echo $translations[$lang]['form_email_error']; ?>">

                            <p class="help-block text-danger"></p>

                        </div>

                    </div>

                    <div class="row control-group">

                        <div class="form-group col-xs-12 floating-label-form-group controls">

                            <textarea rows="5" class="form-control" placeholder="<?php echo $translations[$lang]['form_message']; ?>" id="message" required data-validation-required-message="<?php echo $translations[$lang]['form_message_error']; ?>"></textarea>

                            <p class="help-block text-danger"></p>

                        </div>

                    </div>

					<div id="panel-recaptcha">

						<div class="g-recaptcha" data-sitekey="6LeU9RsTAAAAAAuorGvASTMTmuzBrbZ1Yp2NFn-v"></div>

					</div>

                    <div class="row">

                        <div class="form-group col-xs-12 text-center">

                            <button type="submit" class="btn btn-success btn-lg"><?php echo $translations[$lang]['form_send']; ?></button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </section>



    <!-- modal -->

    <div class="remodal" data-remodal-id="modal">

        <button data-remodal-action="close" class="remodal-close"></button>

        <?php

        // the query

        $args = array(

            'post_type' => 'page',

            'post__in' => array( 13 )

        );

        $the_query = new WP_Query( $args ); ?>



        <?php if ( $the_query->have_posts() ) : ?>



            <!-- pagination here -->



            <!-- the loop -->

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



                <div class="row">

                    <div class="col-xs-6 col-sm-6">

                        <img src="<?php echo get_field('preview_image')['url']; ?>" />

                    </div>

                    <div class="col-xs-6 col-sm-6">

                        <?php the_content(); ?>

                    </div>

                </div>



            <?php endwhile; ?>

            <!-- end of the loop -->



            <!-- pagination here -->



            <?php wp_reset_postdata(); ?>



        <?php endif; ?>

    </div>



    <div class="remodal" data-remodal-id="modal-2">

        <button data-remodal-action="close" class="remodal-close"></button>



        <?php

        // the query

        $args = array(

            'post_type' => 'page',

            'post__in' => array( 153 )

        );

        $the_query = new WP_Query( $args ); ?>



        <?php if ( $the_query->have_posts() ) : ?>



            <!-- pagination here -->



            <!-- the loop -->

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



                <div class="row">

                    <div class="col-xs-6 col-sm-6">

                        <img src="<?php echo get_field('preview_image')['url']; ?>" />

                    </div>

                    <div class="col-xs-6 col-sm-6">

                        <?php the_content(); ?>

                    </div>

                </div>



            <?php endwhile; ?>

            <!-- end of the loop -->



            <!-- pagination here -->



            <?php wp_reset_postdata(); ?>



        <?php endif; ?>

    </div>



    <div class="remodal" data-remodal-id="modal-3">

        <button data-remodal-action="close" class="remodal-close"></button>



        <?php

        // the query

        $args = array(

            'post_type' => 'page',

            'post__in' => array( 156 )

        );

        $the_query = new WP_Query( $args ); ?>



        <?php if ( $the_query->have_posts() ) : ?>



            <!-- pagination here -->



            <!-- the loop -->

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



                <div class="row">

                    <div class="col-xs-6 col-sm-6">

                        <img src="<?php echo get_field('preview_image')['url']; ?>" />

                    </div>

                    <div class="col-xs-6 col-sm-6">

                        <?php the_content(); ?>

                    </div>

                </div>



            <?php endwhile; ?>

            <!-- end of the loop -->



            <!-- pagination here -->



            <?php wp_reset_postdata(); ?>



        <?php endif; ?>

    </div>



    <div class="remodal" data-remodal-id="modal-4">

        <button data-remodal-action="close" class="remodal-close"></button>



        <?php

        // the query

        $args = array(

            'post_type' => 'page',

            'post__in' => array( 158 )

        );

        $the_query = new WP_Query( $args ); ?>



        <?php if ( $the_query->have_posts() ) : ?>



            <!-- pagination here -->



            <!-- the loop -->

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



                <div class="row">

                    <div class="col-xs-6 col-sm-6">

                        <img src="<?php echo get_field('preview_image')['url']; ?>" />

                    </div>

                    <div class="col-xs-6 col-sm-6">

                        <?php the_content(); ?>

                    </div>

                </div>



            <?php endwhile; ?>

            <!-- end of the loop -->



            <!-- pagination here -->



            <?php wp_reset_postdata(); ?>



        <?php endif; ?>

    </div>



    <div class="remodal" data-remodal-id="modal-5">

        <button data-remodal-action="close" class="remodal-close"></button>



        <?php

        // the query

        $args = array(

            'post_type' => 'page',

            'post__in' => array( 160 )

        );

        $the_query = new WP_Query( $args ); ?>



        <?php if ( $the_query->have_posts() ) : ?>



            <!-- pagination here -->



            <!-- the loop -->

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



                <div class="row">

                    <div class="col-xs-6 col-sm-6">

                        <img src="<?php echo get_field('preview_image')['url']; ?>" />

                    </div>

                    <div class="col-xs-6 col-sm-6">

                        <?php the_content(); ?>

                    </div>

                </div>



            <?php endwhile; ?>

            <!-- end of the loop -->



            <!-- pagination here -->



            <?php wp_reset_postdata(); ?>



        <?php endif; ?>

    </div>



<?php //get_sidebar(); ?>



<?php get_footer(); ?>

