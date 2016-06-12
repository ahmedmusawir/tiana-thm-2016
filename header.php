<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- <h1><?php //echo bloginfo( 'charset' ); ?></h1> -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moose-frame' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-logo-social container-fluid">
			<?php
			    $front_header_image = get_field('front_header_image', 6); // 1476 is post id                               
			    $siteLogo = get_field('site_logo', 6); // 1476 is post id                               
			    $size = 'full'; // (thumbnail, medium, large, full or custom size)
			?>
		</div>

	
		<div class="navbar-container">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	
	  		  <div class="container-fluid">

			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			    <!-- <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="http://tiana/wp-content/uploads/2016/01/TianaGustafsonLogo.png" alt=""></a> -->
			    <!-- <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="logo-text"><span class="tiana-txt">TIANA</span> GUSTAFSON  <span class="bar">|</span>  <span class="firefly">firefly media</span></span></a> -->
			    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="logo-text"><span class="tiana-txt">TIANA</span> GUSTAFSON </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse navbar-ex1-collapse">

			    	
			        <?php
				        wp_nav_menu( array(
				            'theme_location' => 'primary',
				            'depth' => 2,
				            'container' => false,
				            'menu_class' => 'nav navbar-nav navbar-right',
				            'fallback_cb' => 'wp_page_menu',
				            //Process nav menu using our custom nav walker
				            'walker' => new wp_bootstrap_navwalker())
				        );
			        ?>
			    </div><!-- /.navbar-collapse --> 
	  		  </div><!-- /.container-fluid -->

			</nav>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

	<?php $page_header_image = get_field( 'page_header_image' ); ?>
	
	<header id="front-pg-header">

		<?php if ( is_home() || is_single() || is_archive() || is_search() || is_404() ) : ?>
			<img class="img-responsive hidden-xs" src="<?php echo $front_header_image; ?>" alt="tiana img">
			<img class="img-responsive visible-xs" src="/wp-content/uploads/2016/06/TianaNEWJuneBlock1BG_mobile-version.jpg" alt="">

			<!-- <div class="header-img-container">
				<div class="col-md-7 col-lg-7">
					<img class="header-txt-img" src="/wp-content/uploads/2016/06/header-text-img.jpg" alt="">
				</div>
			</div> -->
			<div class="header-text-container">

				<article class="header-text-box">
					<!-- <img class="header-txt-img img-responsive" src="/wp-content/uploads/2016/06/header-text-img.jpg" alt=""> -->

				<!-- 	<h3>ONLINE MARKETING MADE EASY.</h3>
					<h4>
						Join Thousands of other Entrepreneurs and get
						Instant Access to our Online Marketing Resources.
					</h4> -->

					<article class="header-btn-container block-center">
					

						<a class="btn btn-success btn-lg"  href="https://tianastar.leadpages.co/leadbox/145df2473f72a2%3A1497094e8b46dc/5655608640405504/" target="_blank">
							CLICK HERE TO SIGN UP!
						</a>
						<script data-leadbox="145df2473f72a2:1497094e8b46dc" data-url="https://tianastar.leadpages.co/leadbox/145df2473f72a2%3A1497094e8b46dc/5655608640405504/" data-config="%7B%7D" type="text/javascript" src="https://tianastar.leadpages.co/leadbox-1465587185.js"></script>					
						<!-- <a href="#" class="btn btn-success btn-lg" >
						  CLICK HERE TO SIGN UP!
						</a> -->
						<!-- <button type="button" class="btn btn-success btn-lg " data-toggle="modal" data-target="#myModal-header">
							  CLICK HERE TO SIGN UP!
							</button>				
						</article> -->


				</article>			
			</div>	
			
		<?php else : ?>
			<img class="img-responsive" src="<?php echo $page_header_image; ?>" alt="tiana img">
		<?php endif; ?>
	

	</header>


