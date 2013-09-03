<?php theme_include('header'); ?>

<div class="container" id="content">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-2 visible-md visible-lg">
          <p>
            <strong><?php echo article_author();?></strong>
            <hr />
            <time datetime="<?php echo date(DATE_W3C, article_time()); ?>">
            <hr />
            <?php echo article_author();?>
          </p>
        </div>
        <div class="col-md-7">
          <h1 class="post-title">
            <?php echo article_title(); ?>
          </h1>
          <p class="meta visible-sm visible-xs">
            <?php echo article_author();?> | <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"> | blah blah blah
          </p>
            <?php echo article_markdown(); ?>
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
