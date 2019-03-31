'use strict';

const gulp = require('gulp');
const { series } = require('gulp');
const sass = require('gulp-sass');
const styleLint = require('gulp-stylelint');
const autoprefixer = require('gulp-autoprefixer');

sass.compiler = require('node-sass');

function compileSass() {
  return gulp.src('./assets/scss/**/*.scss')
    .pipe(styleLint({
      reporters: [
        {formatter: 'string', console: true},
      ]
    }))
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./assets/css'))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    })) 
    .pipe(gulp.dest('dist'))
}

function watchSass() {
  watch('./assets/scss/**/*.scss', ['sass']);
}

function compileStyles() {
  return gulp.src('./assets/**/*.css/')
    
}

exports.default = series(compileSass, compileStyles, watchSass);