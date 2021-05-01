<?php get_header();?>
<section class="page">
    <div class="container">
        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center"><?php the_title();?></h1>
                            <div class="text-center">
                                <a href="<?php echo the_permalink(); ?>" target="_blank"><?php the_post_thumbnail(array(250,250)); ?></a>
                            </div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; else: endif; ?>
        </div>
    </div>
</section>

<?php get_footer();?>