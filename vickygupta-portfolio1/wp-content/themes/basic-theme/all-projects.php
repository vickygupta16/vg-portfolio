<?php 
/* Template Name: All Projects */
get_header();
$projects=get_field('projects');
?>
<section class="page">
    <div class="container">
        <hr class="border-hr"/>
        <h1 class="text-center"><?php the_title();?></h1> 
        <br/>
        <?php if($projects): ?>
            <div class="row all-project-title">
                <?php foreach($projects as $proj): ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card text-center">
                            <h5><a href="<?php echo $proj->guid?>" target="_blank"><?php echo $proj->post_title; ?></a></h5>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <!-- <pre><?php echo print_r($projects); ?></pre> -->
        <hr class="border-hr"/>
    </div>
</section>
<?php get_footer();?>