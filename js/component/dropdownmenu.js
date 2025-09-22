let isInitialized = false; // 初期化済みかどうかのフラグ
let removeEventListeners = null; // イベント解除用の関数

export const initializeDropDownMenu = () => {
  const init = () => {
    if (isInitialized) return;

    const button = document.querySelector(".js-drop-down-menu-button");
    const menu = document.querySelector(".js-drop-down-menu");
    const isOpen = "is-open";

    // buttonとmenuがページ内にない場合returnする
    if (!button || !menu) return;

    // Opening Keyframe
    const openingKeyframes = {
      opacity: [0, 1],
    };

    // Closing Keyframe
    const closingKeyframes = {
      opacity: [1, 0],
    };

    // 共通Option
    const options = {
      duration: 300,
      easing: "ease-out",
    };

    // menuをopenする関数
    const openMenu = () => {
      menu.classList.add(isOpen);
      menu.animate(openingKeyframes, options);
    };

    // menuをcloseする関数
    const closeMenu = () => {
      const closingAnim = menu.animate(closingKeyframes, options);
      // アニメーション完了後
      closingAnim.onfinish = () => {
        menu.classList.remove(isOpen);
      };
    };

    const handleClick = (event) => {
      event.stopPropagation();
      menu.classList.contains(isOpen) ? closeMenu() : openMenu();
    };

    const handleOutsideClick = () => closeMenu();
    const handleKeydown = (event) => {
      if (event.key === "Escape") closeMenu();
    };

    button.addEventListener("click", handleClick);
    document.addEventListener("click", handleOutsideClick);
    document.addEventListener("keydown", handleKeydown);

    // イベント解除のための関数をセット
    removeEventListeners = () => {
      button.removeEventListener("click", handleClick);
      document.removeEventListener("click", handleOutsideClick);
      document.removeEventListener("keydown", handleKeydown);
    };

    isInitialized = true;
  };

  const destroy = () => {
    if (removeEventListeners) {
      removeEventListeners();
      removeEventListeners = null;
    }
    isInitialized = false;
  };

  const handleResize = () => {
    if (window.innerWidth >= 768) {
      init();
    } else {
      destroy();
    }
  };

  // 初期実行 + resize対応
  handleResize();
  window.addEventListener("resize", handleResize);
};
