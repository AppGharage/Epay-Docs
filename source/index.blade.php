@extends('_layouts.master')

@section('body')
<div class="border-t-4 border-purple w-full pb-6"></div>

<div class="font-normal text-xl">
    <header class="max-w-xl mx-auto px-4 lg:px-0">
        <div class="flex justify-between items-center mb-8">
            <div class="flex flex-row items-center">
                <img src="{{ $page->asset_prefix }}/assets/img/jigsaw-logo.svg" alt="Jigsaw logo"
                    class="logo-icon rounded-lg shadow-lg mr-2 md:mr-4 w-8 sm:w-16" />

                <h1 class="font-normal text-xl md:text-3xl uppercase tracking-wide text-blue-darker">Jigsaw</h1>
            </div>

            <div class="text-sm">
                <a href="https://github.com/tightenco/jigsaw" title="Contribute to Jigsaw on GitHub"
                    class="mr-4 text-blue-darker uppercase font-light no-underline">Contribute</a>

                <a href="/docs/installation" title="Read the Jigsaw documentation"
                    class="py-2 px-4 bg-purple rounded text-white uppercase font-light no-underline shadow-md">Docs</a>
            </div>
        </div>
    </header>

    <div class="max-w-xl mx-auto px-4 lg:px-0">
        <div class="flex-col pt-4 mb-8 pb-4">
            <h1 class="text-4xl font-normal text-blue-darker leading-none">
                Static sites for <br />
                modern developers
            </h1>
            <p class="text-xl text-grey max-w-md mt-4 font-normal leading-normal">Jigsaw is a framework for rapidly building static sites using the same modern tooling that powers your web applications.</p>
        </div>
    </div>

    <div class="pt-8 pb-4 bg-gradient-purple flex flex-col items-center">
        <h2 class="text-white font-normal text-3xl mb-2">Getting started is easy</h2>
        <p class="text-pink-lighter mb-4">Just make new project directory and install Jigsaw using Composer</p>
        <code class="p-2 px-8 rounded bg-purple-darkest">
            <pre class="text-white text-sm">$ composer global require tightenco/jigsaw</pre>
        </code>
    </div>

    div.bg-
<section class="p-xs-y-8 border-b bg-soft">
    <div class="container">
        <h3 class="constrain text-xl text-center m-xs-b-6">
            Compile your assets using Laravel Mix.
        </h3>
        <div class="row">
            <div class="col-md-6">
                <div class="p-xs-b-6 p-md-y-6 p-lg-x-8">
                    <p class="m-xs-b-4">
                        Jigsaw bakes in support for Laravel Mix so you can compile your CSS and Javascript assets the same way you're used to in Laravel.
                    </p>
                    <p>
                        We also preconfigure Mix to watch your Blade files so your site is rebuilt automatically when you make a change. Combined with out-of-the-box Browsersync support, previewing your changes quickly couldn't be easier.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ $page->asset_prefix }}/img/mix-preprocessors.png" alt="Blade Code Sample" class="img-fit">
            </div>
        </div>
    </div>
</section>
<section class="p-xs-y-8 border-b bg-light">
    <div class="container text-center">
        <h3 class="text-xl m-xs-b-6">
            Ready to get started?
        </h3>
        <p class="constrain constrain-sm m-xs-b-6">
            Check out our installation instructions and you'll be up and running in no time.
        </p>
        <div>
            <a href="{{ $page->asset_prefix }}/docs/installation/" class="btn btn-lg btn-primary">
                Build your site
            </a>
        </div>
    </div>
</section>
</div>
@endsection
