'use strict';
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const image = require('gulp-image');
const uglify = require('gulp-uglify');
const pump = require('pump');

gulp.task('default', ['sass','image','js','font']);
gulp.task('watch', ['sass:watch','js:watch']);

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
	gulp.src('resources/assets/img/*')
		.pipe(image())
		.pipe(gulp.dest('public/img'));
});

/*
 *
 * js
 *
 */
gulp.task('js', function () {
	pump([
		gulp.src('resources/assets.js/*.js'),
		uglify(),
		gulp.dest('public/js')
	]);
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