---
extends: _layouts.documentation
section: documentation_content
---

## Config variables

Anything you add to the array in `config.php` will be made available as a variable in your templates.

For example, if your config looks like this...

```php
return [
    'contact_email' => 'support@example.com',
];
```

...you can use that variable in your templates like so:

```
@extends('_layouts.master')

@section('content')
    <p>Contact us at @{{ $contact_email }}</p>
@stop
```
