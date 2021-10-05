<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>

<body>
  <header>
    <div class="header-bar">
      <div id="logo-container">
        <?php the_custom_logo();?>
      </div>
      <div class="contact-container">
        Contact us via (805) 240 2516 or sales@vortron.com
      </div>
    </div>

    <button id="mobile-menu">
      <div class="bar"></div>
    </button>
    <nav id="main-nav">
      <ul id="main-nav-container">
        <li class="main-nav-item <?php if (is_page("about")) {
    echo "current-menu-item";
}?>">
          <a href="<?php echo site_url("/about"); ?>">About</a>
        </li>
        <li class="main-nav-item long-menu-item <?php if (
    is_page("air-knife-systems")
) {
    echo "current-menu-item";
}?>"> <a href="<?php echo site_url(
    "/air-knife-systems"
); ?>">Air Knife Systems</a>
        </li>
        <li class="main-nav-item long-menu-item <?php if (
    is_page("vortron-air-power-centrifugal-blowers")
) {
    echo "current-menu-item";
}?>"> <a href="<?php echo site_url(
    "/vortron-air-power-centrifugal-blowers"
); ?>">Air Power Centrifugal Blowers</a>
        </li>
        <li class="main-nav-item long-menu-item <?php if (
    is_page("vt-gear-driven-centrifugal-compressor")
) {
    echo "current-menu-item";
}?>"> <a href="<?php echo site_url(
    "/vt-gear-driven-centrifugal-compressor"
); ?>">VT Gear Driven Compressor</a>
        </li>
        <li class="main-nav-item <?php if (is_page("distributors")) {
    echo "current-menu-item";
}?>"> <a href="<?php echo site_url(
    "/distributors"
); ?>">Distributors</a>
        </li>
      </ul>
    </nav>
  </header>
  <nav id="mobile-nav">
    <ul id="mobile-nav-container">
      <li class="mobile-nav-item <?php if (is_page("about")) {
    echo "current-menu-item";
}?>">
        <a href="<?php echo site_url("/about"); ?>">About</a>
      </li>
      <li class="mobile-nav-item <?php if (is_page("air-knife-systems")) {
    echo "current-menu-item";
}?>"> <a href="<?php echo site_url(
    "/air-knife-systems"
); ?>">Air Knife Systems</a>
      </li>
      <li class="mobile-nav-item <?php if (
    is_page("vortron-air-power-centrifugal-blowers")
) {
    echo "current-menu-item";
}?>"> <a href="<?php echo site_url(
    "/vortron-air-power-centrifugal-blowers"
); ?>">Vortron Air Power Centrifugal Blowers</a>
      </li>
      <li class="mobile-nav-item <?php if (
    is_page("vt-gear-driven-centrifugal-compressor")
) {
    echo "current-menu-item";
}?>"> <a href="<?php echo site_url(
    "/vt-gear-driven-centrifugal-compressor"
); ?>">VT Gear Driven Centrifugal Compressor</a>
      </li>
      <li class="mobile-nav-item <?php if (is_page("distributors")) {
    echo "current-menu-item";
}?>"> <a href="<?php echo site_url(
    "/distributors"
); ?>">Distributors</a>
      </li>
    </ul>
  </nav>