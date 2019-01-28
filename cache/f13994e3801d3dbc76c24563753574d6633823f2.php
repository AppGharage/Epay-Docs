<?php $__env->startSection('documentation_content'); ?><h4>Payment Pages</h4>
<h2>Blade Templates &amp; Partials</h2>
<p>One of the biggest benefits of a templating language is the ability to create reusable layouts and partials. Jigsaw gives you access to all the templating features and control structures of Blade that are available in Laravel 5.6 (learn more about Blade layouts in the <a href="https://laravel.com/docs/5.6/blade">official Blade documentation</a>).</p>
<h3>How to Create a payment page</h3>
<p>Layouts themselves are just basic Blade templates that have one or more <code><?php echo e('@'); ?>yield</code> calls where child templates can render their contents.</p>
<p>A basic master layout could look like this:</p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;The Amazing Web&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;header&gt;
            My Amazing Site
        &lt;/header&gt;

        <?php echo e('@'); ?>yield('content')

        &lt;footer&gt;
            &lt;p&gt;©2016 Awesome Co&lt;/p&gt;
        &lt;/footer&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
<p>Jigsaw provides a <code>/source/_layouts</code> directory out of the box with a basic master layout.</p>
<h3>Extending a Layout</h3>
<p>To extend a layout, create a template that specifies which layout to extend in an <code><?php echo e('@'); ?>extends</code> directive, and which section(s) to populate using the <code><?php echo e('@'); ?>section</code> directive:</p>
<pre><code><?php echo e('@'); ?>extends('_layouts.master')

<?php echo e('@'); ?>section('content')
    &lt;div&gt;
        &lt;p&gt;The contents of my amazing homepage.&lt;/p&gt;
    &lt;/div&gt;
<?php echo e('@'); ?>endsection</code></pre>
<p>Layouts and partials are referenced relative to the <code>source</code> directory using <em>dot notation</em>, where each dot represents a directory separator in the file name and the <code>.blade.php</code> extension omitted.</p>
<h3>Partials</h3>
<p>To include a template inside of another template, use the <code><?php echo e('@'); ?>include</code> directive:</p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;The Amazing Web&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        <?php echo e('@'); ?>include('_partials.header')

        <?php echo e('@'); ?>yield('content')

        <?php echo e('@'); ?>include('_partials.footer')
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
<p>You can pass data to a partial by passing an associative array as a second parameter:</p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;The Amazing Web&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        <?php echo e('@'); ?>include('_partials.header', ['page_title' =&gt; 'My Amazing Site'])

        <?php echo e('@'); ?>yield('content')

        <?php echo e('@'); ?>include('_partials.footer')
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
<p>That data is then available in your partial as a normal variable:</p>
<pre><code>&lt;!-- _partials/header.blade.php --&gt;
&lt;header&gt;
    {{ $page_title }}
&lt;/header&gt;</code></pre>
<h3>Preventing layouts &amp; partials from rendering</h3>
<p>Since it's important that layouts and partials are never rendered on their own, you need to be able to tell Jigsaw when a file shouldn't be rendered.</p>
<p>To prevent a file or folder from being rendered, simply prefix it with an underscore:</p>
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
<p>Jigsaw gives you a <code>/_layouts</code> directory by default, but you can create any files or directories you need; anything prefixed with an underscore will not be rendered directly to <code>/build_local</code>.</p>
<p>For example, if you wanted a place to store all of your partials, you could create a directory called <code>_partials</code>:</p>
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
<p>Since the <code>_partials</code> directory starts with an underscore, those files won't be rendered when you generate your site, but will still be available to <code><?php echo e('@'); ?>include</code> in your other templates.</p>
<hr />
<h3>Extending Blade with custom directives</h3>
<p>Jigsaw gives you the ability to extend Blade with <a href="https://laravel.com/docs/5.6/blade#extending-blade">custom directives</a>, just as you can with Laravel. To do this, create a <code>blade.php</code> file at the root level of your Jigsaw project (at the same level as <code>config.php</code>), and return an array of directives keyed by the directive name, each returning a closure.</p>
<p>For example, you can create a custom <code><?php echo e('@'); ?>datetime($timestamp)</code> directive to format a given integer timestamp as a date in your Blade templates:</p>
<blockquote>
<p><em>blade.php</em></p>
</blockquote>
<pre><code>return [
    'datetime' =&gt; function ($timestamp) {
        return '&lt;<?php echo e('?php'); ?> echo date("l, F j, Y", ' . $timestamp . '); ?&gt;';
    }
];</code></pre>
<p>Alternatively, the <code>blade.php</code> file receives a variable named <code>$bladeCompiler</code>, which exposes an instance of <code>\Illuminate\View\Compilers\BladeCompiler</code>. With this, you can create custom Blade directives, <a href="https://laravel.com/docs/5.6/blade#components-and-slots">aliased components</a>, named <code><?php echo e('@'); ?>include</code> statements, or other extended Blade control structures:</p>
<blockquote>
<p><em>blade.php</em></p>
</blockquote>
<pre><code class="language-php">&lt;<?php echo e('?php'); ?>


/** <?php echo e('@'); ?>var \Illuminate\View\Compilers\BladeCompiler $bladeCompiler */

$bladeCompiler-&gt;directive('datetime', function ($timestamp) {
    return '&lt;<?php echo e('?php'); ?> echo date("l, F j, Y", ' . $timestamp . '); ?&gt;';
});

$bladeCompiler-&gt;component('_components.alert');

$bladeCompiler-&gt;include('includes.copyright');</code></pre>
<blockquote>
<p><em>page.blade.php</em></p>
</blockquote>
<pre><code class="language-php">/** before */

<?php echo e('@'); ?>component('_components.alert')
    Pay attention to this!
<?php echo e('@'); ?>endcomponent

<?php echo e('@'); ?>include('_partials.meta.copyright', ['year' =&gt; '2018'])

/** after */

<?php echo e('@'); ?>alert
    Pay attention to this!
<?php echo e('@'); ?>endalert

<?php echo e('@'); ?>copyright(['year' =&gt; '2018'])</code></pre><?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>