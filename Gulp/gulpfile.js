// Include gulp
var gulp = require('gulp'); 

// Include Our Plugins
var minifycss = require('gulp-minify-css');


// Compile Our Sass
gulp.task('css', function() {
    return gulp.src('css/*.css')
        .pipe(minifycss())
        .pipe(gulp.dest('dist/css'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('css/*.css', ['css']);
});

// Default Task
gulp.task('default', ['css', 'watch']);