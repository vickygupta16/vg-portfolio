<?php 
/* Template Name: Certifications*/
get_header();
$beginner_specialization=get_field('beginner_specialization');
$beginner_course=get_field('beginner_courses');
$intermediate_specialization=get_field('intermediate_specialization');
$intermediate_course=get_field('intermediate_courses');
$advanced_course=get_field('advanced_courses');
?>
<section class="page">
    <div class="container">
        <hr class="border-hr"/>
        <h1 class="text-center"><?php the_title();?></h1>
        <!-- <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; else: endif; ?> -->
        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="beginner-tab" data-toggle="tab" href="#beginner" role="tab" aria-controls="beginner" aria-selected="true">Beginner</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="intermediate-tab" data-toggle="tab" href="#intermediate" role="tab" aria-controls="intermediate" aria-selected="false">Intermediate</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="advanced-tab" data-toggle="tab" href="#advanced" role="tab" aria-controls="advanced" aria-selected="false">Advanced</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="beginner" role="tabpanel" aria-labelledby="beginner-tab">
                <br/>
                <?php if($beginner_specialization): ?>
                    <h5 class="text-center">Specialization</h5>
                    <div class="row">
                        <?php foreach($beginner_specialization as $bs):?>
                            <!-- <?php echo var_dump($bs);?> -->
                            <!-- <pre><?php echo print_r($bs);?></pre> -->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="card shadow text-center course-card">
                                    <h6><?php echo $bs->post_title;?></h6>
                                    <a class="view-certificate" href="<?php echo $bs->guid;?>" target="_blank">View Certificate</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <br/>
                <?php if($beginner_course): ?>
                    <h5 class="text-center">Course</h5>
                    <div class="row">
                        <?php foreach($beginner_course as $bc):?>
                            <!-- <?php echo var_dump($bc);?> -->
                            <!-- <pre><?php echo print_r($bc);?></pre> -->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="card shadow text-center course-card">
                                    <h6><?php echo $bc->post_title;?></h6>
                                    <a class="view-certificate" href="<?php echo $bc->guid;?>" target="_blank">View Certificate</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="tab-pane fade" id="intermediate" role="tabpanel" aria-labelledby="intermediate-tab">
                <br/>
                <?php if($intermediate_specialization): ?>
                    <h5 class="text-center">Specialization</h5>
                    <div class="row">
                        <?php foreach($intermediate_specialization as $is):?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="card shadow text-center course-card">
                                    <h6><?php echo $is->post_title;?></h6>
                                    <a class="view-certificate" href="<?php echo $is->guid;?>" target="_blank">View Certificate</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <br/>
                <?php if($intermediate_course): ?>
                    <h5 class="text-center">Course</h5>
                    <div class="row">
                        <?php foreach($intermediate_course as $ic):?>
                            <!-- <?php echo var_dump($ic);?> -->
                            <!-- <pre><?php echo print_r($ic);?></pre> -->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="card shadow text-center course-card">
                                    <h6><?php echo $ic->post_title;?></h6>
                                    <a class="view-certificate" href="<?php echo $ic->guid;?>" target="_blank">View Certificate</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="tab-pane fade" id="advanced" role="tabpanel" aria-labelledby="advanced-tab">
                <br/>
                <?php if($advanced_course): ?>
                    <h5 class="text-center">Course</h5>
                    <div class="row">
                        <?php foreach($advanced_course as $ac):?>
                            <!-- <?php echo var_dump($ac);?> -->
                            <!-- <pre><?php echo print_r($ac);?></pre> -->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="card shadow text-center course-card">
                                    <h6><?php echo $ac->post_title;?></h6>
                                    <a class="view-certificate" href="<?php echo $ac->guid;?>" target="_blank">View Certificate</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <hr class="border-hr"/>
    </div>
</section>
<?php get_footer();?>