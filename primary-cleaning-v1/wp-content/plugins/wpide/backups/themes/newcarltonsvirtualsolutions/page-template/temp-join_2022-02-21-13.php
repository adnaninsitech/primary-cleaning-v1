<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "37e37c9b895aa993a009729427d7a1e00935764917"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/themes/newcarltonsvirtualsolutions/page-template/temp-join.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/plugins/wpide/backups/themes/newcarltonsvirtualsolutions/page-template/temp-join_2022-02-21-13.php") )  ) ){
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

<section class="main-join">
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
    <h1>Founder <br>And<br> Co-Founder</h1>
    <p>Nallely is the Founder </p>
    <p>Diana is the Co-founder </p>
</div>
 
        </div>
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
				<div><a href="#">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMwAAABfAQMAAACeHrpcAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAABhJREFUSMftwQEBAAAAgqD+r26IwAAA6DkKBQABxJZgIAAAAABJRU5ErkJggg==" data-src="images/logo-img-01.png" class="lazyload" alt="">
				</a></div>
				<div><a href="#">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIkAAABfAQMAAADmjXa4AAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAABVJREFUOMtjGAWjYBSMglEwCkY6AAAHDQABCTilfgAAAABJRU5ErkJggg==
" data-src="images/logo-img-02.png" class="lazyload" alt="">
				</a></div>
				<div><a href="#">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKoAAABfAQMAAABC585rAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAABhJREFUSMdjGAWjYBSMglEwCkbBKBgoAAAIiQAB4oONxwAAAABJRU5ErkJggg==
" data-src="images/logo-img-03.png" class="lazyload" alt="">
				</a></div>
				<div><a href="#">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKoAAABfAQMAAABC585rAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAABhJREFUSMdjGAWjYBSMglEwCkbBKBgoAAAIiQAB4oONxwAAAABJRU5ErkJggg==
" data-src="images/logo-img-04.png" class="lazyload" alt="">
				</a></div>
				<div><a href="#">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKoAAABfAQMAAABC585rAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAABhJREFUSMdjGAWjYBSMglEwCkbBKBgoAAAIiQAB4oONxwAAAABJRU5ErkJggg==
" data-src="images/logo-img-05.png" class="lazyload" alt="">
				</a></div>
				<div><a href="#">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAK8AAABfAQMAAACkzgUvAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAABhJREFUSMdjGAWjYBSMglEwCkbBKBgoAAAIiQAB4oONxwAAAABJRU5ErkJggg==
" data-src="images/logo-img-06.png" class="lazyload" alt="">
				</a></div>
				<div><a href="#">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMwAAABfAQMAAACeHrpcAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAABhJREFUSMftwQEBAAAAgqD+r26IwAAA6DkKBQABxJZgIAAAAABJRU5ErkJggg==" data-src="images/logo-img-01.png" class="lazyload" alt="">
				</a></div>
				<div><a href="#">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIkAAABfAQMAAADmjXa4AAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAABVJREFUOMtjGAWjYBSMglEwCkY6AAAHDQABCTilfgAAAABJRU5ErkJggg==
" data-src="images/logo-img-02.png" class="lazyload" alt="">
				</a></div>
			</div>
		</div>
	</div>

<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>