---
extends: _layouts.documentation
section: documentation_content
---

## Starting a new site

Building a Jigsaw site is exactly like building a static HTML site, except that files ending in `.blade.php` will be rendered using Laravel's [Blade Templating Language](http://laravel.com/docs/5.0/templates).

Build out your site however you like in the `/source` directory. It might look something like this:

```
├─ source
│  ├─ _assets
│  ├─ _layouts
│  │  └─ master.blade.php
│  ├─ img
│  │  └─ logo.png
│  ├─ about-us.blade.php
│  └─ index.blade.php
└─ config.php
```

When you'd like to build it, run the `build` command from within your project root:

`$ jigsaw build`

Your site will be built and placed in the `/build_local` directory by default.

Using the example structure above, you'd end up with something like this:

```
├─ build_local
│  ├─ about-us
│  │  └─ index.html
│  ├─ img
│  │  └─ logo.png
│  └─ index.html
├─ source
└─ config.php
```

To quickly preview it, start a local PHP server:

`$ php -S localhost:8000/ -t build_local`
