<div class="widget">
  <h3>
    Search
  </h3>
  <form class="row" action="<?php echo search_url(); ?>">
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
   <?php while(rwar_latest_posts(5)): ?>
    <li class="list-group-item">
        <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
    </li>
  <?php endwhile; ?>
  </ul>
</div>
