<?php
/*Template Name: Press */
?>


<?php get_header(); ?>
<div class="row">
    <div class="col-sm-12">
        <?php get_sidebar(); ?>
    </div>
</div>

    <div class="row">
        <?php query_posts( 'category_name=Press');
              if (have_posts()) : while (have_posts()) : the_post(); ?>        
        <div class="col-sm-4">
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <a href="<?php the_permalink() ?>"><?php    if(has_post_thumbnail()){
                    the_post_thumbnail('thumbnail');
                };
                ?></a>
                <div class="category"><?php the_category(', ') ?></div>
                <h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <div class="excerpt">
                    <p><?php the_field('subhead'); ?></p>
                </div>
                <?php include (TEMPLATEPATH . '/meta.php' ); ?>
            </article>
        </div>
        
    <?php endwhile; ?>
    <?php else : ?>
        <h2>Not Found</h2>
    <?php endif; ?>
    </div>
    

<?php get_footer(); ?>
