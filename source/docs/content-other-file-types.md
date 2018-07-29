---
extends: _layouts.documentation
section: documentation_content
---

#### [Creating Your Site's Content](/docs/content)
## Other File Types

### Blade/Markdown hybrids

Markdown files can use Blade syntax in them—for displaying data, control structures, etc.—by using the extension `.blade.md`. Files with a `.blade.md` extension will be processed first by the Blade engine, before the Markdown is parsed.

Regular `.blade.php` templates can also use the `@include` directive to include partials that are Markdown files. A Markdown partial that is included in a Blade template using `@include` will be parsed by the Markdown parser first.

### Non-HTML files

Other non-HTML, text-type files can also be processed with the Blade engine first, allowing you to dynamically generate non-HTML files that include variables and Blade control structures. Supported file extensions include `.blade.js`, `.blade.json`, `.blade.xml`, `.blade.rss`, `.blade.txt`, and `.blade.text`. Note that after these file are first processed by Blade, the output file will maintain its filetype extension in the resulting URL; for example, a file named `some-file.blade.xml` will be processed by Blade, then will be accessible at the URL `my-jigsaw-site.com/some-file.xml`.

### Other files

Any other files, such as `.html` files, will be copied directly to your `build` folders without being modified by Jigsaw.
