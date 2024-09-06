import header from "../widgets/header.js";
import promo from "../widgets/promo.js";
import posts from "../widgets/posts.js";
import about from "../widgets/about.js";
import categories from "../widgets/categories.js";
import special from "../widgets/special.js";
import members from "../widgets/members.js";
import testimonials from "../widgets/testimonials.js";
import footer from "../widgets/footer.js";

import { render } from "lit-html";

export function renderMainPage() {
	const main = document.createElement("main");

	render(
		[
			promo(),
			posts(),
			about(),
			categories(),
			special(),
			members(),
			testimonials(),
		],
		main
	);

	const pageParts = [header(), main, footer()];

	render(pageParts, document.body);
}
