var generators = require('yeoman-generator');

var _ = require('lodash');

var packages = [
   "autoprefixer-core",
   "grunt",
   "grunt-browser-sync",
   "grunt-combine-media-queries",
   "grunt-contrib-concat",
   "grunt-contrib-cssmin",
   "grunt-contrib-imagemin",
   "grunt-contrib-uglify",
   "grunt-contrib-watch",
   "grunt-dev-update",
   "grunt-ftpush",
   "grunt-postcss",
   "grunt-sass",
   "grunt-svgmin",
   "matchdep"
];

module.exports = generators.Base.extend({
  constructor: function () {
    generators.Base.apply( this, arguments );
    this.argument( 'appfolder', { type: String, required: false } );
  },
  initializing: function () {
    this.destinationRoot( this.appfolder );
  },
  prompting: function () {
    return this.prompt([{
      type    : 'input',
      name    : 'name',
      message : 'Theme Name',
      default : this.appfolder || this.appname
    }, {
      type    : 'input',
      name    : 'description',
      message : 'Theme Description',
      default : 'Template VTEX'
    }, {
      type    : 'input',
      name    : 'repository',
      message : 'URL of the remote repository'
    }, {
      type    : 'input',
      name    : 'authorName',
      message : 'Theme Author Name'
    }, {
      type    : 'input',
      name    : 'authorEmail',
      message : 'Theme Author Email'
    }]).then(function (answers) {
      this.themeName = answers.name;
      this.themeKebabName = _.kebabCase(answers.name);
      this.themeDescription = answers.description;
      this.themeRepository = answers.repository;
      this.themeAuthorName = answers.authorName;
      this.themeAuthorEmail = answers.authorEmail;
    }.bind(this));
  },
  writing: function () {
    var tplVars = {
      themeName: this.themeName,
      themeKebabName: this.themeKebabName,
      themeDescription: this.themeDescription,
      themeRepository: this.themeRepository,
      themeAuthorName: this.themeAuthorName,
      themeAuthorEmail: this.themeAuthorEmail
    };

    this.fs.copyTpl(
      this.sourceRoot(),
      this.destinationRoot(),
      tplVars
    );

    this.copy('_editorconfig', '.editorconfig');
    this.copy('_ftppass', '.ftppass');
    this.copy('_gitignore', '.gitignore');
  },
  install: function () {
    this.npmInstall(packages, { 'saveDev': true });
  },
  removeFiles: function () {
    this.fs.delete('_editorconfig');
    this.fs.delete('_ftppass');
    this.fs.delete('_gitignore');
  }
});
