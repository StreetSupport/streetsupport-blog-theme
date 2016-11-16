var gulp = require('gulp')
var sass = require('gulp-sass')

var postcss      = require('gulp-postcss');
var sourcemaps   = require('gulp-sourcemaps');
var autoprefixer = require('autoprefixer');

var browserSync = require('browser-sync').create()

gulp.task('sass', function () {
  return gulp.src('sass/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.init())
    .pipe(postcss([ autoprefixer({ browsers: ['last 3 versions', 'safari 8', 'ios 8', 'android 4', 'android 3'] }) ]))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('.'))
    .pipe(browserSync.reload({
      stream: true
    }))
})

gulp.task('browserSync', function () {
  browserSync.init({
    proxy: 'ssn:8080'
  })
})

gulp.task('default', ['browserSync', 'sass'], function () {
  gulp.watch('sass/**/*.scss', ['sass'])
})

gulp.task('deploy', ['sass'], function () {
  console.log('gulp task: deploy')
})
