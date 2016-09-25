<?php get_header(); ?>


			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

							  <header class="article-header entry-header">
									<?php if ( function_exists('yoast_breadcrumb') ) {
											yoast_breadcrumb('<p id="breadcrumbs">','</p>');
									} ?>

							    <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
							    <p class="byline entry-meta vcard">Posted <?php the_date(); ?> in <?php the_category(', '); ?></p>

							  </header> <?php // end article header ?>

							  <section class="entry-content cf" itemprop="articleBody">
									<?php
										if ( has_post_thumbnail() ) {
											the_post_thumbnail('full');
										}
									?>
								<?php the_content(); ?>
							  </section> <?php // end article section ?>

							</article> <?php // end article ?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</main>

					<?php get_sidebar(); ?>

				</div>

			</div>



<?php get_footer(); ?>
