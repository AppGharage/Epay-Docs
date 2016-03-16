---
extends: _layouts.documentation
section: documentation_content
---

## Site Variables

Anything you add to the array in `config.php` will be made available as a variable in your templates.

For example, if your config looks like this:

```php
<?php

return [
    'contact_email' => 'support@example.com',
];
```

...you can use that variable in your templates like so:

```
@extends('_layouts.master')

@section('content')
    <p>Contact us at {{ $contact_email }}</p>
@stop
```

Jigsaw also supports environment-specific site variables, which you can learn more about [here](../environments/).
