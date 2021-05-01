<?php 
/* Template Name: Experience*/
get_header();
$resume=get_field('resume');
?>
<section class="page">
    <div class="container">
        <hr class="border-hr"/>
        <br/>
        <h1 class="text-center"><?php the_title();?></h1>
        <h5 class="fresher">Fresher</h5>
        <!-- <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else: endif; ?> -->
        <?php if($resume): ?>
            <br/><br/>
            <div class="text-center">
                <h1>Resume</h1>
                <a href="<?php echo $resume['url']; ?>" class="btn btn-primary view-resume" target="_blank"><span class="dashicons dashicons-welcome-view-site"></span> View PDF</a>
                <a href="<?php echo $resume['url']; ?>" class="btn btn-primary view-resume" download><span class="dashicons dashicons-download"></span> Download PDF</a>
            </div>
            <!-- <pre><?php echo print_r($resume);?></pre> -->
        <?php endif; ?>
        <br/>
        <hr class="border-hr"/>
    </div>
</section>

<?php get_footer();?>