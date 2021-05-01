<?php 
/* Template Name: Others */
get_header();
$interests=get_field('interests');
?>
<section class="page">
    <div class="container">
        <hr class="border-hr"/>
        <h1 class="text-center"><?php the_title();?></h1>
        <!-- <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else: endif; ?> -->
        <div class="row">
            <div class="col-lg-6 col-12">
                <?php if($interests): ?>
                    <div class="card">
                        <?php echo $interests; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card activity">
                    <h5>Activity</h5>
                    <hr class="activity-hr"/>
                    <h6>Affiliate Marketing</h6>
                    <p><a href="https://www.facebook.com/ProductsByAmazon" target="_blank"><i class="fab fa-facebook"></i> Facebook Page</a></p>
                    <p><a href="https://t.me/productsbyamazon" target="_blank"><i class="fab fa-telegram"></i> Telegram Channel</a></p>
                    <hr class="activity-hr"/>
                    <h6>PUBG</h6>
                    <p><a href="https://www.youtube.com/channel/UChOYJq6uvpv--9X-c84NKmg" target="_blank"><i class="fab fa-youtube"></i> YouTube Channel</a></p>
                    <hr class="activity-hr"/>
                </div>
            </div>
        </div>
        <hr class="border-hr"/>
    </div>
</section>
<?php get_footer();?>