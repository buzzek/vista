const { animationDOMinit } = require("./modules/animation-dom");
const { portfolioSliderInit } = require("./modules/portfolio-slider");

document.addEventListener("DOMContentLoaded", () => {
  /*
   *
   * Add exported functions here, will be loaded after dom
   *
   */

  animationDOMinit();
  portfolioSliderInit();

  window.addEventListener("scroll", () => {
    /*
     *
     * Add exported functions here, will be loaded on scroll
     *
     */

    animationDOMinit();
  });
});
