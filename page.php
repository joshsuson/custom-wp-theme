<?php
get_header();
?>
<section class="single-page-container">
  <?php if (get_field("get_quote_button")): ?>
  <a href="#quoteForm" class="quote-button">Get A Quote</a>
  <?php endif;
if (get_the_post_thumbnail()): ?>
  <div class="single-page-hero" style="background-image: url(<?php the_post_thumbnail_url(get_the_ID(), "full");?>)">
  </div>

  <?php
endif;
?>
  <h1 class="single-page-heading"><?php the_title();?></h1>
  <hr>
  <div class="single-page-content">
    <?php the_content();?>
  </div>
</section>
<?php
get_footer();
?>