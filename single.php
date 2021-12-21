<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Js_Blog
 */

get_header();
?>

	<!-- section main content -->
	<section class="main-content mt-3">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">
				<?php
				while ( have_posts() ) :
					the_post();

					?>

					<div class="post post-single">
						<!-- post header -->
						<div class="post-header">
							<h1 class="title mt-0 mb-3">
								<?php
								the_title();
								?>
							</h1>
							<ul class="meta list-inline mb-0">
								<li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
								<li class="list-inline-item"><a href="#">Trending</a></li>
								<li class="list-inline-item">29 March 2021</li>
							</ul>
						</div>
						<!-- featured image -->
						<div class="featured-image">
							<?php
								the_post_thumbnail();
							?>
						</div>
						<!-- post content -->
						<div class="post-content clearfix">
						<?php
						the_content();
						?>
						</div>
						<!-- post bottom section -->
						<div class="post-bottom">
							<div class="row d-flex align-items-center">
								<div class="col-md-6 col-12 text-center text-md-start">
									<!-- tags -->
									<a href="#" class="tag">#Trending</a>
									<a href="#" class="tag">#Video</a>
									<a href="#" class="tag">#Featured</a>
								</div>
								<div class="col-md-6 col-12">
									<!-- social icons -->
									<?php
										$url = get_the_permalink();
										$title = get_the_title();
										$final_url = `https://twitter.com/intent/tweet?url={$url}&text={$title}&hashtags=css,html`;
									?>

									<ul class="social-icons list-unstyled list-inline mb-0 float-md-end">
										<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										
										<li class="list-inline-item"><a href="<?php echo($final_url) ?>"><i class="fab fa-twitter"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

                    </div>

					<?php
					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'jsblog' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'jsblog' ) . '</span> <span class="nav-title">%title</span>',
						)
					);
					?>
					<div class="spacer" data-height="50"></div>

					<div class="about-author padding-30 rounded">
						<div class="thumb">
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
						</div>
						<div class="details">
							<h4 class="name"><a href="#">
								<?php
								the_author_meta('display_name');
								?>
							</a></h4>
							<?php
								the_author_meta('description');
							?>
							<!-- social icons -->
							<ul class="social-icons list-unstyled list-inline mb-0">
								<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="spacer" data-height="50"></div>
					<?php

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
				
                </div>

				<!-- sidebar -->
				<div class="col-lg-4">
					<?php
						get_template_part('sidebar');
					?>
				</div>

			</div>

		</div>
	</section>

<?php
get_sidebar();
get_footer();