---
extends: _layouts.documentation
section: documentation_content
---

## Pretty URLs

Jigsaw will automatically take any Blade files _not_ named `index` and render them as `index.html` in a subfolder with the same name as the original file.

For example, if you have a file named `about-us.blade.php` in your `source` directory:

```
├─ source
   ├─ _layouts
   ├─ about-us.blade.php
   └─ index.blade.php
```

...it will be rendered as `index.html` in the `build/about-us` directory:

```
├─ build_local
   ├─ about-us
   │  └─ index.html
   └─ index.html
```

> If you need to disable this behavior, use the `--pretty=false` option when building your site.
