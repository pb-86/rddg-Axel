import gulp        from 'gulp';
import rename      from 'gulp-rename';
import minify      from 'gulp-minify';
import image       from 'gulp-image';
import browserSync from 'browser-sync';
import gulpSass    from 'gulp-sass';
import dartSass    from 'sass';
const sass = gulpSass( dartSass );

const directories = {
	sass: 'assets/styles/scss/**/*.scss', // Katalog z plikami SCSS.
	css : 'assets/styles/', // Katalog z plikami CSS.
	js : {
		raw      : 'assets/scripts/raw/*',
		minified : 'assets/scripts/',
	},
	img : {
		raw        : 'assets/images/raw/*',
		compressed : 'assets/images/',
	}
};

export function buildStyles() {
	return gulp.src( directories.sass )
		.pipe( sass( { outputStyle: 'compressed' } ).on( 'error', sass.logError ) )
		.pipe( rename( { suffix: '.min' } ) )
		.pipe( gulp.dest( directories.css ) );
}

export function buildDevStyles() {
	return gulp.src( directories.sass )
		.pipe( sass( { outputStyle: 'expanded' } ).on( 'error', sass.logError ) )
		.pipe( gulp.dest( directories.css ) );
}

export function minifyScripts() {
	return gulp.src( directories.js.raw )
		.pipe( minify( { ext: { min: '.min.js' }, ignoreFiles: ['.min.js'], noSource: true } ) )
		.pipe( gulp.dest( directories.js.minified ) );
}

export function compressImages() {
	return gulp.src( directories.img.raw )
		.pipe( image( { pngquant: [ '--quality=75' ], mozjpeg: [ '-optimize', '-progressive', '-quality', 75 ] } ) )
		.pipe( gulp.dest( directories.img.compressed ) );
}

export function watch() {
	browserSync.init( [ '**/*' ], { proxy: 'http://rddg.test' } );
	gulp.watch( directories.sass, gulp.series( buildStyles, buildDevStyles ) ).on( 'change', browserSync.reload );
	gulp.watch( directories.js.raw, minifyScripts ).on( 'change', browserSync.reload );
	gulp.watch( directories.img.raw, compressImages ).on( 'change', browserSync.reload );
}

export default watch;