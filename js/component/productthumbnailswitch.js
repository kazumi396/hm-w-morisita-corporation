export const initializeProductThumbnailSwitch = () => {
  const tabs = document.querySelectorAll("[data-button]");
  const images = document.querySelectorAll("[data-image]");
  const initialImage = document.querySelector('[data-image="0"]');

  if (!tabs.length || !images.length || !initialImage) return;

  const tabClick = (event) => {
    // クリックされたdata-buttonの値
    const targetValue = event.currentTarget.dataset.button;
    // クリックされたtab
    const targetTab = event.currentTarget;
    // 対応する画像
    const targetContent = document.querySelector('[data-image="' + targetValue + '"]');

    // すべてのis-activeをremove
    tabs.forEach((tab) => tab.classList.remove("is-active"));
    images.forEach((img) => img.classList.remove("is-active"));

    // クリックしたタブにis-activeをadd
    targetTab.classList.add("is-active");

    // クリックした画像にis-activeをadd
    if (targetContent) {
      targetContent.classList.add("is-active");
      // GSAPを使用したアニメーション
      gsap.fromTo(
        targetContent,
        { opacity: 0 },
        {
          opacity: 1,
          duration: 0.5,
          ease: "power2.out",
        }
      );
    }
  };

  // tabsクリックで発火
  tabs.forEach((tab) => {
    tab.addEventListener("click", tabClick);
  });

  // 画像外クリックで初期画像に戻す
  document.addEventListener("click", (event) => {
    // サムネイルリストや画像自体をクリックした場合は何もしない
    if (event.target.closest(".js-thumbnail-list") || event.target.closest("[data-image]")) {
      return;
    }
    // すべてのis-activeをremove
    tabs.forEach((tab) => tab.classList.remove("is-active"));
    images.forEach((img) => img.classList.remove("is-active"));
    // 初期画像にis-activeを付与
    if (initialImage) {
      initialImage.classList.add("is-active");
      // GSAPを使用したアニメーション
      gsap.fromTo(
        initialImage,
        { opacity: 0 },
        {
          opacity: 1,
          duration: 0.5,
          ease: "power2.out",
        }
      );
    }
  });
};
