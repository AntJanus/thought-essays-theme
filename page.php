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
<div class="col-md-3" id="sidebar">
  <div class="widget">
    <h3>
      Search
  </h3>
  <form class="row">
      <div class="col-md-8">
        <input type="text" class="form-control">
    </div>
    <div class="col-md-4">
        <input type="submit" class="btn btn-default form-control">
    </div>
</form>
</div>
<div class="widget">
    <h3>
      Latest Posts
  </h3>
  <ul class="list-group">
      <li class="list-group-item">
        <a href="#">Article 1</a>
    </li>
    <li class="list-group-item">
        <a href="#">Article 2</a>
    </li>
    <li class="list-group-item">
        <a href="#">Article 3</a>
    </li>
    <li class="list-group-item">
        <a href="#">Article 4</a>
    </li>
</ul>
</div>
</div>
</div>
<hr />
<p>
    Created by <a href="http://antjanus.com">AntJanus</a>
</p>
</div>

<?php theme_include('footer'); ?>
