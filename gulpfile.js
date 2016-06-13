var gulp = require('gulp')
var sass = require('gulp-sass')
var browserSync = require('browser-sync').create()

gulp.task('sass', function () {
  return gulp.src('sass/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('.'))
    .pipe(browserSync.reload({
      stream: true
    }))
})

gulp.task('browserSync', function () {
  browserSync.init({
    proxy: 'localhost/ssnblog/home'
  })
})

gulp.task('default', ['browserSync', 'sass'], function () {
  gulp.watch('sass/**/*.scss', ['sass'])
})

gulp.task('deploy', ['sass'], function () {
  console.log('gulp task: deploy')
})
