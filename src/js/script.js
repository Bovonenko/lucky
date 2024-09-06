import burger from "./modules/burger.js";
import slider from "./modules/slider.js";
// import * as Fetch from "./modules/fetch.js";
// import { render } from "lit-html";
// import { createPreviewPost } from "./ui/PreviewPost.js";
// import { createFeaturedPost } from "./ui/FeaturedPost.js";
// import { renderMainPage } from "./pages/main.js";
window.addEventListener("DOMContentLoaded", () => {
	// renderMainPage();
	burger();
	try {
		slider();
	} catch (error) {}

	document.querySelector(".promo__link").addEventListener("click", (e) => {
		allPosts();
	});
});

// Fetch.allPosts().then((postsData) => {
// 	const target = document.querySelector(".posts__all");
// 	const postsToRender = [];
// 	for (let i = 0; i < 4; i++) {
// 		postsToRender.push(createPreviewPost(postsData[i]));
// 	}
// 	render(postsToRender, target);
// });

// Fetch.featuredPost().then((postData) => {
// 	const target = document.querySelector(".posts__featured");
// 	const featuredPost = createFeaturedPost(postData);
// 	render(featuredPost, target);
// });
