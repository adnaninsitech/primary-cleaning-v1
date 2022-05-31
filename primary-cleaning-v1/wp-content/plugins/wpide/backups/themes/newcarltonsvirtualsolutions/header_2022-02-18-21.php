<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "37e37c9b895aa993a009729427d7a1e0ce37dfd526"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/themes/newcarltonsvirtualsolutions/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/plugins/wpide/backups/themes/newcarltonsvirtualsolutions/header_2022-02-18-21.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *

 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>


<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
  <link href="<?php bloginfo('template_directory'); ?>/images/favicon.png" rel="shortcut icon" type="image/x-icon" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


  <!-- Google Fonts -->





  <!-- owl carousel -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/font-icons/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/font-icons/style.scss" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

 
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fonts/font-awesome/css/font-awesome.css" />


  <?php
  /* We add some JavaScript to pages with the comment form
   * to support sites with threaded comments (when in use).
   */
  if ( is_singular() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );
  global $options;global $logo;global $copyrite;
  $options = get_option('cOptn');
  $logo = $options['logo'];
  $copyrite = $options['copyrite'];
  $size = 300;
  $options['logo'] = wp_get_attachment_image($logo, array($size, $size), false);
  $att_img = wp_get_attachment_image($logo, array($size, $size), false); 
  $logoSrc = wp_get_attachment_url($logo);
  $att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);

  /* Always have wp_head() just before the closing </head>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to add elements to <head> such
   * as styles, scripts, and meta tags.
   */
  wp_head();
  
  
  global $more;
  $more = 0;
  ?>
</head>

<body <?php body_class( $class ); ?>> 


<nav class="panel-menu" id="mobile-menu">
	<ul>

	</ul>
	<div class="mm-navbtn-names">
		<div class="mm-closebtn">Close</div>
		<div class="mm-backbtn">Back</div>
	</div>
