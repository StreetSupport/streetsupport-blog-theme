var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();


gulp.task('sass', function() {
  return gulp.src('sass/style.scss') // Gets all files ending with .scss in app/scss
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('.'))
    .pipe(browserSync.reload({
      stream: true
    }));
});


gulp.task('watch', ['browserSync', 'sass'], function (){
  gulp.watch('sass/**/*.scss', ['sass']);
  // Other watchers
});

gulp.task('browserSync', function() {
  browserSync.init({
    proxy: "localhost/ssnblog/home"
  });
});
