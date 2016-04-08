@extends('_layouts.master')

@section('body')
<header class="bg-hero p-xs-b-4">
    <nav class="navbar navbar-brand">
        <div class="container">
            <div class="navbar-content">
                <div>
                    <a class="link-plain text-xxl flex-y-center" href="{{ $asset_prefix }}/">
                        <strong>Jigsaw</strong>
                    </a>
                </div>
                <div>
                    <a href="https://github.com/tightenco/jigsaw" class="link-brand m-xs-r-6">
                        Contribute
                    </a>
                    <a href="{{ $asset_prefix }}/docs/installation/" class="btn btn-primary-outline">
                        Docs
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container text-center">
        <div class="constrain constrain-lg">
            <div class="m-xs-y-8">
                <h1 class="text-xjumbo m-xs-b-4">
                    Static sites for Laravel developers
                 </h1>
                <h2 class="text-lg">
                    Jigsaw is a framework for rapidly building static sites using the same modern tooling that powers your web applications.
                </h2>
            </div>
            <div class="constrain m-xs-b-n6">
                <div class="code-editor">
                    <div class="code-editor-top">
                        <span class="code-editor-button code-editor-close"></span>
                        <span class="code-editor-button code-editor-min"></span>
                        <span class="code-editor-button code-editor-max"></span>
                    </div>
                    <div class="code-editor-body">
                        <pre>
<code><span class="code-muted">$</span> <span class="code-grey">composer global require </span><span class="code-green">tightenco/jigsaw</span>
</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="p-xs-y-8 border-t border-b bg-soft">
    <div class="container">
        <h3 class="constrain text-xl text-center m-xs-b-6">
            Blade templating, just like<br class="visible-xs-inline"> your Laravel apps.
        </h3>
        <div class="row">
            <div class="col-md-6">
                <div class="p-xs-b-6 p-md-y-6 p-lg-x-8">
                    <p class="m-xs-b-4">
                        Blade is a powerful, simple, and beautiful templating language, but until now it wasn't an option if you were building a simple static site that didn't need a complex PHP backend.
                    </p>
                    <p>
                        Jigsaw brings Blade to the static site world, so you can use the same templating engine for simple websites as you do for complex web applications.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="code-editor">
                    <div class="code-editor-top">
                        <span class="code-editor-button code-editor-close"></span>
                        <span class="code-editor-button code-editor-min"></span>
                        <span class="code-editor-button code-editor-max"></span>
                    </div>
                    <div class="code-editor-body">
                        <pre><code><span class="code-purple">&commat;extends</span>('<span class="code-green">_layouts.master</span>')

<span class="code-purple">&commat;section</span>('<span class="code-green">body</span>')
    <span class="code-teal">&lt;</span><span class="code-red">h1</span><span class="code-teal">&gt;</span>Hello World!<span class="code-teal">&lt;/</span><span class="code-red">h1</span><span class="code-teal">&gt;</span>
<span class="code-purple">&commat;endsection</span></code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-xs-y-8 border-b bg-soft">
    <div class="container">
        <h3 class="constrain text-xl text-center m-xs-b-6">
            Use Markdown for<br class="visible-xs-inline"> content-driven pages.
        </h3>
        <div class="row">
            <div class="col-md-6 col-md-push-6">
                <div class="p-xs-b-6 p-md-y-6 p-lg-x-8">
                    <p class="m-xs-b-4">
                        Markdown is a fantastic writing format for things like articles, blog posts, or documentation pages.
                    </p>
                    <p class="m-xs-b-4">
                        Jigsaw makes it painless to create a layout in Blade, and fill it with content written in Markdown.
                    </p>
                    <p>
                        <a href="{{ $asset_prefix }}/docs/markdown/" class="link-brand">
                            Learn more in the docs.
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <div class="code-editor">
                    <div class="code-editor-top">
                        <span class="code-editor-button code-editor-close"></span>
                        <span class="code-editor-button code-editor-min"></span>
                        <span class="code-editor-button code-editor-max"></span>
                    </div>
                    <div class="code-editor-body">
                        <pre><code><span class="code-muted">---</span>
<span class="code-red">extends:</span> <span class="code-green">_layouts.post</span>
<span class="code-red">section:</span> <span class="code-green">content</span>
<span class="code-muted">---</span>

<span class="code-blue"># Hello World!</span>

Welcome to the future.</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-xs-y-8 border-b bg-soft">
    <div class="container">
        <h3 class="constrain text-xl text-center m-xs-b-6">
            Compile your assets using Laravel Elixir.
        </h3>
        <div class="row">
            <div class="col-md-6">
                <div class="p-xs-b-6 p-md-y-6 p-lg-x-8">
                    <p class="m-xs-b-4">
                        Jigsaw bakes in support for Laravel Elixir so you can compile your CSS and Javascript assets the same way you're used to in Laravel.
                    </p>
                    <p>
                        We also preconfigure Elixir to watch your Blade files so your site is rebuilt automatically when you make a change. Combined with out-of-the-box Browsersync support, previewing your changes quickly couldn't be easier.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ $asset_prefix }}/img/elixir-preprocessors.png" alt="Blade Code Sample" class="img-fit">
            </div>
        </div>
    </div>
</section>
<section class="p-xs-y-8 border-b bg-soft">
    <div class="container text-center">
        <h3 class="text-xl m-xs-b-6">
            Ready to get started?
        </h3>
        <p class="constrain constrain-sm m-xs-b-6">
            Check out our installation instructions and you'll be up and running in no time.
        </p>
        <div>
            <a href="{{ $asset_prefix }}/docs/installation/" class="btn btn-lg btn-primary">
                Build your site
            </a>
        </div>
    </div>
</section>
@endsection
