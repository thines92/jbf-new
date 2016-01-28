module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    cssmin: {
      target: {
        files: [{
          expand: true,
          cwd: 'assets/css',
          src: ['main.css'],
          dest: 'build',
          ext: '.min.css'
        }]
      }
    },
    concat: {
      dist: {
        src: ['assets/js/bootstrap.min.js', 'assets/js/parallax.min.js'],
        dest: 'build/build.js',
      }
    },
    uglify: {
      dist: {
        files: {
          'build/build.min.js': ['build/build.js']
        }
      }
    },
    imagemin: {
      options: {
        cache: false
      },

      dist: {
        files: [{
          expand: true,
          cwd: 'assets/images',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'assets/images'
        }]
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.registerTask('default', ['concat', 'uglify', 'imagemin', 'cssmin']);

};