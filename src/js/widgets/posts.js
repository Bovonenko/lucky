import { html } from "lit-html";

export default () => {
	return html`
		<section class="posts">
			<div class="posts__container">
				<div class="posts__featured">
					<div class="posts__label-wrapper">
						<h2 class="posts__label-title">Featured Post</h2>
					</div>
					<div class="post">
						<img
							class="post__img"
							src="../img/promo/bg.webp"
							alt="Featured Post Image"
						/>
						<p class="signature post__signature">
							By
							<span
								class="signature__author post__signature-author"
								>James West</span
							>
							|
							<span class="signature__date">May 23, 2022</span>
						</p>
						<h3 class="post__header">
							Lorem ipsum dolor sit amet, consectetur adipiscing
							elit, sed do eiusmod tempor.
						</h3>
						<p class="post__text">
							Duis aute irure dolor in reprehenderit in voluptate
							velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident.
						</p>
						<a href="#" class="link post__link">Read More ></a>
					</div>
				</div>
				<div class="posts__all">
					<div class="posts__label-wrapper">
						<h2 class="posts__label-title">All Posts</h2>
						<a class="posts__label-link" href="#">View All</a>
					</div>
					<a href="#" class="post__preview-wrapper">
						<div class="post__preview">
							<p class="signature post__signature_preview">
								By
								<span
									class="signature__author post__signature-author"
									>James West</span
								>
								|
								<span class="signature__date"
									>May 23, 2022</span
								>
							</p>
							<h3 class="post__header_preview">
								8 Figma design systems that you can download for
								free today.
							</h3>
						</div>
					</a>
					<a href="" class="post__preview-wrapper">
						<div class="post__preview">
							<p class="signature post__signature_preview">
								By
								<span
									class="signature__author post__signature-author"
									>James West</span
								>
								|
								<span class="signature__date"
									>May 23, 2022</span
								>
							</p>
							<h3 class="post__header_preview">
								8 Figma design systems that you can download for
								free today.
							</h3>
						</div>
					</a>
					<a href="" class="post__preview-wrapper">
						<div class="post__preview">
							<p class="signature post__signature_preview">
								By
								<span
									class="signature__author post__signature-author"
									>James West</span
								>
								|
								<span class="signature__date"
									>May 23, 2022</span
								>
							</p>
							<h3 class="post__header_preview">
								8 Figma design systems that you can download for
								free today.
							</h3>
						</div>
					</a>
					<a href="" class="post__preview-wrapper">
						<div class="post__preview">
							<p class="signature post__signature_preview">
								By
								<span
									class="signature__author post__signature-author"
									>James West</span
								>
								|
								<span class="signature__date"
									>May 23, 2022</span
								>
							</p>
							<h3 class="post__header_preview">
								8 Figma design systems that you can download for
								free today.
							</h3>
						</div>
					</a>
				</div>
			</div>
		</section>
	`;
};
