---
extends: _layouts.documentation
section: documentation_content
---

## Installation

### System Requirements

To use Jigsaw, you need to have PHP 5.5+ installed on your machine. You'll also optionally need Node.js and NPM installed if you want to use [Elixir](https://laravel.com/docs/5.2/elixir) to compile your CSS and Javascript.

### Installing Globally

Install Jigsaw globally via Composer:

```
$ composer global require jigsaw/jigsaw
```

> Make sure `~/.composer/vendor/bin` is in your `$PATH`.

### Installing Locally

If you run into dependency conflicts when trying to install Jigsaw globally, you can always install it locally on a per site basis.

Create a folder for your site:

```
$ mkdir my-site && cd my-site
```

Install Jigsaw via Composer:

```
$ composer require jigsaw/jigsaw
```

Initialize a new project in the current folder:

```
$ ./vendor/bin/jigsaw init
```
