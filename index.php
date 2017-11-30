<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
            <?php the_title('<h1 class="mb-0">', '</h1>'); ?>
<!--            <div class="subheading mb-5"></div>-->
            <?php the_content(); ?>
        </div>
    </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
