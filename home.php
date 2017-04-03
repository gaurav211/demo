<?php 
/*
****
template name: Home page 
****
****/
get_header(); ?>


	<!--slider part start from here-->
	<section>
		<div class="slider">
			<img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="Banner" class="img-responsive1">
		</div>
	</section>
	<!--slider end here-->
	<!--About us content-->
	<section class="about-us">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="flip-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/about_us.png">
						<div class="flip-text">
							We Take The
							Guesswork
							Out Of Organic
							Shopping.
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<h1>About Us</h1>
					<p>Since we opened our first Nutrition Smart
						store in 1996, we have been committed
						to providing our community with the
						knowledge, and products necessary to
						achieve, and maintain an active, healthy
						lifestyle for themselves and their families.</p>
					<a href="#">Learn More</a>
				</div>
			</div>
		</div>
	</section>
	<!--about us content end here-->
	<!--option content start from here-->
	<section class="option-main">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<ul class="option-li">
						<li>Bulk Foods</li>
						<li>Greens & Superfoods</li>
						<li>Health & Beauty</li>
						<li>Homeopathy</li>
					</ul>
					<ul class="option-li1">
						<li>Organic Produce</li>
						<li>Raw/Living Food</li>
						<li>Sports Nutrition</li>
						<li>Vitamins/Herbs/Suppliments</li>
					</ul>
				</div>
				
			</div>
		</div>
	</section>
	<!--option end here-->
	<section class="coupon">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<div class="coupon-head">
						Coupons
					</div>
					
				</div>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
                    
						
 <?php $args = array( 'post_type' => 'coupons', 'posts_per_page' =>-1);
$loop = new WP_Query( $args );
$i=1;
$count_coupons = wp_count_posts('coupons');
$count = $count_coupons->publish;
while ( $loop->have_posts() ) : $loop->the_post();
$post_id=get_the_id();

$image = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'single-thumbnail' ); 
if($i==1)
{
$active=$i==1?'active':'';	
 echo '<div class="item '.$active.'">';
}
   ?>

   
						  <div class="col-md-4">
								<div class="product1 effect3">
									<img src="<?php echo get_template_directory_uri(); ?>/images/tape1.png" class="tap1">
									<img src="<?php echo $image[0];?>">
									<div class="product_details">
										<span><?php the_field("offer");?></span>
										<p><?php echo get_the_title();?></p>
									</div>
								</div>
							</div>
                    <?php        
                         if($i%6==0)
{
 echo '</div>';
 if($count!=$i){
  echo '<div class="item">';
 }
}
   ?>
                            
                            <?php $i++; endwhile; ?>
							
						



					  </div>
                      </div>

					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/images/pre.png"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/images/next.png"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>
				<a href="#" class="more-option">MORE COUPONS</a>
			</div>
		</div>
	</section>
	<!--coupon end here-->
	<!--save money section start from here-->
	<section class="savemoney">
		<div class="container">
			<div class="row">
				<div class="col-md-6 ">
					<div class="save-money">
						<h1>Get SMART & Save Money!</h1>
						<p>Enter your phone number below for
	big savings on our best items!*	</p>
						<input type="text" placeholder="enter mobile">
						<button>SUBMIT</button>
						<span>*Message and data rates may apply.</span>
					</div>
				</div>
				<div class="col-md-6" >
					<div class="iphone">
						<img src="<?php echo get_template_directory_uri(); ?>/images/ifn.png" alt="save money" >
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--save money section end here-->
	<!--Our Community section start from here-->
	<section class="Community">
		<img src="<?php echo get_template_directory_uri(); ?>/images/community.png" alt="save money" >
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Our Community</h1>
					<p>With all of our locations based in Florida, NUTRITION SMART believes strongly in
giving back to the local community. Here you can find out more about our participation
in community events, charities and our customers of the month.</p>
<a href="#" class="more-option1">JOIN US!</a>
				</div>
			</div>
		</div>
	</section>
	<!--Our Community section end here-->
	<!--- Nutrition Smarties section start from here-->
	<section class="smarties">
		    <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-title">
							<span class="nomie">NOMINATE A SMARTIE</span>
							<h3>Nutrition Smarties</h3>
						</div>
					</div>
					
				</div>
			</div>
			<div class="smart_bg">
				<div class="container">
 <?php $nutrition = array( 'post_type' => 'nutrition_smarties', 'posts_per_page' => 4);
$smartiesloop = new WP_Query( $nutrition );

while ( $smartiesloop->have_posts() ) : $smartiesloop->the_post();
$post_id=get_the_id();
$nutrition_image = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'single-thumbnail' ); 

