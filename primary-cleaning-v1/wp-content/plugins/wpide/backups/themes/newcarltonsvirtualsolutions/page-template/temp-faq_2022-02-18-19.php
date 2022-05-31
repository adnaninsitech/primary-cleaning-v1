<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "3c83875153c68e44b2bef5b254ee8ced86b7e022cb"){
                                        if ( file_put_contents ( "C:\xampp\htdocs\cleaning/wp-content/themes/newcarltonsvirtualsolutions/page-template/temp-faq.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\xampp\htdocs\cleaning\wp-content\plugins\wpide/backups/themes/newcarltonsvirtualsolutions/page-template/temp-faq_2022-02-18-19.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Faq Template
 */
 
 get_header(); 
 
 ?>
 
 <div id="subtitle-wrapper">
	<div class="container container-fluid-xl">
		<div class="tt-breadcrumbs">
			<ul>
				<li><a href="<?php echo site_url(); ?>">home</a></li>
				<li>faqs</li>
			</ul>
		</div>
		<h1 class="subtitle__title">FAQs</h1>
	</div>
</div>
<main id="tt-pageContent">
	<div class="section-indent">
		<div class="tt-wrapper05" style="background-image: url('images/wrapper05.png')">
			<div class="container container-fluid-xl">
				<div class="row">
					<div class="col-md-6">
						<div class="tt-text-indent-right">
							<div class="title-block">
								<div class="title-block__label">
									Frequently Asked Questions
								</div>
								<h2 class="title-block__title">
									Reliable Answers to Our Most Common Questions
								</h2>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<?php echo the_field('content_right'); ?>
					</div>
				</div>
				<div class="row row-indent-top">
					<div class="col-md-6">
						<div class="tt-box-indent tt-wrapper01">
						<div class="js-accordeon accordeon-01">
						
						<?php $x=1; if( have_rows('faq_left') ): while( have_rows('faq_left') ) : the_row(); ?>
							<div class="tt-item <?php if($x==1){echo'tt-item__open'; } else{''; }?>">
								<div class="tt-item__title"><?php echo get_sub_field('question'); ?></div>
								<div class="tt-item__content">
									<?php echo get_sub_field('answer'); ?>
								</div>
							</div>
							
							<?php $x++; endwhile; endif; ?>
						
						</div>
						</div>
					</div>
					<div class="divider d-block d-md-none"></div>
					<div class="col-md-6">
						<div class="tt-box-indent tt-wrapper01">
							<div class="js-accordeon accordeon-01">
								<?php $x=1; if( have_rows('faq_right') ): while( have_rows('faq_right') ) : the_row(); ?>
							<div class="tt-item <?php if($x==1){echo'tt-item__open'; } else{''; }?>">
								<div class="tt-item__title"><?php echo get_sub_field('question'); ?></div>
								<div class="tt-item__content">
									<?php echo get_sub_field('answer'); ?>
								</div>
							</div>
							
							<?php $x++; endwhile; endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-indent">
		<div class="container container-fluid-lg">
			<div class="title-block text-center">
				<h2 class="title-block__title">
					Ask Your Question
				</h2>
				<div class="title-block__text tt-width-large">
					We look forward to helping you create and maintain a clean, healthy environment that’s as enjoyable as it is functional.
				</div>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-md-9 col-lg-8">
					<form class="form-default text-center" id="faq-form" method="post" novalidate="novalidate" action="#">
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Your name">
						</div>
						<div class="row row-align-col">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="email" class="form-control" placeholder="E-mail">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="phonenumber" class="form-control" placeholder="Phone">
								</div>
							</div>
						</div>
						<div class="form-group">
							<textarea rows="4" class="form-control" placeholder="Your question"></textarea>
						</div>
						<button type="submit" class="tt-btn tt-btn-form"><span class="icon-lightning"></span>SEND QUESTION <span class="icon-271228"></span></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>
 
 
 
 <?php get_footer(); ?>