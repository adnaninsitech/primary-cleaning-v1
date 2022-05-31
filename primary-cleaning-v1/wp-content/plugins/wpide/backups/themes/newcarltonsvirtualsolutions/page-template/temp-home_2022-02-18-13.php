<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "3c83875153c68e44b2bef5b254ee8ced86b7e022cb"){
                                        if ( file_put_contents ( "C:\xampp\htdocs\cleaning/wp-content/themes/newcarltonsvirtualsolutions/page-template/temp-home.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\xampp\htdocs\cleaning\wp-content\plugins\wpide/backups/themes/newcarltonsvirtualsolutions/page-template/temp-home_2022-02-18-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Home Template
 */

get_header(); ?>
<?php $banner= get_field('banner'); ?>

<main id="tt-pageContent">
	<div class="section-indent no-margin mainSlider-wrapper">
		<div id="js-mainSlider" class="mainSlider">
			<div class="slide">
				<div class="img--holder">
					<picture>
						<!--<source srcset="<?php echo $banner['bg_image']; ?>" media="(max-width: 767px)" type="image/webp">
						<source srcset="<?php echo $banner['bg_image']; ?>" media="(max-width: 767px)" type="image/png">
						<source srcset="<?php echo $banner['bg_image']; ?>" media="(max-width: 1024px)" type="image/webp">
						<source srcset="<?php echo $banner['bg_image']; ?>" media="(max-width: 1024px)" type="image/png">
						<source srcset="<?php echo $banner['bg_image']; ?>" type="image/webp">
						<source srcset="<?php echo $banner['bg_image']; ?>" type="image/png">-->
						<img src="<?php echo $banner['bg_image']; ?>" alt="">
					</picture>
				</div>
				<div class="slide-content">
					<div class="container container-fluid-lg js-rotation" data-animation="fadeInUpSm" data-animation-delay="0s">
						<div class="tt-text-01">Industry-Leading Guarantee</div>
						<div class="tt-text-02">Residential<br>& Commercial Sanitizing</div>
						<div class="tt-text-03">Imagine your home so clean, it’s clinically clean. Free from bacteria and viruses, free from mold and mildew.</div>
					</div>
				</div>
			</div>
<!--			<div class="slide">-->
<!--				<div class="img--holder">-->
<!--					<picture>-->
<!--						<source srcset="images/mainslide-02-sm.webp" media="(max-width: 767px)" type="image/webp">-->
<!--						<source srcset="images/mainslide-02-sm.jpg" media="(max-width: 767px)" type="image/png">-->
<!--						<source srcset="images/mainslide-02-md.webp" media="(max-width: 1024px)" type="image/webp">-->
<!--						<source srcset="images/mainslide-02-md.jpg" media="(max-width: 1024px)" type="image/png">-->
<!--						<source srcset="images/mainslide-02.webp" type="image/webp">-->
<!--						<source srcset="images/mainslide-02.jpg" type="image/png">-->
<!--						<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4AAAAMgAQMAAAD4P+14AAAAA1BMVEUZGRlL5qT9AAAA90lEQVR42uzBgQAAAACAoP2pF6kCAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGD24EAAAAAAAMj/tRFUVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVYU9OBAAAAAAAPJ/bQRVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVWkPDgkAAAAABP1/7QkjAAAAAAAAAAAAsAnxPgABkBmI6QAAAABJRU5ErkJggg==-->
<!--" data-lazy="images/mainslide-02.webp" alt="">-->
<!--					</picture>-->
<!--				</div>-->
<!--				<div class="slide-content">-->
<!--					<div class="container container-fluid-lg js-rotation text-center" data-animation="fadeInUpSm" data-animation-delay="0s">-->
<!--						<div class="tt-text-01">Professional Sanitizing Service</div>-->
<!--						<div class="tt-text-02">Disinfecting & Deodorizing<br>Spray Services</div>-->
<!--						<div class="tt-text-03">Our expert cleaners are carefully selected and then fully trained to give them a deep. </div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
		</div>
	</div>
	
</main>


<?php get_footer(); ?>