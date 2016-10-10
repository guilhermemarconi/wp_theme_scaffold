# WordPress Theme Scaffold

A basic WordPress Theme Generator for Yeoman

## Getting Started

Install Yeoman and the Generator

```bash
$ npm i -g yeoman generator-wp-theme-scaffold
```

## Initializing the Generator

```bash
$ yo wp-theme-scaffold
```

## Local configuration

Go to `Gruntfile.js` and config `proxy` for Browser Sync at line 134

```
proxy: "[projectDir].dev"
```

> `[projectDir].dev` _uses my_ `Vagrant` _server as proxy. You must configure your own local server._

Run `Grunt`

```bash
$ grunt
```

### Deploy

To deploy your theme files, just run `grunt deploy`, but first you'll have to configure FTP access:

1. Setting `username` and `password` in `.ftppass` file;
2. Setting `host` and `dest` configurations (`Gruntfile.js:142` and `Gruntfile.js:147`, respectively).

## License

MIT
