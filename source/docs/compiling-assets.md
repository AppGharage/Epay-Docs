---
extends: _layouts.documentation
section: documentation_content
---

## Compiling assets with Laravel Elixir

Jigsaw sites are configured with support for [Laravel Elixir](http://laravel.com/docs/elixir) out of the box.

By default, any assets you want to process with Elixir should live in `source/_assets`:

```
├─ source
│  ├─ _assets
│  │  └─ sass
│  │     └─ main.scss
│  ├─ _layouts
│  ├─ about-us.blade.php
│  └─ index.blade.php
└─ config.php
```

To compile your assets, run:

`$ gulp`

The assets will be compiled and the site will automatically rebuild, leaving you with a `build_local` folder that looks like this:

```
├─ build_local
│  ├─ about-us
│  │  └─ index.html
│  ├─ css
│  │  └─ main.css
│  └─ index.html
├─ source
└─ config.php
```

Elixir is only configured to compile Sass out of the box, but follow the [Elixir documentation](http://laravel.com/docs/elixir) for instructions on tweaking `gulpfile.js` to compile other asset types.

If you'd like to change the source and destination folders for your assets, edit the following lines from `gulpfile.js`:

```
elixir.config.assetsPath = 'source/_assets';
elixir.config.publicPath = 'source';
```