</nav>
<header id="tt-header">
	<!-- holder-top (mobile) -->
	<div class="holder-top-mobile d-block d-md-none">
		<div class="h-topbox__content">
			<div class="tt-item">
				<div class="tt-item__icon">
					<span class="icon-1124618"></span>
				</div>
				<div class="tt-item__text">
					<address>
					<?php echo $options['Address']; ?>
					</address>
				</div>
			</div>
			<div class="tt-item">
				<div class="tt-item__icon">
					<span class="icon-70898"></span>
				</div>
				<div class="tt-item__text">
					Mon-Fri 08:00 AM - 05:00 PM
				</div>
			</div>
			<div class="tt-item">
				<div class="tt-item__icon">
					<span class="icon-70562"></span>
				</div>
				<div class="tt-item__text">
					<a href="mailto:<?php echo $options['email']; ?>"><?php echo $options['email']; ?></a>
				</div>
			</div>
			<div class="tt-item">
				<div class="tt-item__icon">
					<span class="icon-1034182"></span>
				</div>
				<div class="tt-item__text">
					<address>
						<a href="tel:<?php echo $options['phone_number']; ?> "><?php echo $options['phone_number']; ?></a>
					</address>

				</div>
			</div>
		</div>
		<a href="#" class="h-topbox__btn" id="js-toggle-h-holder">
			<i class="tt-arrow down"></i>
		</a>
		<a href="#" class="tt-btn"  data-toggle="modal" data-target="#modalMRequestQuote">REQUEST A QUOTE <span class="icon-271228"></span></a>
	</div>
	<!-- /holder-top (mobile) -->
	<!-- holder-top (desktop) -->
	<div class="holder-top-desktop d-none d-md-block">
		<div class="row">
			<div class="col-auto">
				<div class="h-info01">
					<div class="tt-item">
						<address>
							<span class="icon-1124618"></span> <?php echo $options['Address']; ?>
						</address>
					</div>
					<div class="tt-item">
						<span class="icon-70898"></span> Mon-Fri 08:00 AM - 04:00 PM
					</div>
					<div class="tt-item">
						<a href="mailto:<?php echo $options['email']; ?>">
							<span class="icon-70562"></span>  <?php echo $options['email']; ?>
						</a>
					</div>
				</div>
			</div>
			<!--<div class="col-auto ml-auto">
				<ul class="h-social">
					<li><a href="<?php echo $options['facebook']; ?>" target="_blank" class="icon-733605"></a></li>
					<li><a href="<?php echo $options['twitter']; ?>" target="_blank" class="icon-733635"></a></li>
					<li><a href="<?php echo $options['instagram']; ?>" target="_blank" class="icon-733614"></a></li>
				</ul>
			</div>-->
		</div>
	</div>
	<!-- /holder-top (desktop) -->
	<!-- holder- -->
	<div id="js-init-sticky">
		<div class="tt-holder-wrapper">
			<div class="tt-holder">
				<div class="tt-col-left">
					<!-- logo -->
						<a href="<?php echo site_url(); ?>" class="tt-logo tt-logo-alignment">
		<img class="" src="<?php echo $logoSrc; ?>" alt=""> 
	</a>
					<!-- /logo -->
				</div>
				<div class="tt-col-center tt-col-wide tt-col-objects tt-different-sides">
					<div class="tt-col__item">
						<!-- desktop-nav -->
						<nav id="tt-nav">
	<ul>
		<li><a href="<?php echo site_url(); ?>"><span>Home</span></a></li>
		<li><a href="<?php echo site_url(); ?>"><span>About Us</span></a></li>
		<li>
			<a href="<?php echo site_url(); ?>"><span>Our Services</span></a>
			<ul>
				<li><a href="<?php echo site_url(); ?>">Commercial Services</a></li>
				<li><a href="<?php echo site_url(); ?>">Residential Services</a></li>
			</ul>
		</li>
		<li><a href="<?php echo site_url(); ?>"><span>FAQs</span></a></li>
		<li>
			<a href="<?php echo site_url(); ?>"><span>Gift Certificate</span></a>
			<ul>
				<li><a href="<?php echo site_url(); ?>"><span>Referral Bonus</span></a></li>
			</ul>
		</li>
		<li><a href="<?php echo site_url(); ?>"><span>Join our Team</span></a></li>
		
		<li>
			<a href="<?php echo site_url(); ?>"><span>Contacts</span></a>
			
		</li>
	</ul>
	<div id="tt-nav__line"></div>
</nav>
						<!-- /desktop-nav -->
					</div>
					<div class="tt-col__item d-none d-md-block">
						<div class="h-info02">
							<div class="tt-item">
								<address>
									<a href="tel:<?php echo $options['phone_number']; ?>"><span class="icon-1034182"></span><?php echo $options['phone_number']; ?></a>
								</address>
							</div>
						</div>
					</div>
				</div>
				<div class="tt-col-right tt-col-objects">
					<div class="tt-col__item" style="opacity:0;">
						<div class="tt-obj tt-obj-cart js-dropdown-cart">
							<a href="#" class="tt-obj__btn">
								<i class="icon-905215"></i>
								<div class="tt-obj__badge">0</div>
							</a>
						</div>
					</div>
					<div class="tt-col__item d-none d-md-block">
						<a href="#" class="tt-btn" data-toggle="modal" data-target="#modalMRequestQuote">REQUEST A QUOTE <span class="icon-271228"></span></a>
					</div>
					<div class="tt-col__item toggle-wrapper">
						<a href="#" id="tt-menu-toggle" class="icon-menu"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<?php if(Is_home()|| is_front_page() ) { ?>

  

<?php } else { ?>

 
 <div id="subtitle-wrapper" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>)">
	<div class="container container-fluid-xl">
		<div class="tt-breadcrumbs">
			<ul>
				<li><a href="<?php echo site_url(); ?>">home</a></li>
				<li><?php echo the_title(); ?></li>
			</ul>
		</div>
		<h1 class="subtitle__title"><?php echo the_title(); ?></h1>
	</div>
</div>


<?php } ?>
 

        

 <div class="main-wrapper">