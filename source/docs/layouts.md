---
extends: _layouts.documentation
section: documentation_content
---

## Layouts

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
