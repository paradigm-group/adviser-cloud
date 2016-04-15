<?php get_header(); ?>

    <div id="content" class="wrapper">

        <div id="inner-content" class="container">

            <div class="main" role="main">

                <h1>Our Latest News &amp; Views</h1>

                <p>Adviser Cloud’s subscription based set-up, ensures all our clients benefit from our regular, useful updates.  We are passionate about delivering high quality, insightful IFA software that truly does save you valuable time. Please see below all the latest articles relating to our ongoing developments, news and industry insights.</p>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('boxed'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                        <header class="article-header">

                            <h1 class="entry-title index-title" itemprop="headline">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                            </h1>

                            <p class="byline vcard">Posted <?php echo get_the_time(get_option('date_format'));?> </p>

                        </header> <?php // end article header ?>

                        <div class="entry-content" itemprop="articleBody">
                          <?php
                            // the content (pretty self explanatory huh)
                            the_excerpt();
                          ?>
                        </div> <?php // end article section ?>

                        <footer class="article-footer">
                        </footer> <?php // end article footer ?>

                </article> <?php // end article ?>

            <?php endwhile; ?>

                <?php bones_page_navi(); ?>

            <?php else : ?>

                <?php get_template_part ('partials/no-post-found');?>

            <?php endif; ?>

            </div>

        </div>

    </div>

<?php get_footer(); ?>
