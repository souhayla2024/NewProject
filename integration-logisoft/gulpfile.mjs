import gulp from 'gulp'
import plumber from 'gulp-plumber'
import sourcemaps from 'gulp-sourcemaps'
import * as sass from 'sass'
import gulpSass from 'gulp-sass'
const sassCompiler = gulpSass(sass)
import autoprefixer from 'gulp-autoprefixer'
import lineec from 'gulp-line-ending-corrector'
import filter from 'gulp-filter'
import mmq from 'gulp-merge-media-queries'
import rename from 'gulp-rename'
import minifycss from 'gulp-clean-css'
import notify from 'gulp-notify'
import babel from 'gulp-babel'
import concat from 'gulp-concat'
import remember from 'gulp-remember'
import uglify from 'gulp-uglify'
import cache from 'gulp-cache'
import copy from 'gulp-copy'

// Importer la configuration
import * as config from './gulp.config.js'

// Error Handler
function errorHandler(error) {
  console.error(error.toString())
  this.emit('end')
}

// Styles Task
function styles() {
  return gulp
    .src(config.styleSRC, { allowEmpty: true })
    .pipe(plumber({ errorHandler }))
    .pipe(sourcemaps.init())
    .pipe(
      sassCompiler({
        errLogToConsole: config.errLogToConsole,
        precision: config.precision,
      }).on('error', sassCompiler.logError)
    )
    .pipe(sourcemaps.write({ includeContent: false }))
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(autoprefixer({ overrideBrowserslist: config.BROWSERS_LIST }))
    .pipe(sourcemaps.write('.'))
    .pipe(lineec()) // Consistent Line Endings for non-UNIX systems
    .pipe(gulp.dest(config.styleDestination))
    .pipe(filter('**/*.css')) // Filtering stream to only CSS files
    .pipe(mmq({ log: true })) // Merge Media Queries only for .min.css version
    .pipe(rename({ suffix: '.min' }))
    .pipe(minifycss({ maxLineLen: 10 }))
    .pipe(lineec()) // Consistent Line Endings for non-UNIX systems
    .pipe(gulp.dest(config.styleDestination))
    .pipe(notify({ message: '\n\n✅  ===> STYLES — completed!\n', onLast: true }))
}

// VendorsJS Task
function vendorsJS() {
  return gulp
    .src(config.jsVendorSRC, { since: gulp.lastRun('vendorsJS') }) // Only run on changed files.
    .pipe(plumber({ errorHandler }))
    .pipe(
      babel({
        presets: [
          [
            '@babel/preset-env',
            {
              targets: { browsers: config.BROWSERS_LIST },
            },
          ],
        ],
      })
    )
    .pipe(remember(config.jsVendorSRC)) // Bring all files back to stream.
    .pipe(concat(config.jsVendorFile + '.js'))
    .pipe(lineec()) // Consistent Line Endings for non UNIX systems.
    .pipe(gulp.dest(config.jsVendorDestination))
    .pipe(
      rename({
        basename: config.jsVendorFile,
        suffix: '.min',
      })
    )
    .pipe(uglify())
    .pipe(lineec()) // Consistent Line Endings for non UNIX systems.
    .pipe(gulp.dest(config.jsVendorDestination))
    .pipe(notify({ message: '\n\n✅  ===> VENDOR JS — completed!\n', onLast: true }))
}

// CustomJS Task
function customJS() {
  return gulp
    .src(config.jsCustomSRC, { since: gulp.lastRun('customJS') }) // Only run on changed files.
    .pipe(plumber({ errorHandler }))
    .pipe(
      babel({
        presets: [
          [
            '@babel/preset-env',
            {
              targets: { browsers: config.BROWSERS_LIST },
            },
          ],
        ],
      })
    )
    .pipe(remember(config.jsCustomSRC)) // Bring all files back to stream.
    .pipe(concat(config.jsCustomFile + '.js'))
    .pipe(lineec()) // Consistent Line Endings for non UNIX systems.
    .pipe(gulp.dest(config.jsCustomDestination))
    .pipe(
      rename({
        basename: config.jsCustomFile,
        suffix: '.min',
      })
    )
    .pipe(uglify())
    .pipe(lineec()) // Consistent Line Endings for non UNIX systems.
    .pipe(gulp.dest(config.jsCustomDestination))
    .pipe(notify({ message: '\n\n✅  ===> CUSTOM JS — completed!\n', onLast: true }))
}

// Includes Task
function includes() {
  return gulp
    .src(config.incSRC)
    .pipe(copy(config.incDST, { prefix: 2 }))
    .pipe(
      notify({
        message: '\n\n✅  ===> inc (fonts / images) — completed!\n',
        onLast: true,
      })
    )
}

// Watch Task
function watchFiles() {
  gulp.watch(config.watchStyles, styles)
  gulp.watch(config.watchJsVendor, vendorsJS)
  gulp.watch(config.watchJsCustom, customJS)
  gulp.watch(config.watchIncludes, includes)
}

// Gulp task registration
gulp.task('styles', styles)
gulp.task('vendorsJS', vendorsJS)
gulp.task('customJS', customJS)
gulp.task('includes', includes)
gulp.task('watch', watchFiles)

// Default Task
gulp.task('default', gulp.series('styles', 'vendorsJS', 'customJS', 'includes', 'watch'))
