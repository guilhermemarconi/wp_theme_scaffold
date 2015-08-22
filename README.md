# WordPress Theme Scaffold

WordPress basic default theme structure for scaffold.

## Getting Started

### Clone the repository

```bash
$ git clone git@github.com:guilhermemarconi/wp_theme_scaffold.git mytheme && cd mytheme
```

> `mytheme` _will be the directory name of your theme and can be any name you want._

To `push` your new theme into your own repository, follow this steps:

1. Create your new theme repo
2. `git remote rename origin upstream`
3. `git remote add origin URL_TO_YOUR_NEW_REPO`
4. `git push origin master`

And that's it! Your local project is now `push`ing to your new repo and you're ready to go for the next step! :smile:

### Local configuration

Install dependencies with NPM

```bash
$ [sudo] npm install
```

> _Use_ `sudo` _only if you're on a UNIX based system. Windows CMD/Powershell doesn't need this._

Go to `Gruntfile.js` and config `proxy` for Browser Sync at line 135

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
2. Setting `host` and `dest` configurations (`Gruntfile.js:143` and `Gruntfile.js:148`, respectively).

## License

MIT
