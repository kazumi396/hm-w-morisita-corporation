gsap.registerPlugin(ScrollToPlugin);

export const initializeScrollToTop = () => {
  const toTopButton = document.querySelector(".js-to-top-button");

  if (!toTopButton) return;

  toTopButton.addEventListener("click", () => {
    gsap.to(window, {
      scrollTo: 0,
      ease: "power2.out",
      duration: 0.8,
    });
  });
};

initializeScrollToTop();
