<?php 
/* Template Name: Skills*/
get_header();
$frontend=get_field('frontend');
$oop=get_field('oop');
$backend=get_field('backend');
$framework=get_field('framework');
$ides=get_field('ide');
$scripts=get_field('scripting');
$onlinetool=get_field('onlinetool');
$cms=get_field('cms');
?>
<section class="page">
    <div class="container">
        <hr class="border-hr"/>
        <h1 class="text-center"><?php the_title();?></h1>
        <div class="row skills">
            <?php if($frontend):?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card shadow">
                        <h5 class="skill-head text-center"><span class="dashicons dashicons-laptop"></span>
                        &nbsp;UI / Frontend</h5>
                        <ul class="skills-list">
                            <?php foreach($frontend as $ui): ?>
                                <li><span class="dashicons dashicons-editor-code"></span> <?php echo $ui; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($oop):?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card shadow">
                        <h5 class="skill-head text-center"><span class="dashicons dashicons-laptop"></span>
                        &nbsp;Object Oriented Languages</h5>
                        <ul class="skills-list">
                            <?php foreach($oop as $oo): ?>
                                <li><span class="dashicons dashicons-editor-code"></span> <?php echo $oo; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($backend):?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card shadow">
                        <h5 class="skill-head text-center"><span class="dashicons dashicons-laptop"></span>
                        &nbsp;Server / Backend</h5>
                        <ul class="skills-list">
                            <?php foreach($backend as $be): ?>
                                <li><span class="dashicons dashicons-editor-code"></span> <?php echo $be; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($framework):?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card shadow">
                        <h5 class="skill-head text-center"><span class="dashicons dashicons-laptop"></span>
                        &nbsp;Frameworks</h5>
                        <ul class="skills-list">
                            <?php foreach($framework as $fw): ?>
                                <li><span class="dashicons dashicons-editor-code"></span> <?php echo $fw; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($scripts):?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card shadow">
                        <h5 class="skill-head text-center"><span class="dashicons dashicons-laptop"></span>
                        &nbsp;Scripting Languages</h5>
                        <ul class="skills-list">
                            <?php foreach($scripts as $script): ?>
                                <li><span class="dashicons dashicons-editor-code"></span> <?php echo $script; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($onlinetool):?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card shadow">
                        <h5 class="skill-head text-center"><span class="dashicons dashicons-laptop"></span>
                        &nbsp;CMS Frameworks</h5>
                        <ul class="skills-list">
                            <?php foreach($cms as $cms): ?>
                                <li><span class="dashicons dashicons-editor-code"></span> <?php echo $cms; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($onlinetool):?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card shadow">
                        <h5 class="skill-head text-center"><span class="dashicons dashicons-laptop"></span>
                        &nbsp;Online Tools familiar with</h5>
                        <ul class="skills-list">
                            <?php foreach($onlinetool as $ot): ?>
                                <li><span class="dashicons dashicons-editor-code"></span> <?php echo $ot; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($ides):?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card shadow">
                        <h5 class="skill-head text-center"><span class="dashicons dashicons-laptop"></span>
                        &nbsp;IDE's familiar with</h5>
                        <ul class="skills-list">
                            <?php foreach($ides as $ide): ?>
                                <li><span class="dashicons dashicons-editor-code"></span> <?php echo $ide; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <hr class="border-hr"/>
    </div>
</section>
<?php get_footer();?>