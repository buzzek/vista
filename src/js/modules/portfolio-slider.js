/*
 *
 * Script for portfolio slider
 * require Tiny Slider plugin
 *
 */

const { tns } = require("tiny-slider");

export const portfolioSliderInit = () => {
  const portfolioSliders = Array.from(
    document.querySelectorAll(".portfolio-slider")
  );

  if (portfolioSliders) {
    portfolioSliders.forEach((slider) => {
      const sliderInit = tns({
        container: slider,
        items: 1,
        controls: false,
        navPosition: "bottom",
        mouseDrag: true,
        swipeAngle: false,
        autoplay: true,
        autoplayButtonOutput: false,
        nav: true,
      });
    });
  }
};
