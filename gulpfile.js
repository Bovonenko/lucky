import gulp from "gulp";

import { path } from "./src/gulp/config/path.js";
import { plugins } from "./src/gulp/config/plugins.js";

global.app = {
	isBuild: process.argv.includes("--build"),
	isDev: !process.argv.includes("--build"),
	path,
	gulp,
	plugins,
};

// import { copy } from "./gulp/tasks/copy.js";
import { reset } from "./src/gulp/tasks/reset.js";
// import { html } from "./gulp/tasks/html.js";
import { server } from "./src/gulp/tasks/server.js";
import { scss } from "./src/gulp/tasks/scss.js";
import { js } from "./src/gulp/tasks/js.js";
// import { images } from "./gulp/tasks/images.js";
// import { otfToTtf, ttfToWoff, fontsStyle } from "./gulp/tasks/fonts.js";
import { zip } from "./src/gulp/tasks/zip.js";
import { ftp } from "./src/gulp/tasks/ftp.js";

function watcher() {
	// gulp.watch(path.watch.files, copy);
	// gulp.watch(path.watch.html, html);
	gulp.watch(path.watch.scss, scss);
	gulp.watch(path.watch.js, js);
	// gulp.watch(path.watch.images, images);
}

// const fonts = gulp.series(otfToTtf, ttfToWoff, fontsStyle);

const mainTasks = gulp.parallel(scss, js);

const dev = gulp.series(reset, mainTasks, gulp.parallel(watcher, server));
const build = gulp.series(reset, mainTasks);
const deployZIP = gulp.series(reset, mainTasks, zip);
const deployFTP = gulp.series(reset, mainTasks, ftp);

export { dev, build, deployZIP, deployFTP };

gulp.task("default", dev);
