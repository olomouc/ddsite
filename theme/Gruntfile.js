module.exports = function (grunt) {
    grunt.initConfig({
        watch: {
            src: {
                files: ['**/*.scss', '**/*.php'],
                tasks: ['compass:dev']
            },
           options: {
                livereload: false,
            },
        },
        compass: {
            dev: {
                options: {
                    sassDir: 'scss',
                    cssDir: 'css',
                    imagesPath: 'img',
                    noLineComments: false,
                    outputStyle: 'compressed'
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
};
