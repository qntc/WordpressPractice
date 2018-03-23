// Project specific variables
var url = 'clearspace.dev.'; // Local dev URL. Change as needed.
// Load plugins
var gulp = require('gulp'),
	stylus = require('gulp-stylus'),
	jeet = require('jeet'), // stylus grid
	autoprefixer = require('gulp-autoprefixer'),
	minifyCss = require('gulp-minify-css'),
	rename = require('gulp-rename'),
	browserSync = require('browser-sync'),
	sourcemap = require('gulp-sourcemaps'),
	reload = browserSync.reload;
// Styles
gulp.task('styles', function(){
	 gulp.src('./styl/*.styl') // Two files get compiled here: main stylsheet (all partials imported) and editor stylesheet. Makes for simple gulpfile config, but maybe not best approach. Comments welcome! 
	.pipe(sourcemap.init())
 	.pipe(stylus({
       use: [jeet()]
     }))
	.pipe(autoprefixer({
			browsers: ['last 2 versions']
		}))
	.pipe(sourcemap.write('.'))
	.pipe(gulp.dest('./'))
	.pipe(reload({ stream : true }))
	// ---------------------------------------
	// Uncomment next 3 lines for minified css
	// ---------------------------------------
	// .pipe(rename({ suffix: '.min' }))
	// .pipe(minifyCss())
	// .pipe(gulp.dest('./'))
});
// Browser Sync
gulp.task('browser-sync', function(){
	browserSync({
		proxy: url
		})
});
// Watch!
gulp.task('watch', ['browser-sync'], function(){
	gulp.watch('./styl/**/*.styl', ['styles']);
});