# WordPress Theme Scaffold

WordPress basic default theme structure for scaffold.

## Getting Started

### Clone the repository

```bash
$ git clone git@github.com:guilhermemarconi/wp_theme_scaffold.git mytheme && cd mytheme
```

> `mytheme` _will be the directory name of your theme and can be any name you want._

To `push` your new theme into your own repository, [check this out](http://stackoverflow.com/questions/5181845/git-push-existing-repo-to-a-new-and-different-remote-repo-server).

### Local configuration

Install dependencies

```bash
$ npm install
```

Go to `Gruntfile.js` and config `proxy` for Browser Sync at line 120

```
proxy: "dev/[projectDir]"
```

> `dev/[projectDir]` _uses my_ `Vagrant` _server as proxy. You must configure your own local server._

Run `Grunt`

```bash
$ grunt
```

### Deploy

To deploy your theme files, just run `grunt deploy`, but first you'll have to configure FTP access:

1. Setting `username` and `password` in `.ftppass` file;
2. Setting `host` and `dest` configurations (`Gruntfile.js:146` and `Gruntfile.js:151`, respectively).

## License

MIT
