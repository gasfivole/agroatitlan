<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

        <script type="text/javascript">

            jQuery(document).ready(function ($) {

                $("#menu-mainmenu a").addClass("page-scroll");
            });

        </script>

	</head>
	<body id="page-top" <?php body_class(); ?>>

    <!-- navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" style="padding-top: 0px">
    <?php do_action('icl_language_selector'); ?>
        <div class="clear"></div>
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php wp_nav_menu(array('menu' => 'MainMenu', 'menu_id' => '', 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapNavMenuWalker())); ?>
            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- header -->
    <header>
    </header>
    <!-- /header -->