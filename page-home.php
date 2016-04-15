<?php
/*
 Template Name: Home
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

    <div class="wrapper">
        <div class="container">
            <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'home', 'slug' ); } ?>
        </div>
    </div>

    <div class="welcome">
        <div class="wrapper">
            <div class="container">
                <div class="home-image-container"><img src="<?php the_field('first-home-image');?>" alt="Secure Documents" class="aligncenter"></div>
                <div class="home-image-container"><img src="<?php the_field('second-home-image');?>" alt="Task Management" class="aligncenter"></div>
                <div class="home-image-container"><img src="<?php the_field('third-home-image');?>" alt="Good Value" class="aligncenter"></div>
            </div>
        </div>
    </div>

    <div id="content" class="wrapper">

        <div id="inner-content" class="container">

            <div class="main"  role="main">


                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                        <div class="entry-content" itemprop="articleBody">
                            <?php the_content(); ?>
                        </div>

                    </article>

                <?php endwhile; else : ?>

                    <?php get_template_part ('partials/no-post-found');?>

                <?php endif; ?>

						</div>

				</div>

			</div>


<?php get_footer(); ?>
