var gulp = require('gulp');
var del = require('del');
var cssnano = require('gulp-cssnano');
var uglify = require('gulp-uglify-es').default;
var rename = require('gulp-rename');
var util = require('gulp-util');

//翻译相关
var wpPot = require('gulp-wp-pot');
var sort = require('gulp-sort');
var text_domain = 'GoSheng-framework';                                      //文字域。
var destFile = 'GoSheng.pot';                                               //转换文件的名称。
var packageName = 'GoSheng';                                                //包名称
var bugReport = 'https://github.com/GoSheng/gosheng/issues';                //用户可以在哪里报告错误。
var lastTranslator = '张成林<469946668@qq.com>';                            //上次翻译电子邮件ID。
var team = '狗剩<admin@gosheng.net>';                                       //团队的电子邮件ID。
var translatePath = './languages/';                                         //保存翻译文件的位置。
var projectPHPWatchFiles = './**/*.php';

function translate() {
    'use strict';
    return gulp.src(projectPHPWatchFiles)
        .pipe(sort())
        .pipe(
            wpPot(
                {
                    domain: text_domain,
                    destFile: destFile,
                    package: packageName,
                    bugReport: bugReport,
                    lastTranslator: lastTranslator,
                    team: team
                }
            )
        )
        .pipe(gulp.dest(translatePath + '/' + destFile));
}


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

gulp.task('script_cookie', function () {
    gulp.src('./static/js/cookie.js')
        .pipe(uglify())
        .on('error', function (err) {
            util.log(util.colors.red('[Error]'), err.toString());
        })
        .pipe(rename('cookie.min.js'))
        .pipe(gulp.dest('./static/js/'))
});

gulp.task('script_google_reCaptcha', function () {
    gulp.src('./static/js/google_reCaptcha.js')
        .pipe(uglify())
        .on('error', function (err) {
            util.log(util.colors.red('[Error]'), err.toString());
        })
        .pipe(rename('google_reCaptcha.min.js'))
        .pipe(gulp.dest('./static/js/'))
});

gulp.task('script_gosheng_oauth', function () {
    gulp.src('./static/js/gosheng_oauth.js')
        .pipe(uglify())
        .on('error', function (err) {
            util.log(util.colors.red('[Error]'), err.toString());
        })
        .pipe(rename('gosheng_oauth.min.js'))
        .pipe(gulp.dest('./static/js/'))
});

gulp.task('script_gosheng_aplayer', function () {
    gulp.src('./static/js/gosheng_aplayer.js')
        .pipe(uglify())
        .on('error', function (err) {
            util.log(util.colors.red('[Error]'), err.toString());
        })
        .pipe(rename('gosheng_aplayer.min.js'))
        .pipe(gulp.dest('./static/js/'))
});

gulp.task('script_sidebar', function () {
    gulp.src('./static/js/sidebar.js')
        .pipe(uglify())
        .on('error', function (err) {
            util.log(util.colors.red('[Error]'), err.toString());
        })
        .pipe(rename('sidebar.min.js'))
        .pipe(gulp.dest('./static/js/'))
});

gulp.task('script_more_btn', function () {
    gulp.src('./static/js/more_btn.js')
        .pipe(uglify())
        .on('error', function (err) {
            util.log(util.colors.red('[Error]'), err.toString());
        })
        .pipe(rename('more_btn.min.js'))
        .pipe(gulp.dest('./static/js/'))
});

gulp.task('style_local', function () {
    gulp.src(['./static/css/local.css'])
        .pipe(cssnano())
        .pipe(rename('local.min.css'))
        .pipe(gulp.dest('./static/css/'))
});

gulp.task('style_notyf', function () {//修改过样式，注意保存
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
    gulp.watch('static/js/notyf.js', ['script_notyf']);
    gulp.watch('static/js/cookie.js', ['script_cookie']);
    gulp.watch('static/js/google_reCaptcha.js', ['script_google_reCaptcha']);
    gulp.watch('static/js/gosheng_oauth.js', ['script_gosheng_oauth']);
});

gulp.task('watch', function () {
    gulp.watch('static/css/local.css', ['style_local']);
    gulp.watch('static/css/notyf.css', ['style_notyf']);
    gulp.watch('static/js/local.js', ['script_local']);
    gulp.watch('static/js/notyf.js', ['script_notyf']);
    gulp.watch('static/js/cookie.js', ['script_cookie']);
    gulp.watch('static/js/google_reCaptcha.js', ['script_google_reCaptcha']);
    gulp.watch('static/js/gosheng_oauth.js', ['script_gosheng_oauth']);
});

gulp.task('translate', translate);
