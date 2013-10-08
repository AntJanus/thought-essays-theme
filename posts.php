<?php theme_include('header'); ?>

<div class="container" id="content">
  <div class="row">
    <div class="col-md-2 visible-md visible-lg">
     &nbsp;
   </div>
   <div class="col-md-7">
    <?php if(has_posts()):
    while(posts()): ?>
    <article class="post">
      <h2>
        <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
      </h2>
      <small class="meta">
        <?php echo article_author();?> | <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo article_date();?></time>
      </small><br />
      <?php echo article_description();?>
    </article>
    <hr />
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
