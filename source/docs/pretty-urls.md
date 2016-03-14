---
extends: _layouts.documentation
section: documentation_content
---

## Pretty URLs

By default, any Blade files _not_ named `index.blade.php` are rendered as `index.html` in a subfolder named after the original file.

For example, if you have a file named `about-us.blade.php` in your `source` directory:

```
└─ source
   ├─ _layouts
   ├─ about-us.blade.php
   └─ index.blade.php
```

...it will be rendered as `index.html` in the `build/about-us` directory:

```
└─ build_local
   ├─ about-us
   │  └─ index.html
   └─ index.html
```

This means your "About us" page will be available at `http://example.com/about-us/` instead of `http://example.com/about-us.html`.

> If you need to disable this behavior, use the `--pretty=false` option when building your site.
