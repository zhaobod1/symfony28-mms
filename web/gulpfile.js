/**
 * Created by apple on 16/7/21.
 */
var gulp = require('gulp');
var debug = require('gulp-debug');
var changed = require('gulp-changed');
var connect = require('gulp-connect');
var rename = require("gulp-rename");
var uglify = require("gulp-uglify");
var path_html = './admin_1/*.html';
var path_html2 = './myadmin/*.html';
var path_huo15 = './huo15/css/*.css'
var path_js = './assets/apps/scripts/*.js';
var path_js2 = './assets/pages/scripts/*.js';

gulp.task('localhost-live', function () {
    connect.server({
        root: './',
        livereload: true
    });
});
//*** CSS & JS minify task
gulp.task('minify', function () {

    //js minify
    gulp.src(['./assets/pages/scripts/*.js','!./assets/pages/scripts/*.min.js']).pipe(changed('./assets/pages/scripts',{extension:'.min.js'})).pipe(uglify()).pipe(rename({suffix: '.min'})).pipe(gulp.dest('./assets/pages/scripts')).pipe(debug({title: "编译:"}));
});

gulp.task('allfileReload', function() {
    gulp.src([path_html,path_html2,path_huo15,path_js,path_js2])
        .pipe(connect.reload());
});
gulp.task('watch', function () {
    gulp.watch([path_html,path_html2,path_huo15,path_js,path_js2], ['minify','allfileReload']);
});
gulp.task('default', ['localhost-live','watch']);