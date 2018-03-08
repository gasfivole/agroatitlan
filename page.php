<?php get_header(); ?>







<?php



    $lang = substr(get_bloginfo ( 'language' ), 0, 2);



    $translations = array(



        'en' => array(



            'back' => 'Back',



            'history' => 'HISTORY',



            'product' => 'PRODUCTS',



            'learn' => 'Learn More +',



            'gallery' => 'PHOTO GALLERY',



            'download' => 'Download Datasheet',



        ),



        'es' => array(



            'back' => 'Regresar',



            'history' => 'HISTORIA',



            'product' => 'PRODUCTOS',



            'learn' => 'Leer más +',



            'gallery' => 'GALERÍA DE FOTOS',



            'download' => 'Descargar Ficha Técnica',



        )



    );



    $pdf_link = get_post_meta( get_the_ID(), 'pdf-link', true );



?>





<?php if (have_posts()): while (have_posts()) : the_post(); ?>







    <!-- article -->



    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>







        <?php



            $id = $post->ID;



            if ($id == 446 || $id == 363) {



            }else{







        ?>







        <div id="background-image" style="background-image: url('<?php echo get_field('main_image')['url'] ?>');">



            <h1> <?php the_title(); ?></h1>



        </div>







       



        <div class="content">



            <div class="container">



                <div class="row">



                    <div class="col-lg-4 col-md-offset-2 text-center">



                        <!--h1><?php echo $translations[$lang]['history']; ?></h1-->



                         <?php the_content(); ?>



                    </div>



                    <div class="col-lg-4 text-center">



                        <img src="<?php echo get_field('preview_image')['url']; ?>" />



                        <?php



                            if($pdf_link == ""){}else{



                        ?>



                        <a href="<?php echo $pdf_link ?>" target="_blank">



                            <div style="display:table;margin-top: 20px;padding-left: 20px;">



                                <div style="display:table-cell;">



                                    <img src="http://agroatitlan.com/wp-content/uploads/2016/11/pdf-icon.png" alt="PDF" title="PDF" style="background: none!important;border:0px!important">



                                </div>



                                <div style="display:table-cell;vertical-align: middle;padding-left: 10px;">

                                    <div style="display:table-cell;color:#af4000;">

                                        <?php echo $translations[$lang]['download']; ?>

                                    </div>

                                </div>



                            </div>



                        </a>



                        <?php } ?>



                    </div>



                </div>



            </div>



        </div>



        <?php } ?>



        <div class="container" id="inner-content">



            <?php



                $excludeImages[] = get_field( "main_image" )['id'];



                $excludeImages[] = get_field( "preview_image" )['id'];



            ?>



            <div class="row">



                <div class="col-lg-12">



                    <?php



                        $id = $post->ID;



                        if ($id == 446 || $id == 363) {



                            if ($id == 446) {



                                $id_products = '98';



                            }else{



                                $id_products = '15';



                            }



                            $args = array(



                                'post_type'      => 'page',



                                'posts_per_page' => -1,



                                'post_parent'    => $id_products,



                                'order'          => 'ASC',



                                'orderby'        => 'menu_order'



                            );



                            $loop = new WP_Query( $args ); 



                    ?>



                        <h1 style="margin-top: 160px;"><?php echo $translations[$lang]['product']; ?></h1>



                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>



                        <div class="col-xs-4 col-sm-4 product">



                            <a href="<?php the_permalink();  ?>" style="display:block;position: relative;" class="lm_hover_a">



                                <div class="lm_hover_image">



                                    <div>



                                        <div>



                                            <div>



                                                <?php echo $translations[$lang]['learn']; ?>



                                            </div>



                                        </div>



                                    </div>



                                </div>



                                <img src="<?php echo get_field('preview_image')['url']; ?>" />



                                <div class="product-title">



                                    <h2><?php the_title(); ?></h2>



                                </div>



                            </a>



                        </div>



                        <?php endwhile; ?>



                        <div class="clear"></div>   







                    <?php  } else { ?>

                        <?php

                            $argsImages = array(

                                'post__not_in' => array(get_post_thumbnail_id($id)),

                                'post_type' => 'attachment',

                                'post_mime_type' => 'image',

                                'post_parent' => $id,

                                'post_status' => 'null',

                                'post_per_page' => -1,

                                'orderby' => 'title',

                                'order' => 'ASC',

                                'post__not_in' => $excludeImages

                            );

                            $imagesArgs = new WP_Query($argsImages);
                            if($imagesArgs->have_posts()){

                        ?>
                            <h1><?php echo $translations[$lang]['gallery']; ?></h1>

                            <div style="margin: 0 auto">

                                <ul class="bxslider">

                                    
                                      
                                   
                                    <?php

                                        $args = array(

                                            'post__not_in' => array(get_post_thumbnail_id($id)),

                                            'post_type' => 'attachment',

                                            'post_mime_type' => 'image',

                                            'post_parent' => $id,

                                            'post_status' => 'null',

                                            'post_per_page' => -1,

                                            'orderby' => 'title',

                                            'order' => 'ASC',

                                            'post__not_in' => $excludeImages

                                        );

                                        $images = new WP_Query($args);

                                        while ($images->have_posts()):$images->the_post();

                                            $image = wp_get_attachment_image_src($id, 'full');

                                            echo '<li><img src="' . $image[0] . '" /></li>';

                                        endwhile;

                                        wp_reset_postdata();

                                    ?>

                                </ul>

                            </div>
                             
                            <script type="text/javascript">

                                $(document).ready(function(){

                                    $('.bxslider').bxSlider({

                                        mode: 'fade',

                                        auto: false,

                                        pager: false

                                    });

                                });



                            </script>

                            <div class="clear"></div>

                            <p>

				<?php if($translations[$lang] == 'en'){ ?>

                                	<a href="/en/crops/" class="details">

				<?php }else{ ?>

                                	<a href="/cultivos/" class="details">

				<?php } ?>

                                    &lt; <?php echo $translations[$lang]['back']; ?> 

                                </a>

                            </p>

                        <?php

                                }

                        ?>

                    <?php } ?>













                </div>



            </div>







        </div>







        <script type="text/javascript">



            $(document).ready(function(){



                $('#home-menu').parent('a').attr("href", "<?php echo esc_url( home_url( '/' ) ); ?>");



            });



        </script>







    </div>



    <!-- /article -->







<?php endwhile; ?>







<?php endif; ?>







<?php get_footer(); ?>



