<?php
get_header();
?>
<section class="single-post-container">
  <div class="post-header-container">
    <h2 class="single-post-title"><?php the_title();?></h2>
    <hr>
  </div>
  <div class="post-sidebar-container">
    <?php get_sidebar();?>
  </div>
  <div class="post-content-container">
    <?php
while (have_posts()):
    the_post();
    ?>
    <p class="single-post-content"><?php the_content();?></p>
    <?php
endwhile;?>
  </div>
  <div class="custom-post-navigation">
    <?php
the_post_navigation(
    array(
        'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'vortron') . '</span> <span class="nav-title">%title</span>',
        'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'vortron') . '</span> <span class="nav-title">%title</span>',
    )
);
?>
  </div>
</section>
<?php
get_footer();
?>