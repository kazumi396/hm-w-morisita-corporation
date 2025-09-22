import { switchViewport } from "./utility/switch-viewport.js";
import { initializeHamburgerMenu } from "./component/hamburgermenu.js";
import { initializeDropDownMenu } from "./component/dropdownmenu.js";
import { initializeSplide } from "./component/splide.js";
import { initializeProductThumbnailSwitch } from "./component/productthumbnailswitch.js";
import { initializeScrollToTop } from "./component/scrolltotop.js";
import { initializeActiveTocOnScroll } from "./component/activetoconscroll.js";

initializeSplide();
switchViewport();
window.addEventListener("resize", switchViewport);

initializeHamburgerMenu();
initializeDropDownMenu();

initializeScrollToTop();
initializeActiveTocOnScroll();
initializeProductThumbnailSwitch();
