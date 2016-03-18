@extends('_layouts.master')

@section('body')
<header class="bg-hero border-b p-xs-b-4">
    <nav class="navbar navbar-brand">
        <div class="container">
            <div class="navbar-content">
                <div>
                    <a class="link-plain text-xxl flex-y-center" href="{{ $asset_prefix }}/">
                        <strong>Jigsaw</strong>
                    </a>
                </div>
                <div>
                    <a href="{{ $asset_prefix }}/docs/installation/" class="btn btn-primary-outline">
                        Docs
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container text-center">
        <div class="constrain">
            <div class="m-xs-b-8">
                <h1 class="text-jumbo m-xs-b-4">
                    Static sites for Laravel developers
                 </h1>
                <h2 class="text-lg">
                    Two lines of text that we should replace with something meaningful for the people who visit the page.
                </h2>
            </div>
            <div class="m-xs-b-n6">
                <div class="code-editor">
                    <div class="code-editor-top">
                        <span class="code-editor-button code-editor-close"></span>
                        <span class="code-editor-button code-editor-min"></span>
                        <span class="code-editor-button code-editor-max"></span>
                    </div>
                    <div class="code-editor-body">
                        <pre>
<code>$ <span class="code-grey">composer require </span><span class="code-green">jigsaw/jigsaw</span>
</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="p-xs-y-8 border-b bg-soft">
    <div class="container">
        <h3 class="constrain text-xl text-center m-xs-b-6">
            Jigsaw uses the Blade templating language,<br> just like your Laravel apps.
        </h3>
        <div class="row">
            <div class="col-md-6 p-xs-8">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui repellat in, dignissimos minima, nisi voluptates laboriosam earum eveniet ea similique.
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
            Compile your assets using Laravel Elixir.
        </h3>
        <div class="row">
            <div class="col-md-6 col-md-push-6 p-xs-8">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui repellat in, dignissimos minima, nisi voluptates laboriosam earum eveniet ea similique.
            </div>
            <div class="col-md-6 col-md-pull-6">
                <img src="{{ $asset_prefix }}/img/elixir-preprocessors.png" alt="Blade Code Sample" class="img-fit">
            </div>
        </div>
    </div>
</section>
<section class="p-xs-y-8 border-b bg-soft">
    <div class="container text-center">
        <h3 class="text-xl m-xs-b-6">
            Open Source
        </h3>
        <p class="constrain constrain-sm m-xs-b-6">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus accusamus at necessitatibus.
        </p>
        <div>
            <a href="https://github.com/tightenco/jigsaw" class="btn btn-lg btn-primary">Contribute on GitHub</a>
        </div>
    </div>
</section>
@endsection
