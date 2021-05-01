<?php 
/* Template Name: Project Details
Template Post Type: Project*/
get_header();
$project_title=get_field('project_title');
$project_category=get_field('project_category');
$technologies_used=get_field('technologies_used');
$github_repository_link=get_field('github_repository_link');
$project_live_link=get_field('project_live_link');
?>
<section class="page">
    <div class="container">
        <hr class="border-hr"/>
        <h1 class="text-center"><?php the_title();?></h1>
        <br/>
        <!-- <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else: endif; ?> -->
        <div class="project-detail-div">
            <table class="table">
                <tr>
                    <td>Project Category</td>
                    <th><?php echo $project_category; ?></th>
                </tr>
                <tr>
                    <td>Technologies Used</td>
                    <th><?php echo $technologies_used; ?></th>
                </tr>
                <?php if($github_repository_link): ?>
                    <tr>
                        <td>Github Repository Link</td>
                        <th><a href="<?php echo $github_repository_link['url']; ?>" 
                        target="<?php echo $github_repository_link['target']; ?>">Open <i class="fas fa-external-link-alt"></i></a></th>
                    </tr>
                <?php endif; ?>
                <?php if($project_live_link): ?>
                    <tr>
                        <td>Project Live Link</td>
                        <th><a href="<?php echo $project_live_link['url']; ?>" 
                        target="<?php echo $project_live_link['target']; ?>">Open <i class="fas fa-external-link-alt"></i></a></th>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
        <!-- <?php echo $project_title; ?>
        <?php echo $project_category; ?>
        <?php echo $technologies_used; ?> -->
        <!-- <pre><?php echo print_r($github_repository_link);?></pre>
        <pre><?php echo print_r($project_live_link);?></pre> -->
        <hr class="border-hr"/>
    </div>
</section>

<?php get_footer();?>