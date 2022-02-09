/**
 * Config
 */
const gulp 				 = require( 'gulp' ),
			sass 				 = require( 'gulp-sass' )( require( 'sass' ) ),
			rename 			 = require( 'gulp-rename' ),
			image 			 = require( 'gulp-image' ),
			minify       = require( 'gulp-minify' ),
			browser_sync = require( 'browser-sync' );

const site = {
	// Adres strony
	url: 'rddg.test',
}

const styles = {
	// Katalog z plikami SCSS
	sass: 'assets/styles/scss/**/*.scss', 

	// Katalog z plikami CSS
	css: 'assets/styles/css/',
}

const scripts = {
	// Katalog ze skryptami przed kompresją
	raw: 'assets/scripts/unminified/*', 

	// Katalog ze skompresowanymi skryptami
	minified: 'assets/scripts/minified',
}

const images = {
	// Katalog z obrazkami przed kompresją
	raw: 'assets/images/uncompressed/*',

	// Katalog ze skompresowanymi obrazkami
	minified: 'assets/images/compressed',

	// Ustawienia kompresji plików PNG
	png_config: [ '--quality=75' ],

	// Ustawienia kompressji plików JPG
	jpg_config: [ '-optimize', '-progressive', '-quality', 75 ],
}

/**
 * Tasks
 */
gulp.task( 'compile-sass', function () {
	sass.compiler = require( 'node-sass' );
	return gulp.src( styles.sass )
		.pipe( sass( { outputStyle: 'compressed' } ) )
		.pipe( rename( { suffix: '.min' } ) )
		.pipe( gulp.dest( styles.css ) );
});

gulp.task( 'compress-images', function () {
	return gulp.src( images.raw )
		.pipe( image( { pngquant: images.png_config, mozjpeg: images.jpg_config } ) )
		.pipe( gulp.dest( images.minified ) );
});

gulp.task( 'minify-js', function() {
	return gulp.src( scripts.raw )
		.pipe( minify( { ext: { min: '.min.js' }, ignoreFiles: ['.min.js'], noSource: true } ) )
		.pipe( gulp.dest( scripts.minified ) );
});

/**
 * Watcher
 */
gulp.task( 'default', function () {
	browser_sync.init( [ '**/*.{html,php,js,twig,png,jpg,svg}' ], { proxy: site.url } );
	gulp.watch( styles.sass, gulp.series( 'compile-sass' ) ).on( 'change', browser_sync.reload );
	gulp.watch( scripts.raw, gulp.series( 'minify-js' ) ).on( 'change', browser_sync.reload );
	gulp.watch( images.raw,  gulp.series( 'compress-images' ) ).on( 'change', browser_sync.reload );
});