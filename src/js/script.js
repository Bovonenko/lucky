import burger from "./modules/burger.js";
import gallery from "./modules/gallery.js";
import "./modules/fslightbox.js";

window.addEventListener("DOMContentLoaded", () => {
	burger();

	gallery();
	console.log(location.pathname);
});
