---
extends: _layouts.documentation
section: documentation_content
---

## Blade templating

Jigsaw specific documentation for Blade is coming soon!

In the mean time, check out [the official Blade documentation](https://laravel.com/docs/5.2/blade).

### Layouts

One of the biggest benefits of a templating language is the ability to create reusable layouts.

Since it's important that a layout is never rendered on it's own, you need to be able to tell Jigsaw when a file shouldn't be rendered.

To prevent a file or folder from being rendered, simply prefix it with an underscore:

```
├─ source
│  ├─ _layouts
│  │  └─ master.blade.php # Not rendered
│  └─ index.blade.php     # Rendered
└─ config.php
```
