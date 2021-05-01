<?php 
/* Template Name: Personal*/
get_header();
$main_image=get_field('main_image');
$image_url=$main_image['sizes']['medium'];
$contact=get_field('contact');
$mail=get_field('mail');
$dob=get_field('dob');
$address=get_field('address');
$nationality=get_field('nationality');
$fname=get_field('name');
?>
<section class="page">
    <div class="container">
        <h1 class="text-center name-head"><?php echo $fname; ?></h1>
        <br/>
        <!-- <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else: endif; ?> -->
        <hr class="border-hr"/>
        <h1 class="text-center"><?php the_title();?></h1>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                <img src="<?php echo $image_url; ?>" class="img-fluid myimage"/>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <table class="table table-responsive table-hover">
                    <tr>
                        <td>Contact : </td>
                        <td><a href="tel:<?php echo $contact; ?>"><span class="dashicons dashicons-phone"></span>&nbsp;<?php echo $contact;?></a></td>
                    </tr>
                    <tr>
                        <td>Email-ID : </td>
                        <td><a href="mailto:<?php echo $mail;?>"><span class="dashicons dashicons-email-alt"></span>&nbsp;<?php echo $mail;?></a></td>
                    </tr>
                    <tr>
                        <td>Date of Birth : </td>
                        <td><?php echo $dob; ?></td>
                    </tr>
                    <tr>
                        <td>Address : </td>
                        <td><?php echo $address; ?></td>
                    </tr>
                    <?php if($nationality): ?>
                    <tr>
                        <td>Nationality : </td>
                        <td>
                            <?php echo "Indian" ?>
                        </td>
                    </tr>
                    <?php endif; ?>
                </table>
            </div>
        </div>
        <hr class="border-hr"/>
        <!-- <pre><?php echo var_dump($main_image);?></pre> -->
        <!-- <pre><?php echo var_dump((int)$contact);?></pre> -->
        <!-- <pre><?php echo var_dump($mail);?></pre> -->
    </div>
</section>
<?php get_footer();?>