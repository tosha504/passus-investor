intFunc = function () {
  document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".runline-ps__items_item");

    const animateItem = (item) => {
      const span = item.querySelector("span");
      const progressLine = item.querySelector(".progress-line-curent");
      const current = parseInt(progressLine.dataset.current, 10);
      const full = parseInt(progressLine.parentNode.dataset.full, 10);
      const targetPercentage = (current / full) * 100;

      // Animate number
      let count = 0;
      const duration = 1000; // Animation duration in ms
      const stepTime = duration / current; // Time per increment
      const animateNumber = setInterval(() => {
        count++;
        span.textContent = count;
        if (count >= current) {
          clearInterval(animateNumber);
        }
      }, stepTime);

      // Animate progress bar
      setTimeout(() => {
        progressLine.style.transition = `width ${duration}ms ease-out`;
        progressLine.style.width = `${targetPercentage}%`;
      }, 0); // Start immediately
    };

    const observerOptions = {
      root: null, // Use the viewport as the root
      rootMargin: "0px",
      threshold: 0.1, // Trigger when 10% of the element is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateItem(entry.target);
          observer.unobserve(entry.target); // Stop observing after animation starts
        }
      });
    }, observerOptions);

    items.forEach((item) => {
      observer.observe(item); // Observe each item
    });
  });
};
if (window.acf) {
  acf.addAction("render_block_preview/type=runline-ps", intFunc);
} else {
  intFunc();
}