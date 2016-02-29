<!DOCTYPE html>
<!--[if IE 9 ]>
<html class="ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->

<head>		
		<title>Asia Risk Transfer Solutions</title>
		
	<?php wp_head(); ?>
</head>

<body id="<?php print get_stylesheet(); ?>" <?php body_class( 'ct-body' ); ?>>
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-thick wow fadeIn" style= "display:none">
		            <div class="container-fluid">
		                <!-- Brand and toggle get grouped for better mobile display -->
		                <div class="navbar-header">
		                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                        <span class="sr-only"></span>
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                    </button>
		                    <a href="/blog" class= "page-scroll"><img src= "/img/logosmall.png" class = "navbar-logo"/></a>
		                    <a class="navbar-brand page-scroll navwhite" href="/blog" id="navbar-brand">
		                     Asia Risk Transfer Solutions Blog</a>
		                </div>

		                <!-- Collect the nav links, forms, and other content for toggling -->
		                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		                    <ul class="nav navbar-nav navbar-right">
		                        <li>
		                            <a class="page-scroll" href="/">Home</a>
		                        </li>
		                        <li>
		                            <a class="page-scroll" href="/team.html">About Us</a>
		                        </li>
		                        <li>
		                            <a class="page-scroll blogactive" href="/blog">Blog</a>
		                        </li>
		                        <li>
		                            <a class="page-scroll" href="/contact.html">Contact</a>
		                        </li>
		                    </ul>
		                </div>
		                <!-- /.navbar-collapse -->
		            </div>
            <!-- /.container-fluid -->
        </nav>
	<?php do_action( 'tracks_body_top' ); ?>
	<div id="overflow-container" class="overflow-container">
		<a class="skip-content" href="#main"><?php _e( 'Skip to content', 'tracks' ); ?></a>
		<header id="site-header" class="site-header" role="banner">
			<?php get_template_part( 'content/top-navigation' ); ?>
			<div class="container">
				<div id="title-info" class="title-info">
					<?php get_template_part( 'logo' ) ?>
				</div>
				<?php get_template_part( 'menu', 'primary' ); ?>
			</div>
		</header>
		<div id="main" class="main" role="main">
			<?php if ( function_exists( 'yoast_breadcrumb' ) ) {
				yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
			}