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
var htmlmin = require('gulp-htmlmin');

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
		.pipe(gulp.dest('./'))
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
		.pipe(concat('common.js'))
		.pipe(gulp.dest('./'))
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(uglify())
		.pipe(gulp.dest('./'))
});

gulp.task('htmlmin', function() {
	return gulp.src('./**/*.html')
		.pipe(htmlmin({collapseWhitespace: true}))
		.pipe(gulp.dest('./dist'))
});

//変更を監視
gulp.task('watch', () => {
  gulp.watch('sass/**/*.scss', gulp.series('sass'));
})

//デフォルトタスク
gulp.task("default",
  gulp.series(
    'watch'
  )
);

