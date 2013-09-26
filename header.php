<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

  <meta name="description" content="<?php echo site_description(); ?>">
  <link rel="stylesheet" href="<?php echo theme_url('/css/bootstrap.css'); ?>">
  <link rel="stylesheet" href="<?php echo theme_url('/css/theme.css'); ?>">

  <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
  <link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <script src="<?php echo theme_url('/js/jquery.js'); ?>"></script>
      <script src="<?php echo theme_url('/js/bootstrap.min.js'); ?>"></script>

      <meta name="viewport" content="width=device-width">
      <meta name="generator" content="Anchor CMS">

      <meta property="og:title" content="<?php echo site_name(); ?>">
      <meta property="og:type" content="website">
      <meta property="og:url" content="<?php echo current_url(); ?>">
      <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
      <meta property="og:site_name" content="<?php echo site_name(); ?>">
      <meta property="og:description" content="<?php echo site_description(); ?>">

      <?php if(customised()): ?>
      <!-- Custom CSS -->
      <style><?php echo article_css(); ?></style>

      <!--  Custom Javascript -->
      <script><?php echo article_js(); ?></script>
    <?php endif; ?>

  </head>
  <body class="<?php echo body_class(); ?>">
    <div class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php while(categories()): ?>
            <li>
              <a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
                <?php echo category_title(); ?>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>
  <div class="jumbotron">
    <div class="container">
      <h1>
        <a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>
      </h1>
      <br />
      <h3><?php echo site_description(); ?></h3>
    </div>
  </div>
