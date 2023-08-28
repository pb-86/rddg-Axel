import browserSync from 'browser-sync';

export function watch() {
	browserSync.init( [ '**/*' ], { proxy: 'http://rddg.test' } );
}

export default watch;