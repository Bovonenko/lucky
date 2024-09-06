import versionNumber from "gulp-version-number";
import webpHTMLNosvg from "gulp-webp-html-nosvg";

export const html = () => {
	return app.gulp
		.src(app.path.src.html)
		.pipe(
			app.plugins.plumber(
				app.plugins.notify.onError({
					titile: "HTML",
					message: "Error: <%= error.message %>",
				})
			)
		)
		.pipe(app.plugins.if(app.isBuild, webpHTMLNosvg()))
		.pipe(
			app.plugins.if(
				app.isBuild,
				versionNumber({
					value: "%DT%",
					append: {
						key: "_v",
						cover: 0,
						to: ["css", "js"],
					},
					output: {
						file: "gulp/version.json",
					},
				})
			)
		)
		.pipe(app.gulp.dest(app.path.build.html))
		.pipe(app.plugins.browserSync.stream());
};