<!-- THE MODAL CODE -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      </div>
	      <div class="modal-body">

			<section id="popup-form-click" class="container">

				<div class="img-holder">
					<img class="img-responsive" src="/wp-content/uploads/2016/05/tiana-top.jpg" alt="">
				</div>

				<article class="popup-text">
					
					<h4>Ready to make more MONEY and have more FUN in your business?</h4>

					<p>Join thousands of other entrepreneurs and get instant access to my online marketing guides, worksheets and freebies.</p>

				</article>

				<article class="form-container">

					<!-- INFUSION READ CODE -->
					<form class="form" accept-charset="UTF-8" action="https://rp172.infusionsoft.com/app/form/process/8e7e8155679d72f01f3ee0775a3bd593" class="infusion-form" method="POST">
					    <input name="inf_form_xid" type="hidden" value="8e7e8155679d72f01f3ee0775a3bd593" />
					    <input name="inf_form_name" type="hidden" value="Free Marketing Worksheet" />
					    <input name="infusionsoft_version" type="hidden" value="1.53.0.67" />
					    <div class="infusion-field form-group">
					        <label for="inf_field_FirstName">First Name *</label>
					        <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" />
					    </div>
					    <div class="infusion-field form-group">
					        <label for="inf_field_Email">Valid Email *</label>
					        <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" />
					    </div>
					    <div class="infusion-field checkbox">
					        <!-- <span class="infusion-option"> -->

					            <label for="inf_option_SignUpOnMyInspireList">
					           		<input checked="checked" id="inf_option_SignUpOnMyInspireList" name="inf_option_SignUpOnMyInspireList" type="checkbox" value="223" />
					            	Sign Up On My Inspire List
					            </label>
					        <!-- </span> -->
					    </div>
					    <div class="infusion-submit">
					        <input type="submit" value="Sign Up!" />
					    </div>
					</form>
					<script type="text/javascript" src="https://rp172.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=6de7b0bc66d40391a6653e39e4657709"></script>

				</article>
				
			</section>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
	      </div>
	    </div>
	  </div>
	</div>					


<!-- THE MODAL CODE -->
	<!-- Modal -->
	<div class="modal fade" id="myModal-header" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"> </h4>
	      </div>
	      <div class="modal-body">

			<section id="popup-form-click" class="container">

				<div class="img-holder">
					<img class="img-responsive" src="/wp-content/uploads/2016/05/tiana-top.jpg" alt="">
				</div>

				<article class="popup-text">
					
					<h4>Ready to make more MONEY and have more FUN in your business?</h4>

					<p>Join thousands of other entrepreneurs and get instant access to my online marketing guides, worksheets and freebies.</p>

				</article>

				<article class="form-container">

					<!-- INFUSION READ CODE -->
					<form accept-charset="UTF-8" action="https://rp172.infusionsoft.com/app/form/process/79e728db504473c66e893dd67478ec93" class="infusion-form" method="POST">
					    <input name="inf_form_xid" type="hidden" value="79e728db504473c66e893dd67478ec93" />
					    <input name="inf_form_name" type="hidden" value="Sign Up on Website" />
					    <input name="infusionsoft_version" type="hidden" value="1.50.0.37" />

					    <div class="infusion-field row">
						   
						    <aside class="col-sm-12 col-md-12 col-lg-12">
						        <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" placeholder="First Name" type="text" />
						   </aside>    
					    </div>
					    <div class="infusion-field row">
						    
						    <aside class="col-sm-12 col-md-12 col-lg-12">
						        <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" placeholder="Email" type="text" />
						    </aside>    
					    </div>
					    <div class="infusion-submit row">
						    <aside class="col-md-12">
						        <input id="pop-submit" type="submit" value="OF COURSE! LET'S DO THIS!!" />
						    </aside>
					    </div>
					</form>
					<script type="text/javascript" src="https://rp172.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=6de7b0bc66d40391a6653e39e4657709">
					</script>
				</article>
				
			</section>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
	      </div>
	    </div>
	  </div>
	</div>					



















