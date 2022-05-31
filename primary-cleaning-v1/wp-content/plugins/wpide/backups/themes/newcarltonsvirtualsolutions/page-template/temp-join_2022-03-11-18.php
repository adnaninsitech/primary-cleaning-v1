<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "37e37c9b895aa993a009729427d7a1e00a5a3018d9"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/themes/newcarltonsvirtualsolutions/page-template/temp-join.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/plugins/wpide/backups/themes/newcarltonsvirtualsolutions/page-template/temp-join_2022-03-11-18.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php /* Template Name: JOin our team Template */ ?>

<?php get_header(); 

$team = get_field('team_section'); 

?>


<?php while ( have_posts() ) : the_post(); ?>
<main id="tt-pageContent">

<!--<section class="main-join">
    <div class="container">
        <div class="row">
        
        <?php

// Check rows exists.
if( have_rows('staff_list') ):

    // Loop through rows.
   $x=1; while( have_rows('staff_list') ) : the_row();

        // Load sub field value.
        $title = get_sub_field('title');
        $designation = get_sub_field('designation');
        $image = get_sub_field('image');
        // Do something...
        if($x<=6){
        ?>
                   <div class="col-md-3 text-center">
                    <div class="box">
                        <h5><?php echo $title; ?></h5>
                        <h6><?php echo $designation; ?></h6>
                        
                        <div class="image">
                        <img src="<?php echo $image; ?>">
                        </div>
                    </div>
                   </div>
        
        <?php

    // End loop.
  } $x++; endwhile;

// No value.
else :
    // Do something...
endif;
?>

<div class="col-md-6 pad">
    <?php echo the_content(); ?>
</div>
 
        </div>
    </div>
</section>-->


<section class="career">
    <div class="container">
       <h3>Come. Work with Us</h3>
       <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
      <?php $count=0; $index_query = new WP_Query(array( 'post_type' => 'jobs', 'posts_per_page' => '-1' , 'order'=>'asc')); ?>
    <?php while ($index_query->have_posts()) : $index_query->the_post(); ?> 
       <div class="row careerbox">
           
               <div class="col-md-12">
                 <div class="row">
                      <div class="col-md-8">
                         <div class="boxcareer">
                           <h4><?php echo the_title(); ?></h4>
                         </div>
                      </div>
                      <div class="col-md-4 text-right">
                         <a href="#">View and Apply</a>
                      </div>
                  </div>
               </div>
           
       </div> 
       
       <?php endwhile; wp_reset_query(); ?>
       <!--<div class="row careerbox">
           
               <div class="col-md-12">
                 <div class="row">
                      <div class="col-md-8">
                         <div class="boxcareer">
                           <h4>Title Job</h4>
                         </div>
                      </div>
                      <div class="col-md-4 text-right">
                         <a href="#">View and Apply</a>
                              </div>
                          </div>
                       </div>
                   
               </div> 
               <div class="row careerbox">
                   
                       <div class="col-md-12">
                         <div class="row">
                              <div class="col-md-8">
                                 <div class="boxcareer">
                                   <h4>Title Job</h4>
                                 </div>
                              </div>
                              <div class="col-md-4 text-right">
                                 <a href="#">View and Apply</a>
                              </div>
                          </div>
                       </div>
                   
               </div> -->
               
             </div>
            
        </section>
        
        
        
        <section class="ourteam">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                          <?php echo $team['content']; ?>
                          </div>
                    <div class="col-md-6">
                    <img src="<?php echo $team['image']; ?>"></div>
                </div>
            </div>
        </section>


	<div class="section-indent">
		<div class="container container-fluid-lg">
			<div class="title-block text-center">
				<h6 class="title-block__title">Products We Use</h6>
			</div>
			
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
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>