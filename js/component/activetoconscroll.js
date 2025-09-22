export const initializeActiveTocOnScroll = () => {
  const sidebarToc = document.querySelector(".js-business-side");
  const scrollTargetElements = document.querySelectorAll(".js-business-section");

  // sidebarTocとscrollTargetElementがページ内にない場合returnする
  if (!sidebarToc || scrollTargetElements.length === 0) return;

  // スムーススクロール追加
  const tocLinks = sidebarToc.querySelectorAll('a[href^="#"]');

  tocLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const targetId = link.getAttribute("href").substring(1);
      const targetElement = document.getElementById(targetId);
      if (!targetElement) return;

      window.scrollTo({
        top: targetElement.offsetTop,
        behavior: "smooth",
      });
    });
  });

  // IntersectionObserverのOption
  const observerOptions = {
    root: null,
    rootMargin: "-20% 0px -20% 0px",
    threshold: 0.3,
  };

  const handleIntersect = (entries) => {
    const visibleEntry = entries.filter((entry) => entry.isIntersecting).sort((a, b) => a.boundingClientRect.top - b.boundingClientRect.top)[0];

    if (!visibleEntry) return;

    const sectionId = visibleEntry.target.id;
    const activeLink = document.querySelector(`.js-business-side a[href="#${sectionId}"]`);
    if (!activeLink) return;

    const activeItem = activeLink.closest(".js-sidebar-item");

    // 既存のアクティブクラスを削除
    const allItems = document.querySelectorAll(".js-business-side .js-sidebar-item");

    allItems.forEach((item) => {
      if (item !== activeItem && item.classList.contains("is-active")) {
        gsap.to(item, {
          opacity: 0.5,
          duration: 0.3,
          ease: "power2.out",
          onComplete: () => {
            item.classList.remove("is-active");
          },
        });
      }
    });

    // 新しいアクティブクラスを追加
    if (activeItem && !activeItem.classList.contains("is-active")) {
      activeItem.classList.add("is-active");
      gsap.to(activeItem, {
        opacity: 1,
        duration: 0.3,
        ease: "power2.out",
      });
    }
  };

  const observer = new IntersectionObserver(handleIntersect, observerOptions);
  scrollTargetElements.forEach((el) => observer.observe(el));
};
