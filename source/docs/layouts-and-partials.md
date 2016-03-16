---
extends: _layouts.documentation
section: documentation_content
---

## Layouts & Partials

One of the biggest benefits of a templating language is the ability to create reusable layouts and partials.

### Preventing Layouts & Partials from Rendering

Since it's important that layouts and partials are never rendered on their own, you need to be able to tell Jigsaw when a file shouldn't be rendered.

To prevent a file or folder from being rendered, simply prefix it with an underscore:

![Layouts folder](../../img/layouts-directory.png)

Jigsaw gives you a `_layouts` folder by default, but as long as you prefix with an underscore, you can create any files or folders you need.

For example, if you wanted a place to store all of your partials, you could create a directory called `_partials`:

![Partials folder](../../img/partials-directory.png)

Since the `_partials` folder starts with an underscore, those files won't be rendered when you generate your site, but will still be available to `@include` in your other templates.
