var gulp = require('gulp'),
sass = require('gulp-sass');

var sassConfig = {
	inputDirectory: 'assets/sass/**/*.scss',
	outputDirectory: 'assets/css',
	options: {
		outputStyle: 'compressed'
	}
}

var scssFiles = 'assets/sass/**/*.scss';

gulp.task('dev', function(){
	return gulp
	.src(sassConfig.inputDirectory)
	.pipe(sass(sassConfig.options).on('error', sass.logError))
	.pipe(gulp.dest(sassConfig.outputDirectory));
});

gulp.task('watch', function() {
	gulp.watch(sassConfig.inputDirectory)
	.on('change', function(path, stats) {
		console.log(path);
		gulp.watch(path, gulp.series('dev'));
	})
});

gulp.task('default', gulp.series('watch', function(done){
	console.log("funcionando");
	done();
}));