
var gulp      = require('gulp'), // Подключаем Gulp
    sass        = require('gulp-sass'), //Подключаем Sass пакет,
    browserSync = require('browser-sync'); // Подключаем Browser Sync
	
gulp.task('default', function(){
 
   
 
});

gulp.task('sass', function () {
  return gulp.src('css/main.sass')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('css/main-res.css'))
	.pipe(browserSync.reload({stream: true}));
});


gulp.task('update-file', function() { // Создаем таск browser-sync
    return gulp.src('css/*.css') // Берем источник
	 .pipe(browserSync.reload({stream: true})) // Обновляем CSS на странице при изменении
});

gulp.task('browser-sync', function() { // Создаем таск browser-sync
    browserSync({
    proxy:'vds',
    port:8080
  });
});

gulp.task('watch',['browser-sync', 'update-file'], function () {
    //gulp.watch('css/*.css', ['update-file'] );

    gulp.watch('js/*.js', ['update-file'] );
	//gulp.watch('css/*.scss', ['sass'] );
    gulp.watch('css/**/*.scss', ['sass'] );

    gulp.watch('css/**/*.css', ['update-file'] );
});
