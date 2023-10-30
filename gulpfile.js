//initialize modules
const {src, dest, watch, series, parallel} = require('gulp');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const concat = require('gulp-concat');
const rename = require('gulp-rename');
const postcss = require('gulp-postcss');
const replace = require('gulp-replace');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');


// File path variables
const files = {
	scssPath: 'src/scss/**/*.scss',
	jsPath: 'src/js/**/*.js'
}


// SASS TASK
function scssTask(){
	return src(files.scssPath)
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(sass({outputStyle: 'compressed'}))
		.pipe(rename('styles.min.css'))
		.pipe(postcss([ autoprefixer({cascade: false}), cssnano() ]))
		.pipe(sourcemaps.write('.'))
		.pipe(dest('./assets/')
	);
}


// JS TASK
function jsTask(){
	return src(files.jsPath)
		.pipe(concat('scripts.js'))
		.pipe(uglify())
		.pipe(rename('scripts.min.js'))
		.pipe(dest('./assets/')
	);
}


// WATCH TASK
function watchTask(){
	watch([files.scssPath, files.jsPath],
		parallel(scssTask, jsTask));
}



// Default task
exports.default = series(
	parallel(scssTask, jsTask),
	watchTask
);