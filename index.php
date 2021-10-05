<?php
get_header();?>
<section class="news-page-container">
  <h1 class="page-heading">Current News</h1>
  <hr>
  <div class="news-content-area">
    <ul class="news-page-list">
      <?php
while (have_posts()) {
    the_post();?>

      <li class="news-page-list-item">
        <img class="news-page-li-image" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), "full") ?>">
        <h3 class="news-page-li-title">
          <?php the_title();?>
        </h3>
        <div class="news-page-li-exceprt">
          <p>
            <?php echo wp_trim_words(get_the_content(), 100) ?>
          </p>
          <a href="<?php the_permalink()?>" class="news-page-li-link">Read More</a>
        </div>
      </li>

      <?php }
?>
    </ul>
    <div class="pagination-links">
      <?php echo paginate_links() ?>
    </div>
  </div>
</section>
<?php
get_footer();?>