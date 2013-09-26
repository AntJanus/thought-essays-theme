<?php theme_include('header'); ?>

<div class="container" id="content">
  <!-- Example row of columns -->
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
<div class="ad">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-9383125856979855";
/* smaller-thoughts-banner */
google_ad_slot = "7788697416";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
</div>
<div class="col-md-3" id="sidebar">
  <?php theme_include('sidebar'); ?>
</div>
</div>
</div>

<?php theme_include('footer'); ?>
