<?php
/*
 Template Name: Contact
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

            <div class="social">
            <a href="http://uk.linkedin.com/in/advisercloud">
<img class="aligncenter" src="https://static.licdn.com/scds/common/u/img/webpromo/btn_myprofile_160x33.png" alt="View Adviser Cloud's profile on LinkedIn" width="160" height="33" border="0" />
</a>

<a class="twitter-timeline" href="https://twitter.com/AdviserCloud" data-widget-id="537941186271789056">Tweets by @AdviserCloud</a>
<script>// <![CDATA[
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
// ]]></script>
            </div>

            <div class="contact" role="main">

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
                    </div> <?php // end article section ?>

                    <footer class="article-footer">


                    </footer> <?php // end article footer ?>

                </article>

            <?php endwhile; else : ?>

                <?php get_template_part ('partials/no-post-found');?>

            <?php endif; ?>

            </div>
            <?php get_sidebar();?>
        </div>

    </div>

<?php get_footer(); ?>
