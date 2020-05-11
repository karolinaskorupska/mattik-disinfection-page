
var gulp = require("gulp");

gulp.task("pranie", function(done) {
    console.log("robię pranie");
    done();
});

let sass = require("gulp-sass");
gulp.task("sass", function() {
 return gulp.src("scss/main.scss")
   .pipe(sass().on("error", sass.logError))
   .pipe(gulp.dest("css"))
});
gulp.task("watch", function(){
 gulp.watch("scss/**/*.scss", gulp.series("sass"));
});