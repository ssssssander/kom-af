'use strict';
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const pump = require('pump');
const minify = require('gulp-minify');
// const imageOptim = require('gulp-imageoptim');

gulp.task('default', ['sass','image','js','font','video']);
gulp.task('watch', ['sass:watch','js:watch','image:watch','video:watch']);

/*
 *
 * SASS
 *
 */
gulp.task('sass', function () {
	return gulp.src('resources/assets/sass/*.scss')
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(gulp.dest('public/css'));
});
gulp.task('sass:watch', function () {
	gulp.watch('resources/assets/sass/*.scss', ['sass']);
});

/*
 *
 * image
 *
 */
gulp.task('image', function () {
	gulp.src('resources/assets/img/**/*')
		// .pipe(imageOptim.optimize())
		.pipe(gulp.dest('public/img'));
});
gulp.task('image:watch', function () {
	gulp.watch('resources/assets/img/*', ['image']);
});

/*
 *
 * video
 *
 */



gulp.task('video', function () {
	gulp.src('resources/assets/vid/**/*')
		.pipe(gulp.dest('public/vid'));
});
gulp.task('video:watch', function () {
	gulp.watch('resources/assets/vid/*', ['video']);
});

/*
 *
 * js
 *
 */
gulp.task('js', function() {
	gulp.src('resources/assets/js/*.js')
		.pipe(minify())
		.pipe(gulp.dest('public/js'))
});




gulp.task('js:watch', function () {
	gulp.watch('resources/assets/js/*.js', ['js']);
});

/*
 *
 * fonts
 *
 */

gulp.task('font', function() {
	return gulp.src('resources/assets/font/*')
		.pipe(gulp.dest('public/font'));
});
gulp.task('font:watch', function () {
	gulp.watch('resources/assets/font/*', ['font']);
});