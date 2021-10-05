<?php
/**
 * Template Name: Home Page
 */
get_header();?>


<section id="slider-container">
  <div class="splide">
    <div class="splide__track">
      <?php
$sliderArg = [
    "post_type" => "slide",
    "order" => "DESC",
];

$slider = new WP_Query($sliderArg);

if ($slider) {?>
      <ul class="splide__list">
        <?php while ($slider->have_posts()):
        $slider->the_post();?>
        <li class="splide__slide">
          <?php if (has_post_thumbnail()):
            the_post_thumbnail("slide");
        endif;?>
        </li>
        <?php
endwhile;?>
      </ul>
      <?php }
?>
    </div>
  </div>
</section>
<section class="cards-container">
  <?php
$cardArg = [
    "post_type" => "card",
    "order" => "ASC",
];

$cards = new WP_Query($cardArg);

if ($cards) {
    while ($cards->have_posts()):
        $cards->the_post();?>
  <a href="<?php the_field("page_link");?>" class="card-link">
    <div class="card">
      <div class="card-image-container" style="background-image: url(<?php echo get_the_post_thumbnail_url(
            get_the_ID(),
            "full"
        ); ?>)">
      </div>
      <h3 class="card-title">
        <?php the_title();?>
      </h3>
    </div>
  </a>

  <?php
endwhile;
}
?>
</section>
<section class="steps-container">
  <h2 class="steps-heading">How We Do It</h2>
  <hr>
  <div class="steps-inner-container">
    <?php
$stepArg = [
    "post_type" => "step",
    "order" => "ASC",
];

$steps = new WP_Query($stepArg);

if ($steps) {
    while ($steps->have_posts()):
        $steps->the_post();?>
    <div class="step">
      <div class="step-image-container">
        <img src="<?php echo get_the_post_thumbnail_url(
            get_the_ID(),
            "full"
        ); ?>" class="step-image">
      </div>
      <div class="step-content-container">
        <h3 class="step-title"><?php the_title();?></h3>
        <p class="step-content"><?php echo get_the_content(); ?></p>
      </div>
    </div>
    <?php
endwhile;
}
?>
  </div>
</section>
<section class="news-container">
  <h2 class="news-heading">Recent News</h2>
  <hr>
  <div class="news-inner-container">
    <?php
$news = new WP_Query([
    "posts_per_page" => "3",
]);
while ($news->have_posts()):
    $news->the_post();?>
    <div class="news-article">
      <div class="news-image-container">
        <img src="<?php echo get_the_post_thumbnail_url(
        get_the_ID(),
        "full"
    ); ?>" class="news-image">
      </div>
      <div class="news-content-container">
        <h3 class="news-title"><?php the_title();?></h3>
        <p class="news-excerpt"><?php echo wp_trim_words(
        get_the_content(),
        20
    ); ?></p>
        <a href="<?php the_permalink();?>" class="news-link">Read More</a>
      </div>
    </div>
    <?php
endwhile;
?>
  </div>
</section>

<?php get_footer();
?>