<?php theme_include('header'); ?>

<div class="container" id="content">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-2 visible-md visible-lg">
      <p>
        <strong><?php echo article_author();?></strong>
        <br />
        <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo article_date();?></time>
        <br />
        <strong>About: </strong> <?php echo article_author_bio();?>
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
<?php theme_include('comments') ?>
</div>
<aside class="col-md-3" id="sidebar">
  <?php theme_include('sidebar'); ?>
</aside>
</div>
</div>
</div>

<?php theme_include('footer'); ?>
