<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cody Lewis</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
          rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!--  Dev Icons -->
    <link rel="stylesheet"
          href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

    <!-- Custom styles for this template -->
    <?php wp_head(); ?>

</head>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger"
       href="<?php
       $path = is_front_page() ? '#page-top' : '';
       echo site_url($path);
       ?>">
        <span class="d-block d-lg-none"></span>
        <?php
        $headshot = get_field('headshot', (int)get_option('page_on_front'));
        if ($headshot) : ?>
            <span class="d-none d-lg-block">
              <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo $headshot; ?>" alt="">
            </span>
        <?php endif; ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <?php foreach ([
                               'Experience' => have_rows('experience', (int)get_option('page_on_front')),
                               'Education' => have_rows('education', (int)get_option('page_on_front')),
                               'Skills' => true,
                               'Interests' => get_field('interests', (int)get_option('page_on_front')),
                               'Awards' => have_rows('awards_certifications', (int)get_option('page_on_front'))
                           ] as $section => $value) :
                if ((bool)$value) : ?>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger"
                           href="<?php echo site_url('#' . lcfirst($section)); ?>"><?php echo $section; ?></a>
                    </li>
                <?php endif;
            endforeach; ?>
        </ul>
    </div>
</nav>

<div class="container-fluid p-0">
