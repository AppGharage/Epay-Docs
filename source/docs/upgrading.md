---
extends: _layouts.documentation
section: documentation_content
---

## Upgrading

### From v0.6.4

Site variables defined in `config.php`, as well as variables defined in the YAML front matter of a page, are now accessible under the `$page` object, rather than by referencing the variable name itself. Blade templates that include variables need to be updated so that all variables are prefixed with `$page->`.

For example:

```
---
title: "Jigsaw is awesome!"
---
@extends('_layouts.master')

@section('content')
    <h1>{{ $title }}</h1>
    <p>Contact us at {{ $contact_email }}</p>
@stop
```

...should be changed to:

```
---
title: "Jigsaw is awesome!"
---
@extends('_layouts.master')

@section('content')
    <h1>{{ $page->title }}</h1>
    <p>Contact us at {{ $page->contact_email }}</p>
@stop
```

---

### From pre-v1.0 `dev-master` versions

If you used the collections feature from a pre-1.0 development version of Jigsaw, there have been several changes that will require you to update your code. Specifically:

* The file `collections.php` is no longer used to define your collections. Instead, a `collections` key in the `config.php` array should be added to the array in `config.php`.

* As mentioned above, all variables are now referenced using the `$page->` object:
    - Variables in `config.php` had previously been referenced using a `$config->` object. `$config->` should be changed to `$page->`.
    - Collection items had previously been referenced using an `$item->` object. `$item->` should be changed to `$page->`.

* Collection metadata like `path`, `url`, and `collection` are now accessed using getters, e.g. `$item->path` has been changed to `$page->getPath()`.
