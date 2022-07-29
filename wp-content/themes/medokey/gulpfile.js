let gulp = require('gulp'),
    browserSync = require('browser-sync').create();
   

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: 'http://medokey/',
        host: 'medokey',
        open: 'external'
    }); 
     
    gulp.watch("**/*.php").on('change', browserSync.reload);
    gulp.watch("**/*.css").on('change', browserSync.reload);
    gulp.watch("**/*.js").on('change', browserSync.reload);
});

gulp.task('default', gulp.parallel('browser-sync'));