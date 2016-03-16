---
extends: _layouts.documentation
section: documentation_content
---

## Environments

Often you might want to use different site variables in your development and production environments. For example, in production you might want to render your Google Analytics tracking snippet, but not include it in development so you don't skew your results.

Jigsaw makes this simple by allowing you to create additional `config.php` files for your different environments.

Say your base `config.php` file looks like this:

```php
<?php

return [
    'staging' => true,
    'company' => 'Tighten Co',
];
```

You can override the `staging` variable in your production environment by creating a new file called `config.production.php`:

```php
<?php

return [
    'staging' => false,
];
```

This file is _merged_ on top of `config.php`, so you only need to specify the variables that you are changing.

### Building a specific environment

To build a specific environment, just include the `--env={environment}` flag when running `jigsaw build`:

```
$ jigsaw build --env=production
```

This will generate your site into a new folder called `build_production`, leaving your `build_local` folder untouched.
