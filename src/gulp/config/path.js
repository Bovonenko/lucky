import * as nodePath from "path";
const rootFolder = nodePath.basename(nodePath.resolve());

const buildFolder = "./public";
const srcFolder = "./src";

export const path = {
	build: {
		js: `${buildFolder}/js/`,
		css: `${buildFolder}/css/`,
		html: `${buildFolder}/`,
		images: `${buildFolder}/img/`,
		fonts: `${buildFolder}/fonts/`,
		files: `${buildFolder}/files/`,
	},
	src: {
		js: `${srcFolder}/js/script.js`,
		images: `${srcFolder}/img/**/*.{jpg,jpeg,png,gif,webp}`,
		svg: `${srcFolder}/img/**/*.svg`,
		scss: `${srcFolder}/scss/style.scss`,
		html: `${srcFolder}/*.{html,php}`,
		files: `${srcFolder}/files/**/*.*`,
	},
	watch: {
		js: `${srcFolder}/js/**/*.js`,
		scss: `${srcFolder}/**/*.scss`,
		html: `${srcFolder}/*.{html,php}`,
		images: `${srcFolder}/img/**/*.{jpg,jpeg,png,svg,gif,ico,webp}`,
		files: `${srcFolder}/files/**/*.*`,
	},
	clean: [`${buildFolder}/js/`, `${buildFolder}/css/`],
	buildFolder,
	srcFolder,
	rootFolder,
	ftp: "www ggg",
};
