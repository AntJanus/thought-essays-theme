<?php theme_include('header'); ?>

<div class="container" id="content">
  <div class="row">
    <div class="col-md-2 visible-md visible-lg">
      <p>
        <strong><?php echo article_author();?></strong>
        <br />
        <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo article_date();?></time>
        <br />
        <strong>About: </strong> <?php echo article_author_bio();?>
        <br />
        <strong>Word Count: </strong> <?php echo count_words(article_markdown()); ?>
      </p>
    </div>
    <div class="col-md-7">
      <h1 class="post-title">
        <?php echo article_title(); ?>
      </h1>
      <p class="meta visible-sm visible-xs">
        <?php echo article_author();?> | <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo article_date();?></time>
      </p>
      <?php echo article_markdown(); ?>
      <?php theme_include('comments');?>
    </div>
    <aside class="col-md-3" id="sidebar">
      <?php theme_include('sidebar'); ?>
    </aside>
  </div>
</div>

<?php theme_include('footer'); ?>
