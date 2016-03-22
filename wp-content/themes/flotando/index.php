<?php
get_header();

get_template_part('template-parts/slider');
get_template_part('template-parts/boxes');

?>

    <?php rimy_header_tag('css', ASSETS_CSS_URL . 'blog_cm.css') ?>
    <div class="site-content blog-cm color-gray-20">
        <div class="container">
            <div class="blog-cm-content row">
                <div class="blog col-sm-8 background-gray-95 border-gray-90">
                    <div class="row">

                        <h2 class="blog-title col-sm-12 no-margin-bottom">Actividad reciente</h2>
                        <!-- Start the Loop. -->
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <div class="post soft-background col-sm-12">
                                <div class="separator"></div>

                                <!-- Display the Title as a link to the Post's permalink. -->
                                <h3 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                                <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->


                                <!-- Display the Post's content in a div box. -->
                                <div class="entry">
                                    <?php the_content(); ?>
                                </div>

                                <div class="space-15"></div>
                                <div class="button-div">
                                    <a href="<?php the_permalink(); ?>" role="button" class="btn btn-info">Leer más <i class="fa fa-chevron-right"></i></a>
                                </div>

                                <span class="category"><i class="fa fa-list-ul fa-fw"></i> <?php the_category( ', ' ); ?></span>
                                <span class="author"><i class="fa fa-user fa-fw"></i> <?php the_author_posts_link(); ?></span>
                                <span class="time"><i class="fa fa-clock-o fa-fw"></i> <?php the_time('F jS, Y'); ?></span>
                                <div class="separator"></div>

                            </div> <!-- closes the first div box -->

                            <!-- Stop The Loop (but note the "else:" - see next line). -->

                        <?php endwhile; else : ?>

                            <!-- The very first "if" tested to see if there were any Posts to -->
                            <!-- display.  This "else" part tells what do if there weren't any. -->
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


                            <!-- REALLY stop The Loop. -->
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>