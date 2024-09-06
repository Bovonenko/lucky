// @ts-check
import { msg } from "@lit/localize";
import { html, nothing } from "lit-html";

/**
 * @param {string} [author]
 * @param {number} [date]
 * @returns
 */
export const createSignature = (author, date = 1716454714) => {
	if (!author && !date) {
		return nothing;
	}

	const authorTemplate = author
		? html`
				${msg("By")}
				<span class="signature__author post__signature-author">
					${author}
				</span>
		  `
		: nothing;

	const dateTemplate = date
		? html`
				<span class="signature__date">
					${convertDateFromTimestamp(date)}
				</span>
		  `
		: nothing;

	const divider = author && date ? html`|` : nothing;

	return html`
		<p class="signature post__signature">
			${authorTemplate} ${divider} ${dateTemplate}
		</p>
	`;
};

function convertDateFromTimestamp(timestamp) {
	const date = new Date(timestamp * 1000);
	const options = { year: "numeric", month: "long", day: "numeric" };
	return date.toLocaleDateString("en-US", options);
}
