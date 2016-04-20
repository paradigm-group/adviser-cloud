<?php
/*
 Template Name: Integrations
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

    <div id="content" class="wrapper">

        <div id="inner-content" class="container">

            <div class="main" role="main">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                    <header class="article-header">

                        <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

                    </header> <?php // end article header ?>

                    <div class="entry-content" itemprop="articleBody">
                        <?php
                            // the content (pretty self explanatory huh)
                            the_content();
                        ?>

                        <?php if( have_rows('integrations') ): ?>

                            <div class="integrations">

                            <?php while( have_rows('integrations') ): the_row();

                                // vars
                                $title = get_sub_field('integration-title');
                                $image = get_sub_field('integration-image');

                                ?>
                                <div class="integration">
                                    <img src="<?php echo $image;?>" alt="<?php echo $title;?>" class="alignleft" class="integration-image" width="170">
</div>
                            <?php endwhile; ?>

                            </div>

                        <?php endif; ?>
                    </div> <?php // end article section ?>

                    <footer class="article-footer">


                    </footer> <?php // end article footer ?>

                </article>

            <?php endwhile; else : ?>

                <?php get_template_part ('partials/no-post-found');?>

            <?php endif; ?>

            </div>

        </div>

    </div>

<?php get_footer(); ?>
