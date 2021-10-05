import Splide from "@splidejs/splide";

window.addEventListener("load", () => {
  const mobileToggle = document.getElementById("mobile-menu");
  const mobileNav = document.getElementById("mobile-nav");
  const path = window.location.pathname;

  mobileToggle.addEventListener("click", () => {
    mobileToggle.classList.toggle("is-active");
    mobileNav.classList.toggle("is-active");
  });

  if (path === "/") {
    new Splide(".splide", {
      autoplay: true,
      cover: true,
      heightRatio: 0.5,
      type: "loop",
    }).mount();
  }
});
