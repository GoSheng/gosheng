const del = require('del');
const gulp = require('gulp');
const cssnano = require('gulp-cssnano');
const rename = require('gulp-rename');
const terser = require('gulp-terser');

//翻译相关
const wpPot = require('gulp-wp-pot');
const sort = require('gulp-sort');
const text_domain = 'GoSheng-framework';                                      //文字域。
const destFile = 'GoSheng.pot';                                               //转换文件的名称。
const packageName = 'GoSheng';                                                //包名称
const bugReport = 'https://github.com/GoSheng/gosheng/issues';                //用户可以在哪里报告错误。
const lastTranslator = '张成林<469946668@qq.com>';                            //上次翻译电子邮件ID。
const team = '狗剩<admin@gosheng.net>';                                       //团队的电子邮件ID。
const translatePath = './languages/';                                         //保存翻译文件的位置。
const projectPHPWatchFiles = './**/*.php';

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


gulp.task('script_local', script_local);

function script_local(done) {
    // 'use strict';
    gulp.src(['./static/js/local.js'])
        .pipe(terser())
        .pipe(rename('local.min.js'))
        .pipe(gulp.dest('./static/js/'));
    done();
}

gulp.task('script_notyf', function (done) {
    gulp.src('./static/js/notyf.js')
        .pipe(terser())
        .pipe(rename('notyf.min.js'))
        .pipe(gulp.dest('./static/js/'));
    done();
});

gulp.task('script_cookie', function (done) {
    gulp.src('./static/js/cookie.js')
        .pipe(terser())
        .pipe(rename('cookie.min.js'))
        .pipe(gulp.dest('./static/js/'));
    done();
});

gulp.task('script_google_reCaptcha', function (done) {
    gulp.src('./static/js/google_reCaptcha.js')
        .pipe(terser())
        .pipe(rename('google_reCaptcha.min.js'))
        .pipe(gulp.dest('./static/js/'));
    done();
});

gulp.task('script_gosheng_oauth', function (done) {
    gulp.src('./static/js/gosheng_oauth.js')
        .pipe(terser())
        .pipe(rename('gosheng_oauth.min.js'))
        .pipe(gulp.dest('./static/js/'));
    done();
});

gulp.task('script_sidebar', function (done) {
    gulp.src('./static/js/sidebar.js')
        .pipe(terser())
        .pipe(rename('sidebar.min.js'))
        .pipe(gulp.dest('./static/js/'));
    done();
});

gulp.task('script_more_btn', function (done) {
    gulp.src('./static/js/more_btn.js')
        .pipe(terser())
        .pipe(rename('more_btn.min.js'))
        .pipe(gulp.dest('./static/js/'));
    done();
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

gulp.task('default', function () {
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
