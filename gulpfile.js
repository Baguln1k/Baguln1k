// пути
// начальная папка
var pathFolderStart = 'app/';
// конечная папка
var pathFolderEnd = 'assest/dist/';
// сайт
var bSync = true;
var site =  "192.168.0.200";
//sass
var Sass = true;
if (Sass) {
var pathSassStart = pathFolderStart + 'sass/*.scss'; // начальный 
var pathSassEnd = pathFolderStart + '/css'; // конечный
}
//css
var Css = true;
if (Css) {
var pathCssStart = pathFolderStart + 'css/*.css'; // начальный 
var pathCssEnd = pathFolderEnd + 'style'; // конечный
}
//js
var Js = true;
if (Js) {
var pathJsStart = pathFolderStart + 'scripts/*.js'; // начальный 
var pathJsEnd = pathFolderEnd + 'scripts'; // конечный
}


var gulp = require('gulp');
// переименовывание файлов
var rename = require("gulp-rename");
var del = require ('del'); // удаление
// css
var concatCss = require('gulp-concat-css');
var cleanCSS = require('gulp-clean-css');
var autoprefixer = require('gulp-autoprefixer');

//js
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var  js_obfuscator = require('gulp-js-obfuscator');
//sass
var sass = require('gulp-sass');

var browserSync = require('browser-sync').create();



gulp.task('default', ['clear' , 'css' , 'js' , 'browser-sync']);
// if (Sass) gulp.watch(pathSassStart, [ 'sass' ]);
// if (Css) gulp.watch(pathCssStart, [ 'relcss' ]);
if (Sass) gulp.watch(pathSassStart, [ 'relcss' ]);
if (Js) gulp.watch(pathJsStart, ['reljs']);
if (bSync) gulp.watch('*html', browserSync.reload);
if (bSync) gulp.watch('*php', browserSync.reload);
if (bSync) gulp.watch('templates/*php', browserSync.reload);


gulp.task('relcss', ['css'], function() {
if (bSync) browserSync.reload(); 
});

gulp.task('reljs', ['js'], function() {
if (bSync)  browserSync.reload(); 
});








gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: site,
        notify: false
    });
});



// отчистка
gulp.task('clear' , function() {
  return del.sync(pathFolderEnd);
});


// sass
if (Sass) {
  gulp.task('sass', function() {
    return gulp.src(pathSassStart)
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest(pathSassEnd));
//    .pipe(gulp.browserSync.reload);

  });
}

// раблта с css
if (Css) {
  gulp.task('css', ['sass'] , function () {
  return gulp.src(pathCssStart) // от куда берем файлы
    .pipe(concatCss(pathCssEnd)) // объединяет все css файлы в один
      // автопрефиксер
      .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
      }))
    // .pipe(cleanCSS({compatibility: 'ie8'})) // минификатор css
    .pipe(rename("style.min.css")) // переименовывает файлы
    .pipe(gulp.dest('' + pathCssEnd)); // куда импортируем файлы
  });
}

// js
if (Js) {
  gulp.task('js', function() {
    return gulp.src(pathJsStart)
    .pipe(concat('main.js')) // объединяет все js файлы
    .pipe(js_obfuscator({}, ["**/jquery-*.js"])) // обфустрактор
    .pipe(uglify()) // минификатор js
    .pipe(gulp.dest(pathJsEnd));
  });
}