<?php global $themeOptions; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->  
<!--[if IE 9]> <html <?php language_attributes(); ?> class="ie9"> <![endif]-->  
<!--[if !IE]><!--> 
<html <?php language_attributes(); ?>> <!--<![endif]-->  
	<head>
		<title>
			<?php
                global $page, $paged;
                wp_title( '|', true, 'right' );
                // Add the blog name.
                bloginfo( 'name' );
                // Add the blog description for the home/front page.
                $site_description = get_bloginfo( 'description', 'display' );
                if ( $site_description && ( is_home() || is_front_page() ) )
                    echo " | $site_description";
                // Add a page number if necessary:
                if ( $paged >= 2 || $page >= 2 )
                    echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
            ?>
		</title>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" />
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script type="text/javascript">
			_theme = {
				template_path: "<?php bloginfo('template_directory'); ?>"
			};
		</script>

    	<?php wp_head(); ?>
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	</head>
<body>
	<div class="container">
		<div class="row clearfix">
			<div class="col-md-12">
				<nav class="navbar navbar-su">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#">
					  	<img src="<?php echo $themeOptions['logo']['url']; ?>" />
				      </a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="main-menu">
				      <ul class="nav navbar-nav">
				        <li class="dropdown active">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Lines &amp; Calls <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="#">ISDN</a></li>
				            <li><a href="#">SIP trunks (VoIP)</a></li>
				          </ul>
				        </li>
				        <li><a href="#">Internet</a></li>
				        <li><a href="#">Mobiles</a></li>
				        <li><a href="#">Telephone Systems</a></li>
				        <li><a href="#">Renewable Energy</a></li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>