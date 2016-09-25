<?php get_header(); ?>

			<div id="content">

				<h1 class="page-title full" itemprop="headline"><?php the_title(); ?></h1>

				<div id="inner-content" class="wrap cf">

					<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<section class="entry-content cf" itemprop="articleBody">
								<?php the_content(); ?>
							</section> <?php // end article section ?>

						<?php endwhile; endif; ?>

					</main>

					<div class="contact-form">
						<h2>Let's Work Together</h2>
						<?php echo do_shortcode('[contact-form-7 id="37" title="Contact form 1"]'); ?>
					</div>

				</div>

			</div>

<?php get_footer(); ?>
