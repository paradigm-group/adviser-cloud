<?php get_header(); ?>

			<div id="content" class="wrapper">

				<div id="inner-content" class="container">

					<div class="eight" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                            <header class="article-header">

                                <h1 class="entry-title single-title" itemprop="headline">
                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                </h1>

                                <p class="byline vcard">Posted <?php echo get_the_time(get_option('date_format'));?> </p>

                            </header> <?php // end article header ?>

                            <div class="entry-content" itemprop="articleBody">
                              <?php
                                // the content (pretty self explanatory huh)
                                the_content();
                              ?>
                            </div> <?php // end article section ?>

                            <footer class="article-footer">


                            </footer> <?php // end article footer ?>

                            <?php comments_template(); ?>

                            </article> <?php // end article ?>


						<?php endwhile; ?>

						<?php else : ?>

                            <?php get_template_part ('partials/no-post-found');?>

						<?php endif; ?>

					</div>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
