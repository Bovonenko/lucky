// @ts-check
import { html, nothing } from "lit-html";
import { createSignature } from "./Signature.js";

/**
 * @param {import('./Post').Post} postData
 */
export const createFeaturedPost = (postData) => {
	const img = postData.img
		? html`
				<img
					class="post__img"
					src=${postData.img ?? nothing}
					alt="Featured Post Image"
				/>
		  `
		: nothing;

	return html`
		<div class="post">
			${img} ${createSignature(postData.author, postData.date)}
			<h3 class="post__header">${postData.title}</h3>
			<p class="post__text">${postData.body}</p>
			<a href="#" class="link post__link">Read More ></a>
		</div>
	`;
};
