---
extends: _layouts.documentation
section: documentation_content
---

## Building & Previewing

When you'd like to generate your site, run the `build` command from within your project root:

`$ jigsaw build`

Jigsaw will generate your static HTML and place it in the `./build_local` directory by default.

Using the default site structure, `./build_local` will look like this:

![Default build directory](../../img/build-folder.png)

### Previewing with PHP

To quickly preview your site, start a local PHP server pointed at your `build_local` directory:

`$ php -S localhost:8000/ -t build_local`

You can now view your site at `http://localhost:8000` in your browser.

### Previewing with Browsersync

If you are [using Elixir to compile your assets](../compiling-assets), you can preview your site with Browsersync by simply running:

```
$ gulp watch
```

Browsersync will automatically open a new browser tab and reload the page every time you make a change. Very helpful for previewing your changes quickly!
