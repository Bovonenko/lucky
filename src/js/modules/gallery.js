const gallery = () => {
	const blurredDivs = document.querySelectorAll(".blurred");
	if (!blurredDivs) return;
	blurredDivs.forEach((div) => {
		const img = div.querySelector("img");
		if (!img) return;

		function loaded() {
			div.classList.add("loaded");
		}

		if (img.complete) {
			loaded();
		} else {
			img.addEventListener("load", loaded);
		}
	});
};

export default gallery;
