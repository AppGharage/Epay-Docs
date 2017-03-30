---
extends: _layouts.documentation
section: documentation_content
---

## Site Variables

Anything you add to the array in `config.php` will be made available in all of your templates, as a property of the `$page` object.

> NOTE: Earlier versions of Jigsaw allowed access to site variables directly by their name. Version 1.0, however, uses the `$page` object as a means for accessing all site variables.

For example, if your `config.php` looks like this:

```php
<?php

return [
    'contact_email' => 'support@example.com',
];
```

...you can use that variable in any of your templates like so:

```
@extends('_layouts.master')

@section('content')
    <p>Contact us at {{ $page->contact_email }}</p>
@stop
```

If you prefer, site variables can also be accessed as arrays:

```
<p>Contact us at {{ $page['contact_email'] }}</p>
```

Jigsaw also supports environment-specific site variables, which you can learn more about [here](../environments/).

