const burger = () => {
	const menu = document.querySelector(".menu"),
		menuToggleBtn = document.querySelector(".menu__toggle"),
		overlay = document.querySelector(".menu__overlay");

	function showMenu(showMenu) {
		document.body.style.overflowY = showMenu ? "hidden" : "unset";

		menu.setAttribute("data-visibility", showMenu);
		overlay.setAttribute("aria-expanded", showMenu);
		menuToggleBtn.setAttribute("aria-expanded", showMenu);
	}

	function toggleMenu() {
		const isVisible = menu.getAttribute("data-visibility") === "true";

		if (isVisible) {
			showMenu(false);
		} else {
			showMenu(true);
		}
	}

	overlay.addEventListener("click", () => showMenu(false));
	menuToggleBtn.addEventListener("click", toggleMenu);

	menu.addEventListener("click", (e) => {
		const target = e.target;
		if (
			target.closest(".menu__item") &&
			!target.closest(".language-dropdown")
		) {
			showMenu(false);
		}
	});
};

export default burger;