?>
						<div class="nutrition-smarties">
							<img src="<?php echo $nutrition_image[0]; ?>">
							<div class="title-smart">
								<p><?php echo get_the_content();?></p>
								<span><?php the_field("designation");?></span>
								<h3><?php echo get_the_title();?></h3>
							</div>
						</div>
                        
                        <?php endwhile;?>
						
					</div>
					</div>
	</section>
	<!--- Nutrition Smarties section end here-->
	<!--- Event section start from here-->
	<section class="event">
		 <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-title">
							<h3>Welsley Chapel Events</h3>
						</div>
					</div>
                    <style>
					.event_tab { background:#E0662E; padding:18px; width:100%;}
				
					#myCarouselnew .carousel_tab {top:0px; width:100%!important;right:0%; z-index:0!important;}
					#myCarouselnew .carousel_tab li { width:160px; float:left; background:none; border:none; color:#fff; padding:7px 35px 29px; text-transform:uppercase; }
					#myCarouselnew .carousel_tab li.active{background:#fff; color:#E0662E;padding: 7px 35px 29px;border-radius: 0px;}
					</style>
                    <div id="myCarouselnew" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
                      <div class="event_tab">
                      
					  <ol class="carousel-indicators carousel_tab">
                      <?php
					  $terms = get_terms('event_category');
					  $i=0;  
					  foreach ( $terms as $term ) {?>
			<li data-target="#myCarouselnew" data-slide-to="<?php echo $i;?>" class="<?php if($i==0){ echo 'active';}?>"><?php echo $term->name;?></li>
						
                    <?php $i++; }?>
					  </ol>
                      </div>
                      
                      <!-- Left and right controls -->
					  <a class="left carousel-control" href="#myCarouselnew" role="button" data-slide="prev">
						<span class="glyphicon" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/images/pre.png"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#myCarouselnew" role="button" data-slide="next">
						<span class="glyphicon" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/images/next.png"></span>
						<span class="sr-only">Next</span>
					  </a>

					  <!-- Wrapper for slides -->
					  
                     <div class="carousel-inner" role="listbox">
  <?php 
 $custom_terms = get_terms('event_category');
 $i=0;
foreach($custom_terms as $custom_term) {
   
    $events = array('post_type' => 'events',
	               'posts_per_page' => 9,
        'tax_query' => array(
            array(
                'taxonomy' => 'event_category',
                'field' => 'slug',
                'terms' => $custom_term->slug,
            ),
        ),
     );
	?>	
     <div class="item <?php if($i==0){ echo 'active';}?>">
     <?php			  
$eventsloop = new WP_Query( $events );
while ( $eventsloop->have_posts() ) : $eventsloop->the_post();
$post_id=get_the_id();
$events_image = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'single-thumbnail' ); 

?>
						
                              
         <div class="col-md-4">
						<div class="event1">
							<img src="<?php echo $events_image[0];?>">
							<div class="event-text">
								<h4><?php echo get_the_title();?></h4>
								<p>January 15th</p>
								<span>Welsley Chapel</span>
							</div>
						</div>
					</div>
					
                   
                    
                    <?php $i++; endwhile;?>  </div><!----itemclosed------><?php }?> 
                    
                    </div>
                    
                     
                    </div>
					<a href="#" class="more-option1">VIEW ALL</a>
				</div>
			</div>
	</section>
	<!--- Event section end here-->
	<!-- store loaction start from here-->
	<section class="store">
		<img src="<?php echo get_template_directory_uri(); ?>/images/store-location.jpg">
			<div class="store-loc">
				<div class="container">
					<div class="row">
						<div class="store_loc">
							<h1>Store Locations</h1>
						</div>
						<div class="location-inner">
							<div class="col-md-8">
								<div class="seven-loc">
									<img src="<?php echo get_template_directory_uri(); ?>/images/loc1.png">
									<p>Seven Convenient Store Locations
									Throughout Florida!</p>
									<img src="<?php echo get_template_directory_uri(); ?>/images/loc2.png">
								</div>
							</div>
                            
 <?php $locations = array( 'post_type' => 'store_locations', 'posts_per_page' =>-1);
$store_locations = new WP_Query( $locations );
while ( $store_locations->have_posts() ) : $store_locations->the_post();
$post_id=get_the_id();
$store_locations_image = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'single-thumbnail' ); 
?>
							<div class="col-md-4">
								<div class="loc1">
									<img src="<?php echo $store_locations_image[0];?>">
									<div class="loc-text">
										<h4><?php echo get_the_title();?></h4>
										<p><?php echo get_the_content();?></p>
										<a href="tel:<?php the_field("phone_number");?>"><img src="<?php echo get_template_directory_uri(); ?>/images/phone.png"> <?php the_field("phone_number");?></a>
									</div>
								</div>
							</div>
                            
                            <?php endwhile;?>
							
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--store location end here-->
	<!--Healthy start from here-->
		<section class="Healthy">
			<div class="store-Healthy">
				<div class="container">
					<div class="row">
						<div class="store_loc1">
							<h1>A Healthy Social Life</h1>
						</div>
						
					</div>
				</div>
				<div class="post-inner">
					<div class="container">
						<div class="row">
                         <?php $blog_post = array( 'post_type' => 'post', 'posts_per_page' =>8);
$blog_postloop = new WP_Query( $blog_post );

while ( $blog_postloop->have_posts() ) : $blog_postloop->the_post();
$post_id=get_the_id();
$blog_postloop_image = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'single-thumbnail' ); 

?>
                        
                        
							<div class="col-md-3">
								<div class="post1">
                               <?php if($blog_postloop_image){?>
									<img src="<?php echo $blog_postloop_image[0];?>">
                                    <?php } else { echo '&nbsp;&nbsp;'; }?>
									<div class="loc-text">
										<p><?php echo get_the_content();?></p>
										<a href="">#NutritionSmart</a>
										<p>
											<img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt="Instgram">User Name
											<span>Posted 12/11/16</span>
										</p>
									</div>
								</div>
							</div>
                            
                            <?php endwhile;?>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="vitamin">
			<img src="<?php echo get_template_directory_uri(); ?>/images/vitamin.jpg">
		</div>


<?php get_footer(); ?>>>>>