<?php theme_include('header'); ?>

<div class="container" id="content">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-2 visible-md visible-lg">
        &nbsp;
    </div>
    <div class="col-md-7">
      <h1 class="post-title">
        <?php echo page_title(); ?>
    </h1>
    <?php echo page_content(); ?>
</div>
<aside class="col-md-3" id="sidebar">
    <?php theme_include('sidebar'); ?>
</aside>
</div>
</div>

<?php theme_include('footer'); ?>
