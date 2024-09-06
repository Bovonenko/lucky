import Glide, {
	Swipe,
	Autoplay,
	Breakpoints,
} from "@glidejs/glide/dist/glide.modular.esm.js";

const isTouchSupported =
	"ontouchstart" in window || window.navigator.maxTouchPoints;

const slider = () => {
	const actions = document.querySelector(".slider__actions");

	const glide = new Glide(".glide", {
		type: "carousel",
		startAt: 0,
		perView: 5,
		gap: 24,
		autoplay: false, // 4000
		swipeThreshold: isTouchSupported,
		dragThreshold: isTouchSupported,
		hoverpause: true,
		animationDuration: 600,
		breakpoints: {
			1300: {
				perView: 4,
			},
			1070: {
				perView: 3,
			},
			768: {
				perView: 2,
			},
			630: {
				perView: 2,
			},
			530: {
				perView: 1,
			},
		},
	});

	actions.addEventListener("click", (e) => {
		if (e.target.closest("[data-prev]")) {
			glide.go("<");
		} else if (e.target.closest("[data-next]")) {
			glide.go(">");
		}
	});

	glide.mount({ Autoplay, Breakpoints, Swipe });
};

export default slider;
