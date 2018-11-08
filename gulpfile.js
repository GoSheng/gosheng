var gulp = require('gulp');
var del = require('del');
var cssnano = require('gulp-cssnano');
var uglify = require('gulp-uglify-es').default;
var rename = require('gulp-rename');
var util = require('gulp-util');

gulp.task("clean", function () {
    return del(['./dist']);
});
gulp.task('script_local', function () {
    gulp.src('./static/js/local.js')
        .pipe(uglify())
        .on('error', function (err) {
            util.log(util.colors.red('[Error]'), err.toString());
        })
        .pipe(rename('local.min.js'))
        .pipe(gulp.dest('./static/js/'))
});

gulp.task('script_notyf', function () {
    gulp.src('./static/js/notyf.js')
        .pipe(uglify())
        .on('error', function (err) {
            util.log(util.colors.red('[Error]'), err.toString());
        })
        .pipe(rename('notyf.min.js'))
        .pipe(gulp.dest('./static/js/'))
});

gulp.task('style_local', function () {
    gulp.src(['./static/css/local.css'])
        .pipe(cssnano())
        .pipe(rename('local.min.css'))
        .pipe(gulp.dest('./static/css/'))
});

gulp.task('style_notyf', function () {
    gulp.src(['./static/css/notyf.css'])
        .pipe(cssnano())
        .pipe(rename('notyf.min.css'))
        .pipe(gulp.dest('./static/css/'))
});

gulp.task('default', ['clean'], function () {
    gulp.start('script_local', 'style_local');
    gulp.watch('static/css/local.css', ['style_local']);
    gulp.watch('static/css/notyf.css', ['style_notyf']);
    gulp.watch('static/js/local.js', ['script_local']);
    gulp.watch('static/js/notyf.js', ['script_notyf'])
});

gulp.task('watch', function () {
    gulp.watch('static/css/local.css', ['style_local']);
    gulp.watch('static/css/notyf.css', ['style_notyf']);
    gulp.watch('static/js/local.js', ['script_local']);
    gulp.watch('static/js/notyf.js', ['script_notyf'])
});
