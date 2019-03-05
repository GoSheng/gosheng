const del = require('del');
const gulp = require('gulp');
const cssnano = require('gulp-cssnano');
const rename = require('gulp-rename');
const terser = require('gulp-terser');

//复制静态文件到主题
const bootstrap_toasts_js_path = './node_modules/bootstrap-toasts/src/bootstrap-toasts.js';
const bootstrap_toasts_min_js_path = './node_modules/bootstrap-toasts/dist/bootstrap-toasts.min.js';
const jquery_js_path = './node_modules/jquery/dist/jquery.js';
const jquery_min_js_path = './node_modules/jquery/dist/jquery.min.js';

// popper.js
const popper_js_path = './node_modules/popper.js/dist/umd/popper.js';
const popper_min_js_path = './node_modules/popper.js/dist/umd/popper.min.js';
const popper_js_map_path = './node_modules/popper.js/dist/umd/popper.js.map';
const popper_min_js_map_path = './node_modules/popper.js/dist/umd/popper.min.js.map';

// Bootstrap
const bs_js_path = './node_modules/bootstrap/dist/js/bootstrap.js';
const bs_min_js_path = './node_modules/bootstrap/dist/js/bootstrap.min.js';
const bs_js_map_path = './node_modules/bootstrap/dist/js/bootstrap.js.map';
const bs_min_js_map_path = './node_modules/bootstrap/dist/js/bootstrap.min.js.map';
const bs_css_path = './node_modules/bootstrap/dist/css/bootstrap.css';
const bs_min_css_path = './node_modules/bootstrap/dist/css/bootstrap.min.css';
const bs_css_map_path = './node_modules/bootstrap/dist/css/bootstrap.css.map';
const bs_min_css_map = './node_modules/bootstrap/dist/css/bootstrap.min.css.map';


function copy_bs(done) {
    gulp.src([bs_js_path, bs_min_js_path, bs_js_map_path, bs_min_js_map_path])
        .pipe(gulp.dest('./static/js/'));
    gulp.src([bs_css_path, bs_min_css_path, bs_css_map_path, bs_min_css_map])
        .pipe(gulp.dest('./static/css/'));
    done();
}

function copy_popper(done) {
    gulp.src([popper_js_path, popper_min_js_path, popper_js_map_path, popper_min_js_map_path])
        .pipe(gulp.dest('./static/js/'));
    done();
}

function copy_js(done) {
    gulp.src([bootstrap_toasts_js_path, bootstrap_toasts_min_js_path, jquery_js_path, jquery_min_js_path])
        .pipe(gulp.dest('./static/js/'));
    done();
}


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

function script_local(done) {
    // 'use strict';
    gulp.src(['./static/js/local.js'])
        .pipe(terser())
        .pipe(rename('local.min.js'))
        .pipe(gulp.dest('./static/js/'));
    done();
}

function script_toast(done) {
    gulp.src(['./static/js/toast.js'])
        .pipe(terser())
        .pipe(rename('toast.min.js'))
        .pipe(gulp.dest('./static/js'));
    done();
}

function script_notyf(done) {
    gulp.src('./static/js/notyf.js')
        .pipe(terser())
        .pipe(rename('notyf.min.js'))
        .pipe(gulp.dest('./static/js/'));
    done();
}

function script_cookie(done) {
    gulp.src('./static/js/cookie.js')
        .pipe(terser())
        .pipe(rename('cookie.min.js'))
        .pipe(gulp.dest('./static/js/'));
    done();
}

function script_google_reCaptcha(done) {
    gulp.src('./static/js/google_reCaptcha.js')
        .pipe(terser())
        .pipe(rename('google_reCaptcha.min.js'))
        .pipe(gulp.dest('./static/js/'));
    done();
}

function script_gosheng_oauth(done) {
    gulp.src('./static/js/gosheng_oauth.js')
        .pipe(terser())
        .pipe(rename('gosheng_oauth.min.js'))
        .pipe(gulp.dest('./static/js/'));
    done();
}

function script_sidebar(done) {
    gulp.src('./static/js/sidebar.js')
        .pipe(terser())
        .pipe(rename('sidebar.min.js'))
        .pipe(gulp.dest('./static/js/'));
    done();
}

function script_more_btn(done) {
    gulp.src('./static/js/more_btn.js')
        .pipe(terser())
        .pipe(rename('more_btn.min.js'))
        .pipe(gulp.dest('./static/js/'));
    done();
}

function style_local(done) {
    gulp.src(['./static/css/local.css'])
        .pipe(cssnano())
        .pipe(rename('local.min.css'))
        .pipe(gulp.dest('./static/css/'));
    done();
}

function style_notyf(done) {//修改过样式，注意保存
    gulp.src(['./static/css/notyf.css'])
        .pipe(cssnano())
        .pipe(rename('notyf.min.css'))
        .pipe(gulp.dest('./static/css/'));
    done();
}

gulp.task('default', function (done) {
    done();
});

gulp.task('watch', function (done) {
    gulp.watch('static/css/local.css', ['style_local']);
    gulp.watch('static/css/notyf.css', ['style_notyf']);
    gulp.watch('static/js/local.js', ['script_local']);
    gulp.watch('static/js/notyf.js', ['script_notyf']);
    gulp.watch('static/js/cookie.js', ['script_cookie']);
    gulp.watch('static/js/google_reCaptcha.js', ['script_google_reCaptcha']);
    gulp.watch('static/js/gosheng_oauth.js', ['script_gosheng_oauth']);
    done();
});


gulp.task('translate', translate);

gulp.task('script_local', script_local);
gulp.task('script_toast', script_toast);
gulp.task('script_notyf', script_notyf);
gulp.task('script_cookie', script_cookie);
gulp.task('script_google_reCaptcha', script_google_reCaptcha);
gulp.task('script_gosheng_oauth', script_gosheng_oauth);
gulp.task('script_sidebar', script_sidebar);
gulp.task('script_more_btn', script_more_btn);
gulp.task('style_local', style_local);
gulp.task('style_notyf', style_notyf);
gulp.task('copy_bs', copy_bs);
gulp.task('copy_js', copy_js);
gulp.task('copy_popper', copy_popper);