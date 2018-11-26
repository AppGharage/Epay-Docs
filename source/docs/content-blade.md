---
extends: _layouts.documentation
section: documentation_content
---

#### [Creating Your Site's Content](/docs/content)
## Blade Templates & Partials

One of the biggest benefits of a templating language is the ability to create reusable layouts and partials. Jigsaw gives you access to all the templating features and control structures of Blade that are available in Laravel 5.6 (learn more about Blade layouts in the [official Blade documentation](https://laravel.com/docs/5.6/blade)).

### Defining a Layout

Layouts themselves are just basic Blade templates that have one or more `@yield` calls where child templates can render their contents.

A basic master layout could look like this:

```
<!DOCTYPE html>
<html>
    <head>
        <title>The Amazing Web</title>
    </head>
    <body>
        <header>
            My Amazing Site
        </header>

        @yield('content')

        <footer>
            <p>©2016 Awesome Co</p>
        </footer>
    </body>
</html>
```

Jigsaw provides a `/source/_layouts` directory out of the box with a basic master layout.

### Extending a Layout

To extend a layout, create a template that specifies which layout to extend in an `@extends` directive, and which section(s) to populate using the `@section` directive:

```
@extends('_layouts.master')

@section('content')
    <div>
        <p>The contents of my amazing homepage.</p>
    </div>
@endsection
```

Layouts and partials are referenced relative to the `source` directory using _dot notation_, where each dot represents a directory separator in the file name and the `.blade.php` extension omitted.

### Partials

To include a template inside of another template, use the `@include` directive:

```
<!DOCTYPE html>
<html>
    <head>
        <title>The Amazing Web</title>
    </head>
    <body>
        @include('_partials.header')

        @yield('content')

        @include('_partials.footer')
    </body>
</html>
```

You can pass data to a partial by passing an associative array as a second parameter:

```
<!DOCTYPE html>
<html>
    <head>
        <title>The Amazing Web</title>
    </head>
    <body>
        @include('_partials.header', ['page_title' => 'My Amazing Site'])

        @yield('content')

        @include('_partials.footer')
    </body>
</html>
```

That data is then available in your partial as a normal variable:

```
<!-- _partials/header.blade.php -->
<header>
    {{ $page_title }}
</header>
```

### Preventing layouts & partials from rendering

Since it's important that layouts and partials are never rendered on their own, you need to be able to tell Jigsaw when a file shouldn't be rendered.

To prevent a file or folder from being rendered, simply prefix it with an underscore:

<div class="files">
    <div class="folder folder--open">source
        <div class="folder">_assets</div>
        <div class="folder folder--open focus">_layouts
            <div class="file">master.blade.php</div>
        </div>
        <div class="folder">assets</div>
        <div class="file">index.blade.php</div>
    </div>
    <div class="ellipsis">...</div>
</div>

Jigsaw gives you a `/_layouts` directory by default, but you can create any files or directories you need; anything prefixed with an underscore will not be rendered directly to `/build_local`.

For example, if you wanted a place to store all of your partials, you could create a directory called `_partials`:

<div class="files">
    <div class="folder folder--open">source
        <div class="folder">_assets</div>
        <div class="folder">_layouts</div>
        <div class="folder folder--open focus">_partials
            <div class="file">footer.blade.php</div>
            <div class="file">header.blade.php</div>
        </div>
        <div class="folder">assets</div>
        <div class="file">index.blade.php</div>
    </div>
    <div class="ellipsis">...</div>
</div>

Since the `_partials` directory starts with an underscore, those files won't be rendered when you generate your site, but will still be available to `@include` in your other templates.

---

### Extending Blade with custom directives

Jigsaw gives you the ability to extend Blade with [custom directives](https://laravel.com/docs/5.6/blade#extending-blade), just as you can with Laravel. To do this, create a `blade.php` file at the root level of your Jigsaw project (at the same level as `config.php`), and return an array of directives keyed by the directive name, each returning a closure.

For example, you can create a custom `@datetime($timestamp)` directive to format a given integer timestamp as a date in your Blade templates:

> _blade.php_

```
return [
    'datetime' => function ($timestamp) {
        return '<?php echo date("l, F j, Y", ' . $timestamp . '); ?>';
    }
];
```

Alternatively, the `blade.php` file receives a variable named `$bladeCompiler`, which exposes an instance of `\Illuminate\View\Compilers\BladeCompiler`. With this, you can create custom Blade directives, [aliased components](https://laravel.com/docs/5.6/blade#components-and-slots), named `@include` statements, or other extended Blade control structures:

> _blade.php_

```php
<?php

/** @var \Illuminate\View\Compilers\BladeCompiler $bladeCompiler */

$bladeCompiler->directive('datetime', function ($timestamp) {
    return '<?php echo date("l, F j, Y", ' . $timestamp . '); ?>';
});

$bladeCompiler->component('_components.alert');

$bladeCompiler->include('includes.copyright');
```

> _page.blade.php_

```php
/** before */

@component('_components.alert')
    Pay attention to this!
@endcomponent

@include('_partials.meta.copyright', ['year' => '2018'])


/** after */

@alert
    Pay attention to this!
@endalert

@copyright(['year' => '2018'])
```
