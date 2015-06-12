# WordPress Theme scaffold

WordPress default theme structure for scaffold

## Getting Started

Clone the repository

```bash
$ git clone git@github.com:guilhermemarconi/wp_theme_scaffold.git
$ cd wp_theme_scaffold
```

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
