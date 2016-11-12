var gulp = require('gulp'),
    pug = require('gulp-pug'),
    pugInheritance = require('gulp-pug-inheritance'),
    changed = require('gulp-changed'),
    cached  = require('gulp-cached'),
    gulpif = require('gulp-if'),
    filter = require('gulp-filter'),
    compass = require('gulp-compass'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload,
    mainBowerFiles = require('main-bower-files'),
    //bowerResolve = require('bower-resolve'),
    wrapJS = require('gulp-wrap-js'),
    concat = require('gulp-concat'),
    // browserify = require('browserify'),
    browserify = require('browserify'),
    watchify = require('watchify'),
    //babelify = require('babelify'),
    //debowerify = require('debowerify'),
    sourcemaps = require('gulp-sourcemaps'),
    source = require('vinyl-source-stream'),
    buffer = require('vinyl-buffer'),    
    del = require('del'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    runSequence = require('run-sequence'),
    notify = require('gulp-notify'),
    plumber = require('gulp-plumber'),
    assign = require('lodash.assign');
    //derequire = require('gulp-derequire');


var src = 'src',
    dist = 'dist',
    config = {
        paths: {
            src: src,
            dist: dist
        },
        css: {
            src: src + '/styles/*.scss',
            dist: dist + '/css',
            watch: src + '/styles/**/*.scss',
            options: {
                css: dist + '/css',
                sass: src + '/styles',
                image: src + '/images',
                generated_images_path: dist + '/img',
                require: ['sass-globbing'],
                import_path: ['bower_components']
            },
            autoprefixer: {
                browsers: ['> 0.01%'],
                cascade: true
            }
        },
        js: {
            src: [
                src + '/scripts/!(_)*.js'/*,
                '!' + src + '/scripts/!(_)*.js'*/
            ],
            dist: dist + '/js',
            watch: src + '/scripts/**/*.js'
        },
        html: {
            src: src + '/views/*.pug',
            dist: dist,
            watch: src + '/views/**/*.pug',
            options: {
                pretty: true
            }
        },
        img: {
            src: [
                src + '/images/**/*.{jpg,jpeg,png,gif,svg}',
                '!' + src + '/images/{icons,icons/**/*.*}'
            ],
            dist: dist + '/img',
            watch: src + '/images/**/*.{jpg,jpeg,png,gif}',
            imagemin: {
                progressive: true,
                svgoPlugins: [{removeViewBox: false}],
                use: [pngquant()],
                interlaced: true
            }
        },
        copy: {
            base: src,
            from: [
                src + '/fonts/**/*.*',
                src + '/favicon.ico'
            ],
            to: dist
        },
        clean: {
            dist: dist
        }
    };


// CSS
gulp.task('css', function() {
    return gulp.src(config.css.src)
        .pipe(plumber(function(error) {
            notify(error.toString());
            this.emit('end');
        }))
        .pipe(compass(config.css.options))
        .pipe(autoprefixer(config.css.autoprefixer))
        .pipe(gulp.dest(config.css.dist))
        .pipe(reload({stream:true}));
});


// HTML
gulp.task('html', function () {
    return gulp.src(config.html.watch)
        .pipe(plumber(function(error) {
            notify(error.toString());
            this.emit('end');
        }))

        //only pass unchanged *main* files and *all* the partials
        .pipe(changed(config.html.dist, {extension: '.html'}))

        //filter out unchanged partials, but it only works when watching
        .pipe(gulpif(global.isWatching, cached('jade')))

        //find files that depend on the files that have changed
        .pipe(pugInheritance({basedir: config.paths.src + '/views'}))

        //filter out partials (folders and files starting with "_" )
        // .pipe(filter(function (file) {
        //     return !/\/_/.test(file.path) && !/^_/.test(file.relative);
        // }))
        .pipe(filter(function (file) {
            //console.log(file.path, ' ', file.relative);
            return !/^(includes|extends)/.test(file.relative);
        }))
        // .pipe(filter(function (file) {
        //     console.log(file.path, ' ', file.relative);
        //     return true;
        // }))

        .pipe(pug(config.html.options))
        .pipe(gulp.dest(config.html.dist))
        .pipe(reload({stream:true}));
});


// JS
gulp.task('js', function () {
    return gulp.src(config.js.src)
        .pipe(plumber(function(error) {
            notify(error.toString());
            this.emit('end');
        }))
        .pipe(wrapJS('(function() {%= body %})()'))
        .pipe(concat('main.js'))
        .pipe(wrapJS('$(function() {%= body %})'))
        .pipe(gulp.dest(config.js.dist))
        .pipe(reload({stream:true}));
});


// Browserify
// gulp.task('browserify', function () {
//     return browserify({
//             entries: [src + '/scripts/_main.js'],
//             debug: false
//         })
//         /*.transform(babelify, {
//             presets: ['es2015'],
//             compact: false
//         })*/
//         //.transform(debowerify)
//         .bundle()
//         .pipe(source('_main.js'))
//         .pipe(gulp.dest(config.js.dist))
//         .pipe(reload({stream:true}));
// });


// gulp.task('bowerResolve', function () {
//     bowerResolve.init(function () {
//         console.log('====================');
//         console.log(bowerResolve('jquery'));
//         console.log(bowerResolve('slick-carousel'));
//         console.log(bowerResolve('perfect-scrollbar'));
//         console.log(bowerResolve('typeit'));
//         console.log('====================');
//     });
// });

// // c:\Projects\studio_12\studio12\www\local\templates\studio12\bower_components\jquery\dist\jquery.js
// // c:\Projects\studio_12\studio12\www\local\templates\studio12\bower_components\slick-carousel\slick\slick.js
// // c:\Projects\studio_12\studio12\www\local\templates\studio12\bower_components\perfect-scrollbar\js\perfect-scrollbar.jquery.js
// // c:\Projects\studio_12\studio12\www\local\templates\studio12\bower_components\typeit\typeit.js


function js(watch) {
    var bundler;

    if(watch) {
        bundler = watchify(browserify(assign({}, watchify.args, {
            entries: [src + '/scripts/_main.js'],
            debug: false,
            noParse: []
        })));
    }
    else {
        bundler = browserify({
            entries: [src + '/scripts/_main.js'],
            debug: false,
            noParse: []
        });
    }


    function rebundle() {
        return bundler.bundle()
            .pipe(plumber(function(error) {
                // console.log(error);
                notify(error.toString());
                this.emit('end');
            }))
            .pipe(source('_main.js'))
            // .pipe(derequire())
            .pipe(buffer())
            // .pipe(sourcemaps.init({ loadMaps: true }))
            // .pipe(sourcemaps.write('./'))
            .pipe(gulp.dest(config.js.dist))
            .pipe(reload({stream:true}))
            .pipe(notify('Browser reloaded after watchify update!'));
    }

    if(watch) {
        bundler.on('update', rebundle);
    }

    return rebundle();
}


gulp.task('browserify', function() {
    return js();
});


// IMG
gulp.task('img', function () {
    return gulp.src(config.img.src)
        .pipe(cached('img'))
        .pipe(imagemin(config.img.imagemin))
        .pipe(gulp.dest(config.img.dist))
        .pipe(reload({stream:true}));
});


// Copy
gulp.task('copy', function () {
    return gulp.src(config.copy.from, {base: config.copy.base})
        .pipe(gulp.dest(config.copy.to))
        .pipe(reload({stream:true}));
});


// Clean
gulp.task('clean', function(done) {
    return del([
        config.clean.dist  + '**/*'
    ]);
});


// Bower
gulp.task('bower', function () {
    return gulp.src(mainBowerFiles('**/*.js'))
        .pipe(concat('vendor.js'))
        .pipe(gulp.dest(config.js.dist))
        .pipe(reload({stream:true}));
});


// BrowserSync
gulp.task('browser-sync', function() {
    browserSync({
        server: {
            baseDir: dist
        },
        port: 8080,
        notify: false,
        open: false
    });
});


// JSWatch
gulp.task('jsWatch', function() {
    // js(true);
});

// Watch
// gulp.task('setWatch', function() {
//     global.isWatching = true;
// });

// gulp.task('watch', ['jswatch'], function() {
gulp.task('watch', ['jsWatch'], function() {
    global.isWatching = true;
    gulp.watch(config.css.watch, ['css']);
    gulp.watch(config.html.watch, ['html']);
    gulp.watch(config.img.watch, ['img']);
    gulp.watch(config.js.watch, ['js']);
    gulp.watch('bower.json', ['bower']);
    gulp.watch(config.copy.from, ['copy']);
});


// Default
gulp.task('default', function(callback) {
    runSequence(
        'clean',
        ['copy', 'img'],
        ['html', 'css'],
        ['bower', 'js'],
        // ['browserify'],
        ['watch'],
        ['browser-sync'],
        callback
    );
});


// Default
//gulp.task('default', ['bower', 'copy', 'html', 'css', 'js', 'img', 'browser-sync', 'watch']);

