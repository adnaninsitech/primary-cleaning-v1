<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "3c83875153c68e44b2bef5b254ee8ced86b7e022cb"){
                                        if ( file_put_contents ( "C:\xampp\htdocs\cleaning/wp-content/themes/newcarltonsvirtualsolutions/page-template/temp-about.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\xampp\htdocs\cleaning\wp-content\plugins\wpide/backups/themes/newcarltonsvirtualsolutions/page-template/temp-about_2022-02-18-19.php") )  ) ){
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
 
 
 
 <?php get_footer(); ?>