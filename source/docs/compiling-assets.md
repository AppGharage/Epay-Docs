---
extends: _layouts.documentation
section: documentation_content
---

## Compiling Assets with Laravel Mix

Jigsaw sites are configured with support for [Laravel Mix](https://laravel.com/docs/5.6/mix) out of the box. If you've ever used Mix in a Laravel project, you already know how to use Mix with Jigsaw.

---

### Setup

To get started, first make sure you have Node.js and NPM installed in your environment.

Once you have Node.js and NPM installed, pull in the dependencies needed to compile your assets:

```
$ npm install
```

For more detailed installation instructions, check out the [full Laravel Mix documentation](https://laravel.com/docs/5.6/mix).

### Organizing your assets

By default, any assets you want to process with Mix should live in `/source/_assets`:

<div class="files">
    <div class="folder folder--open">source
        <div class="folder folder--open focus">_assets
            <div class="folder folder--open">js
                <div class="file">app.js</div>
            </div>
            <div class="folder folder--open">sass
                <div class="file">main.scss</div>
            </div>
        </div>
        <div class="folder folder--open">_layouts
            <div class="file">master.blade.php</div>
        </div>
        <div class="folder folder--open">assets
            <div class="folder">build</div>
            <div class="folder folder--open">images
                <div class="file">jigsaw.png</div>
            </div>
        </div>
        <div class="file">index.blade.php</div>
    </div>
    <div class="folder">tasks</div>
    <div class="folder">vendor</div>
    <div class="ellipsis">...</div>
</div>

Mix looks for each asset type _(like Sass, Less, or Coffeescript)_ in a subdirectory named after that asset type. We recommend following this convention to avoid additional configuration.

By default, once Webpack compiles your assets, they will be placed in their corresponding subdirectories in `/source/assets/build`:

<div class="files">
    <div class="folder folder--open">source
        <div class="folder folder--open">_assets
            <div class="folder folder--open">js
                <div class="file">app.js</div>
            </div>
            <div class="folder folder--open">sass
                <div class="file">main.scss</div>
            </div>
        </div>
        <div class="folder folder--open">_layouts
            <div class="file">master.blade.php</div>
        </div>
        <div class="folder folder--open focus">assets
            <div class="folder folder--open">build
                <div class="folder folder--open">css
                    <div class="file">main.css</div>
                </div>
                <div class="folder folder--open">js
                    <div class="file">main.js</div>
                </div>
                <div class="file">mix-manifest.json</div>
            </div>
            <div class="folder folder--open">images
                <div class="file">jigsaw.png</div>
            </div>
        </div>
        <div class="file">index.blade.php</div>
    </div>
    <div class="folder">tasks</div>
    <div class="folder">vendor</div>
    <div class="ellipsis">...</div>
</div>

Then, when Jigsaw builds your site, the entire `/source/assets` directory containing your `build` files (and any other directories containing static assets, such as `images` or `fonts`, that you choose to store there) will be copied to `/build_local` or `/build_production`.

In your templates, you can reference these assets using the `mix` Blade directive. If you are using the default setup, your compiled assets will be copied to your site's `/assets/build` directory, which should be specified as the 2nd parameter of the `mix` directive:

```php
// <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
```

### Compiling your assets

To compile your assets, run:

```
$ npm run dev
```

First, Webpack will compile your assets and store them in the `/source/assets/build` directory. Then, Jigsaw's `build` command will be run automatically to build your site (including your compiled assets) to `/build_local`. You can then preview your changes in the browser.

### Watching for changes

Manually running `npm run dev` every time you make a change gets old pretty fast.

Instead, you can run the following command to watch your project for changes:

```
$ npm run watch
```

Any time any file changes in your project, Webpack will recompile your assets, and Jigsaw will regenerate your static HTML pages to `/build_local`.

Using `npm run watch` also enables [Browsersync](https://www.browsersync.io/), so your browser will automatically reload any time you make a change. It also manages serving your site locally for you, so you don't need to start your own local PHP server.

You can also watch a specific environment by running `npm run local`, `npm run staging`, or `npm run production`.

---

### Changing asset locations

If you'd like to change the source and destination directories for your assets, edit the following lines in `webpack.mix.js`:

```js
mix.setPublicPath('source/assets/build');

mix.js('source/_assets/js/main.js', 'js/')
    .sass('source/_assets/sass/main.scss', 'css')
    .options({
        processCssUrls: false,
    }).version();
```

---

### Enabling different preprocessors

Jigsaw ships with the following `webpack.mix.js` and is configured to use Sass out of the box:

```js
let mix = require('laravel-mix');
let build = require('./tasks/build.js');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*']),
    ]
});

mix.js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css')
    .options({
        processCssUrls: false,
    }).version();
```

If you'd like to switch to Less, use Coffeescript, or take advantage of any other Mix features, feel free to edit this file to your heart's content. Here's an example of what it might look like to use Less and React:

```js
mix.react('source/_assets/js/main.js', 'js')
    .less('source/_assets/sass/main.less', 'css')
    .version();
```

---

### Note for Sass users

To prevent URLs in your `.scss` files—such as background images and fonts—from being processed and modified by Mix, set the `processCssUrls` option to `false` in your `webpack.mix.js` file.

