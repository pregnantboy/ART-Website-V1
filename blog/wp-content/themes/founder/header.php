<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<?php wp_head(); ?>
</head>

<body id="<?php print get_stylesheet(); ?>" <?php body_class(); ?>>
	<?php do_action( 'body_top' ); ?>
    <script src="/blog/wp-content/themes/founder/js/bootstrap.min.js"></script>
	<div id="overflow-container" class="overflow-container">
		<div id="max-width" class="max-width">
			<?php do_action( 'before_header' ); ?>
			<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-thick">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a href="/blog" class= "page-scroll"><img src= "/blog/wp-content/themes/founder/assets/images/logosmall.png" class = "navbar-logo"/></a>
                    <a class="navbar-brand page-scroll" href="/blog" id="navbar-brand">
                    ARTS Blog</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right navwhite">
                        <li >
                            <a class="page-scroll" href="/">Home</a>
                        </li>
                        <li >
                            <a class="page-scroll" href="/concept.html">Concept</a>
                        </li>
                        <li>
                            <a class="page-scroll " href="/insurance.html">Insurance</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/technology.html">Technology</a>
                        </li>
                        <li class="active">
                            <a class="page-scroll" href="/blog">Blog</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
			<header class="site-header" id="site-header" role="banner">
				<button id="toggle-navigation" class="toggle-navigation" name="toggle-navigation" aria-expanded="false">
					<span class="screen-reader-text"><?php _e( 'open menu', 'founder' ); ?></span>
					<i class="fa fa-bars" title="<?php _e( 'primary menu icon', 'founder' ); ?>" aria-hidden="true"></i>
				</button>
				<div id="menu-primary-container" class="menu-primary-container">
					<?php get_template_part( 'menu', 'primary' ); ?>
					<?php ct_founder_social_icons_output( 'header' ); ?>
					<?php get_template_part( 'content/search-bar' ); ?>
				</div>
			</header>
			<?php do_action( 'after_header' ); ?>
			<?php get_sidebar( 'primary' ); ?>
			<?php do_action( 'before_main' ); ?>
			<section id="main" class="main" role="main">
				<?php do_action( 'main_top' );
				if ( function_exists( 'yoast_breadcrumb' ) ) {
					yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
				}