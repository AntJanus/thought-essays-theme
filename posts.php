<?php theme_include('header'); ?>

<div class="container" id="content">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-2 visible-md visible-lg">
     &nbsp;
   </div>
   <div class="col-md-7">
    <?php if(has_posts()): posts();
    while(posts()): ?>
    <article class="post">
      <h2>
        <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
      </h2>
      <p class="meta">
        <?php echo article_author();?> | <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo article_date();?></time> | <a href=" <?php echo category_url(); ?>" title=" <?php echo category_title(); ?>"><?php echo category_title(); ?></a>
      </p>
      <?php echo article_description();?>
    </article>
  <?php endwhile; ?>
  <?php if(has_pagination()): ?>
  <nav class="pagination">
      <?php echo posts_prev(); ?>
      <?php echo posts_next(); ?>
  </nav>
<?php endif; ?>
<?php else: ?>
  <p>Looks like you have some writing to do!</p>
<?php endif; ?>
</div>
<div class="col-md-3" id="sidebar">
  <?php theme_include('sidebar'); ?>
</div>
</div>
<hr />
<p>
  Created by <a href="http://antjanus.com">AntJanus</a>
</p>
</div>

<?php theme_include('footer'); ?>
