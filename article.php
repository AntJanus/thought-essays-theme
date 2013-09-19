<?php theme_include('header'); ?>

<div class="container" id="content">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-2 visible-md visible-lg">
      <p>
        <strong><?php echo article_author();?></strong>
        <hr />
        <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo article_date();?></time>
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
      <script type="text/javascript"><!--
      google_ad_client = "ca-pub-9383125856979855";
      /* Thought-Essay banner */
      google_ad_slot = "4974831813";
      google_ad_width = 728;
      google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<aside class="col-md-3" id="sidebar">
  <?php theme_include('sidebar'); ?>
</aside>
</div>
<hr />
<p>
  Created by <a href="http://antjanus.com">AntJanus</a>
</p>
</div>

<?php theme_include('footer'); ?>
