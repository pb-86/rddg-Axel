import browserSync from 'browser-sync';

export function watch() {
	browserSync.init( [ '**/*' ], { proxy: 'http://rddg.test', host:'192.168.0.193', notify: false } );
}

export default watch;