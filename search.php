<?php theme_include('header'); ?>

<div class="container" id="content">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-2 visible-md visible-lg">
      &nbsp;
    </div>
    <div class="col-md-7">
      <h1 class="post-title">
        You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.
      </h1>
      <?php if(has_search_results()): ?>
      <?php while(search_results()): ?>
      <article class="post">
        <h2>
          <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
        </h2>
      </article>
    <?php endwhile; ?>
    <?php if(has_pagination()): ?>
    <nav class="pagination">
      <?php echo posts_prev(); ?>
      <?php echo posts_next(); ?>
    </nav>
  <?php endif; ?>

<?php else: ?>
  <p>Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
<?php endif; ?>
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
