// @ts-check
import { html } from "lit-html";
import { createSignature } from "./Signature.js";

/**
 * @param {import('./Post').Post} postData
 */
export const createPreviewPost = (postData) => {
	return html`
		<a href="#" class="post__preview-wrapper">
			<div class="post__preview">
				${createSignature(postData.author, postData.date)}
				<h3 class="post__header_preview">${postData.title}</h3>
			</div>
		</a>
	`;
};
