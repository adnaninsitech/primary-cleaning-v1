<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "37e37c9b895aa993a009729427d7a1e0dda4ce2f0b"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/themes/newcarltonsvirtualsolutions/page-template/temp-about.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/plugins/wpide/backups/themes/newcarltonsvirtualsolutions/page-template/temp-about_2022-02-22-16.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: About Template
 */
 
 get_header(); 
 
 ?>
 
<main id="tt-pageContent"> 

<?php $section1= get_field('section_1'); ?>
 <div class="section-indent">
		<div class="container container-fluid-lg">
			
			<div class="tt-typography row">
				<div class="col-md-6 col-lg-6">
			<?php echo $section1['left_content']; ?>
					
				</div>
				<div class="col-md-6 col-lg-6">
				<?php echo $section1['right_content']; ?>
				</div>
			</div>
		</div>
	</div>
	
	
<?php $section2= get_field('section_2'); ?>	
<div class="section-indent no-margin">
		<div class="box02-info lazyloaded" data-bg="images/box02-info-wrapper.png" style="background-image: url(/images/box02-info-wrapper.png);">
			<div class="row align-items-lg-center">
				<div class="box02-info__img col-sm-5 col-md-6">
					<img class="lazyloaded" src="<?php echo $section2['image']; ?>" data-src="<?php echo $section2['image']; ?>" alt="" id="abtimg1">
				</div>
				<div class="box02-info__description col-sm-7 col-md-6">
					<div class="title-block title-block__indent03 title-block__not-marker">
						<div class="title-block__label">
						<?php echo $section2['title']; ?>
							
						</div>
						<h2 class="title-block__title">
						<?php echo $section2['name']; ?>
						</h2>
					</div>
					<?php echo $section2['content']; ?>
					<!--<div class="info-list info-list__top">
					 
					</div>-->
				</div>
			
			</div>
			
		</div>
</div>	


<?php $section3= get_field('section_3'); ?>	
<div class="section no-margin">
		<div class="box03-info lazyloaded">
			<div class="row align-items-lg-center">
			<div class="col-md-6">
					<div class="title-block title-block__indent03 title-block__not-marker secondsec">
						<div class="title-block__label sec3">
						<?php echo $section3['title']; ?>
							
						</div>
						<h2 class="title-block__title">
						<?php echo $section3['name']; ?>
						</h2>
					</div>
					<?php echo $section3['content']; ?>
					<!--<div class="info-list info-list__top">
					 
					</div>-->
				</div>
				<div class="box02-info__img col-sm-5 col-md-6">
					<img class="lazyloaded" src="<?php echo $section3['image']; ?>" data-src="<?php echo $section3['image']; ?>" alt="" id="abtimg2">
				</div>
				
			
			</div>
			
		</div>
</div>




<?php $index_query = new WP_Query(array('post_type'=>'page', 'p'=>'221')); ?>
<?php while ($index_query->have_posts()) : $index_query->the_post(); ?> 

<div class="section-indent sec3">
		<div class="container container-fluid-lg">
			<div class="title-block text-center">
				<div class="title-block__label">
					We Care for People
				</div>
				<h5 class="title-block__title">
					How Our Company Works
				</h5>
				<div class="title-block__text">
					When you choose us as a service partner we bring expertise and experience as standard.
				</div>
			</div>
			<div class="row box01-wrapper text-center text-sm-left">
			
			<?php if( have_rows('section_3') ): while( have_rows('section_3') ) : the_row(); ?>
				<div class="col-sm-6 col-md-4">
					<div class="box01">
						<div class="box01__img"><a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdQAAAJnAQMAAAAUXzBpAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAADpJREFUeNrtwQENAAAAwiD7p3Z7DmAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEAOkCQAATjpJ8wAAAAASUVORK5CYII=
" data-src="<?php echo get_sub_field('image'); ?>" class="lazyload" alt=""></a></div>
						<h6 class="box01__title"><a href="#"><?php echo get_sub_field('title'); ?></a></h6>
						<?php echo get_sub_field('content'); ?>
					</div>
				</div>
				
				<?php endwhile; endif; ?>
				
			</div>
		</div>
	</div>

<?php endwhile; ?>
	
	<div class="section-indent" id="logs">
		<div class="container container-fluid-lg">
			<div class="title-block text-center">
				<h6 class="title-block__title">Products We Use</h6>
			</div>
			</br>
			<div class="tt-logo-layout slick-default slick-default__dark"
				data-slick='{
					"slidesToShow": 6,
					"autoplaySpeed": 7500,
					"slidesToScroll": 3,
					"responsive": [
						{
							"breakpoint": 1024,
							"settings": {
								"slidesToShow": 5
							}
						},
						{
							"breakpoint": 546,
							"settings": {
								"slidesToShow": 3,
								"slidesToScroll": 3
							}
						}
					]
				}'>
				<?php if( have_rows('logos') ):  while( have_rows('logos') ) : the_row(); ?>
				<div>
				<a href="#">
				<img src="<?php echo get_sub_field('img'); ?>" data-src="<?php echo get_sub_field('img'); ?>" class="lazyload" alt="">
				</a>
				</div>
				
				<?php endwhile;  endif; ?>
				
			</div>
		</div>
	</div>
 
</main> 
 <?php get_footer(); ?>