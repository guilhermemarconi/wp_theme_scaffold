# WordPress Theme Scaffold

A basic WordPress Theme Generator for Yeoman

## Getting Started

Install Yeoman and the Generator

```bash
$ npm i -g yeoman generator-wp-theme-scaffold
```

## Initializing the Generator

After installing and configuring your local WordPress, create your theme folder on `wp-content/themes` directory.

After that, inside your theme's folder, run the Generator.

```bash
$ yo wp-theme-scaffold
```

### Starting development

Enter on the theme's folder and run Grunt.

```bash
$ grunt
```

### Deploy

To deploy your theme files, just run `grunt deploy`, but first you'll have to configure FTP access, setting `username` and `password` in `.ftppass` file;

## License

MIT
