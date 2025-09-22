// initializeSplide.js
export const initializeSplide = () => {
  // -------------------------------
  // トップKVスライダー
  // -------------------------------
  const topKV = document.querySelector(".js-top-kv-slider");
  if (topKV) {
    const splideKV = new Splide(topKV, {
      type: "fade",
      rewind: true,
      perPage: 1,
      autoplay: true,
      interval: 5000,
      speed: 1000,
      pauseOnHover: true,
      arrows: false,
      pagination: true,
      lazyLoad: false, // lazyLoadは使用せず、LCP対策を優先
      classes: {
        pagination: "splide__pagination pagination",
        page: "splide__pagination__page button-pagination",
      },
    });

    const svgTemplate = `
      <svg class="progress-ring" viewBox="0 0 146 146">
        <circle
          class="progress-ring__background"
          cx="73" cy="73" r="71"
          stroke="d9d9d9" stroke-width="2" fill="none"
        />
        <circle
          class="progress-ring__circle"
          cx="73" cy="73" r="71"
          stroke="#ffffff" stroke-width="2" fill="none"
          stroke-dasharray="446.1" stroke-dashoffset="446.1"
          transform="rotate(-90 73 73)"
          stroke-linecap="round"
        />
      </svg>
    `;

    // SVG追加・初期化処理
    const setupPaginationSVG = () => {
      const buttons = document.querySelectorAll(".splide__pagination__page");
      buttons.forEach((btn) => {
        if (!btn.querySelector(".progress-ring")) {
          btn.insertAdjacentHTML("beforeend", svgTemplate);
        }
      });
      document.querySelectorAll(".progress-ring__circle").forEach((circle) => {
        circle.style.transition = "none";
        circle.style.strokeDashoffset = circle.getTotalLength();
      });
    };

    // 進捗アニメーション制御
    splideKV.on("autoplay:playing", (rate) => {
      const activeBtn = document.querySelector(".splide__pagination__page.is-active");
      if (activeBtn) {
        const circle = activeBtn.querySelector(".progress-ring__circle");
        if (circle) {
          const length = circle.getTotalLength();
          circle.style.transition = "stroke-dashoffset 0.3s linear";
          circle.style.strokeDashoffset = length * (1 - rate);
        }
      }
    });

    splideKV.on("mounted move", setupPaginationSVG);

    // ページネーションの初期非表示 → 画像ロード後に表示
    const firstImg = topKV.querySelector("img");
    const showPagination = () => {
      const pagination = document.querySelector(".splide__pagination");
      if (pagination) {
        pagination.style.opacity = "1";
        pagination.style.visibility = "visible";
      }
    };

    if (firstImg && !firstImg.complete) {
      firstImg.addEventListener("load", showPagination);
    } else {
      showPagination();
    }

    splideKV.mount();
  }

  // -------------------------------
  // 製品紹介スライダー（productSlider）
  // -------------------------------
  const productSlider = document.querySelector(".js-top-product-slider");
  if (productSlider) {
    const splideProduct = new Splide(productSlider, {
      type: "slide",
      perPage: 3.08,
      focus: "left",
      arrows: false,
      pagination: false,
      // speed: 800,
      gap: "32rem",
      padding: { right: "60rem" },
      easing: "cubic-bezier(0.25, 0.46, 0.45, 0.94)",
      breakpoints: {
        767.5: {
          perPage: 1,
          gap: "24rem",
          padding: { right: "60rem" },
        },
      },
    });

    splideProduct.mount();

    // カスタム矢印制御
    const prevButtons = document.querySelectorAll(".js-product-prev");
    const nextButtons = document.querySelectorAll(".js-product-next");

    prevButtons.forEach((btn) => {
      btn.addEventListener("click", () => splideProduct.go("<"));
    });
    nextButtons.forEach((btn) => {
      btn.addEventListener("click", () => splideProduct.go(">"));
    });
  }
};
