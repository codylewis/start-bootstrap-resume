<?php get_header(); ?>

<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
    <div class="my-auto">
        <h1 class="mb-0"><?php the_field('first_name'); ?>
            <span class="text-primary"><?php the_field('last_name'); ?></span>
        </h1>
        <div class="subheading mb-5">
            <?php
            $address = get_field('address');
            $phone = get_field('phone');
            $email = get_field('email');
            ?>
            <?php echo $address ? "$address · " : ''; ?>
            <?php echo $phone ? "$phone · " : '';
            if ($email) : ?>
                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
            <?php endif; ?>
        </div>
        <?php
        $briefAboutMe = get_field('brief_about_me');
        if ($briefAboutMe) : ?>
            <p class="mb-5"><?php echo $briefAboutMe; ?></p>
        <?php endif;
        if (have_rows('links')) : ?>
            <ul class="list-inline list-social-icons mb-0">
                <?php while (have_rows('links')) : the_row(); ?>
                    <li class="list-inline-item">
                        <a href="<?php the_sub_field('link'); ?>">
                            <span class="fa-stack fa-lg">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa <?php the_sub_field('font_awesome_class'); ?> fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>

<?php if (have_rows('experience')): ?>
    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
            <h2 class="mb-5">Experience</h2>

            <?php while (have_rows('experience')) : the_row(); ?>
                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto">
                        <h3 class="mb-0"><?php the_sub_field('title'); ?></h3>
                        <div class="subheading mb-3"><?php the_sub_field('company'); ?></div>
                        <?php the_sub_field('description'); ?>
                    </div>
                    <div class="resume-date text-md-right">
                            <span class="text-primary"><?php the_sub_field('start_date'); ?>
                                - <?php echo get_sub_field('end_date') ?: 'Present'; ?></span>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>

    </section>
<?php endif; ?>

<?php if (have_rows('education')): ?>
    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
            <h2 class="mb-5">Education</h2>

            <?php while (have_rows('education')) : the_row(); ?>
                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto">
                        <h3 class="mb-0"><?php the_sub_field('institution') ?></h3>
                        <div class="subheading mb-3"><?php the_sub_field('degree'); ?></div>
                        <?php the_sub_field('free_text'); ?>
                    </div>
                    <div class="resume-date text-md-right">
                            <span class="text-primary"><?php the_sub_field('start_date'); ?>
                                - <?php echo get_sub_field('end_date') ?: 'Present'; ?></span>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </section>
<?php endif; ?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
    <div class="my-auto">
        <h2 class="mb-5">Skills</h2>

        <?php if (have_rows('programming_languages_tools')): ?>
            <div class="subheading mb-3">Programming Languages &amp; Tools</div>
            <ul class="list-inline list-icons">
                <?php while (have_rows('programming_languages_tools')) : the_row(); ?>
                    <li class="list-inline-item">
                        <i class="grayscale colored <?php the_sub_field('devicon_class_name'); ?>"></i>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <?php if (have_rows('workflow')): ?>
            <div class="subheading mb-3">Workflow</div>
            <ul class="fa-ul mb-0">
                <?php while (have_rows('workflow')) : the_row(); ?>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        <?php the_sub_field('approach'); ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>

<?php if (get_field('interests')): ?>
    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
            <h2 class="mb-5">Interests</h2>
            <?php the_field('interests'); ?>
        </div>
    </section>
<?php endif; ?>

<?php if (have_rows('awards_certifications')): ?>
    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
            <h2 class="mb-5">Awards &amp; Certifications</h2>
            <ul class="fa-ul mb-0">
                <?php while (have_rows('awards_certifications')) : the_row(); ?>
                    <li>
                        <i class="fa-li fa fa-trophy text-warning"></i>
                        <?php the_sub_field('award_certification'); ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
