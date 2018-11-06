//if node version is lower than v.0.1.2
require('es6-promise').polyfill();
var gulp = require('gulp');
var plumber = require('gulp-plumber');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var autoPrefixer = require('gulp-autoprefixer');
var cmq = require('gulp-merge-media-queries');
var cleanCss = require('gulp-clean-css');
var jshint = require('gulp-jshint');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

gulp.task('sass',function(){
	return gulp.src(['sass/**/*.scss'])
		.pipe(plumber({
			handleError: function (err) {
				console.log(err);
				this.emit('end');
			}
		}))
		.pipe(sass())
		.pipe(autoPrefixer())
		.pipe(cmq({log:true}))
		.pipe(gulp.dest('./'))
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(cleanCss())
		.pipe(gulp.dest('./min/'))
});
gulp.task('js',function(){
	return gulp.src(['js/**/*.js'])
		.pipe(plumber({
			handleError: function (err) {
				console.log(err);
				this.emit('end');
			}
		}))
		.pipe(jshint())
		.pipe(jshint.reporter('default'))
		.pipe(concat('main.js'))
		.pipe(gulp.dest('./'))
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(uglify())
		.pipe(gulp.dest('./min/'))
});
gulp.task('html',function(){
	return gulp.src(['html/**/*.html'])
		.pipe(plumber({
			handleError: function (err) {
				console.log(err);
				this.emit('end');
			}
		}))
		.pipe(gulp.dest('./'))
});

gulp.task('default',function(){
    return gulp.watch('js/**/*.js',gulp.task('js'));
    return gulp.watch('sass/**/*.scss',gulp.task('sass'));
    return gulp.watch('html/**/*.html',gulp.task('html'));
});

