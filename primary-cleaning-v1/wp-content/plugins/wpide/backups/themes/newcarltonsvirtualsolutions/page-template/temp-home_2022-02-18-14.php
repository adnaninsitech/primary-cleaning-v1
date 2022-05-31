<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "3c83875153c68e44b2bef5b254ee8ced86b7e022cb"){
                                        if ( file_put_contents ( "C:\xampp\htdocs\cleaning/wp-content/themes/newcarltonsvirtualsolutions/page-template/temp-home.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\xampp\htdocs\cleaning\wp-content\plugins\wpide/backups/themes/newcarltonsvirtualsolutions/page-template/temp-home_2022-02-18-14.php") )  ) ){
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
<?php $banner= get_field('banner'); 
$experience = get_field('experience'); 
$residential = get_field('residential_tabs'); 


?>

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
					<?php echo $banner['bg_text']; ?>
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
	
	<div class="section-indent-extra">
		<div class="container container-fluid-lg no-gutters-lg">
			<div class="added-info row">
			
			<?php if( have_rows('coverage') ): while( have_rows('coverage') ) : the_row(); ?>
				<a href="<?php echo get_sub_field('link'); ?>" class="added-info__item col-md-4">
					<div class="added-info__icon"><i class="<?php echo get_sub_field('icon'); ?>"></i></div>
					<div class="added-info__description">
						<?php echo get_sub_field('content'); ?>
					</div>
				</a>
				
				<?php endwhile; endif; ?>
				
				
				
			</div>
		</div>
	</div>
	
	<div class="section-indent">
		<div class="container container-fluid-lg">
			<div class="title-block">
				<div class="title-block__label">
					More than 25 Years of Experience
				</div>
				<h4 class="title-block__title">
					Certified Sanitizing Company
				</h4>
			</div>
			<div class="tt-typography row">
				<div class="col-md-12 col-lg-4">
					<blockquote class="blockquote-01">
						<img src="<?php echo $experience['img_1']; ?>" data-src="<?php echo $experience['img_1']; ?>" class="blockquote-01__icon lazyload" alt="">
						<?php echo $experience['content']; ?>
						<img class="sign-img lazyload" src="<?php echo $experience['img_2']; ?>" data-src="<?php echo $experience['img_2']; ?>" alt="">
					</blockquote>
				</div>
				<div class="divider d-block d-lg-none"></div>
				<div class="col-md-6 col-lg-4">
				<?php echo $experience['content_2']; ?>
				
				</div>
				<div class="divider d-block d-md-none"></div>
				<div class="col-md-6 col-lg-4">
				<?php echo $experience['content_3']; ?>
					
				</div>
			</div>
		</div>
	</div>
	
	<div class="section-indent">
		<div class="tabs-default tabs-layout-01">
			<div class="container container-fluid-lg tt-ajax-tabs" style="height: 82px;">
				<ul class="nav nav-tabs nav-tabs__right" role="tablist">
					<li class="nav-item">
						<a class="nav-link active show" data-toggle="tab" href="#tt-tab-01" role="tab" aria-selected="true">
							<span class="tt-large">Residential</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link include" data-toggle="tab" data-ajax-include="ajax-content/tabs-commercial.html" href="#tt-tab-02" role="tab" aria-selected="false">
							<span class="tt-large">Commercial</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane fade active show" id="tt-tab-01" role="tabpanel">
					<div class="tab-layout01">
						<div class="tab-layout01__img">
							<picture>
								<!--<source srcset="images/tab-layout01-img01-sm.webp" media="(max-width: 767px)" type="image/webp">
								<source srcset="images/tab-layout01-img01-sm.png" media="(max-width: 767px)" type="image/png">
								<source srcset="images/tab-layout01-img01-md.webp" media="(max-width: 1024px)" type="image/webp">
								<source srcset="images/tab-layout01-img01-md.png" media="(max-width: 1024px)" type="image/png">
								<source srcset="images/tab-layout01-img01.webp" type="image/webp">
								<source srcset="images/tab-layout01-img01.png" type="image/png">-->
								<img src="<?php echo $residential['image']; ?>" alt="">
							</picture>
						</div>
						<div class="tab-layout01__descriptions">
						     
							<h5 class="tab-layout01__title"><?php echo $residential['title']; ?></h5>
							<?php echo $residential['content']; ?>
							
							<div class="tt-icon-list">
								<div class="tt-item">
									<div class="tt-item__img"><i class="icon-2819968"></i></div>
									<div class="tt-item__title">
										Mattress<br> Sanitizing
									</div>
								</div>
								<div class="tt-item">
									<div class="tt-item__img"><i class="icon-533676"></i></div>
									<div class="tt-item__title">
										Furniture<br> Sanitizing
									</div>
								</div>
								<div class="divider_xs d-block d-md-none"></div>
								<div class="tt-item">
									<div class="tt-item__img"><i class="icon-671366"></i></div>
									<div class="tt-item__title">
										Carpet<br> Sanitizing
									</div>
								</div>
								<div class="tt-item">
									<div class="tt-item__img"><i class="icon-181174"></i></div>
									<div class="tt-item__title">
										Whole Home<br> Sanitizing
									</div>
								</div>
							</div>
							<a href="services-residential.html" class="tt-btn tt-btn__top">GET SERVICE NOW <span class="icon-271228"></span></a>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="tt-tab-02" role="tabpanel"><div class="tab-layout01 additional-01">
            	<div class="tab-layout01__img">
            		<picture>
            			<source srcset="images/tab-layout01-img02.webp" type="image/webp">
            			<source srcset="images/tab-layout01-img02.png" type="image/png">
            			<img src="images/tab-layout01-img02.webp" alt="">
            		</picture>
            	</div>
	<div class="tab-layout01__descriptions">
		<h5 class="tab-layout01__title">Commercial Sanitizing</h5>
		<p>
			Our Commercial Sanitizing &amp; Disinfecting Services incorporate specialized treatment processes using EPA Registered Products to disinfect a variety of surfaces.
		</p>
		<div class="tt-icon-list">
			<div class="tt-item">
				<div class="tt-item__img"><i class="icon-2599697"></i></div>
				<div class="tt-item__title">
					Building<br> Cleaning
				</div>
			</div>
			<div class="tt-item">
				<div class="tt-item__img"><i class="icon-2231632"></i></div>
				<div class="tt-item__title">
					Education<br> Centre
				</div>
			</div>
			<div class="divider_xs d-block d-md-none"></div>
			<div class="tt-item">
				<div class="tt-item__img"><i class="icon-864916"></i></div>
				<div class="tt-item__title">
					Warehouse<br> Cleaning
				</div>
			</div>
			<div class="tt-item">
				<div class="tt-item__img"><i class="icon-2979708"></i></div>
				<div class="tt-item__title">
					Factory<br> Cleaning
				</div>
			</div>
		</div>
		<a href="services-commercial.html" class="tt-btn tt-btn__top02">GET SERVICE NOW <span class="icon-271228"></span></a>
	  </div>
     </div>
    </div>
  </div>
		</div>
	</div>
	
</main>


<?php get_footer(); ?>