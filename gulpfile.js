const {
    series,
    watch,
    src,
    dest
} = require('gulp')





// var cssmin = require('gulp-cssmin');
// var rename = require('gulp-rename');


// const cssMin = () => (
//     src('./src/css/*.css')
//     .pipe(cssmin())
//     .pipe(rename({
//         suffix: '.min'
//     }))
//     .pipe(dest('./assets/'))
// )


const Img = () =>
    src(["./src/img/*.jpg","./src/img/**./*.jpg", "./src/img/*.png", "./src/img/**./*.png", "./src/img/svg/*.svg    "])
    .pipe(dest("./assets/img/"));   


var sass = require('gulp-sass');
var cssmin = require('gulp-cssmin');

const sassCss = () => (
    src('./src/scss/pages/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cssmin())
    .pipe(dest('./assets/css/'))
);


// var concat = require('gulp-concat');
// var uglify = require('gulp-uglify');


const jsCompile = () =>
    src(['./assets/src/js/jquery.js', './assets/src/js/slick.js', './assets/src/js/javascript.js'])
    // .pipe(concat('all.js'))
    // .pipe(uglify())
    .pipe(dest('./assets/js/'));


const copyFonts = () =>
    src(["./src/fonts/*.woff", "./src/fonts/*.woff2"])
    .pipe(dest("./assets/fonts/"));



    
const tasks = () => (watch(["./src/scss/*.scss", "./src/scss/**/*.scss", "./src/scss/**/**/*.scss"], sassCss),
    watch(["./src/fonts/*.woff2"], copyFonts),
    watch(['./assets/src/js/*.js'], jsCompile)
)
    



exports.tasks = tasks
// exports.cssMin = cssMin
exports.sassCss = sassCss
exports.Img = Img
exports.copyFonts = copyFonts
exports.jsCompile = jsCompile