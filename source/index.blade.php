@extends('_layouts.master')

@section('body')
<div class="bg-brown-lightest border-t-4 border-purple w-full pb-6"></div>

<div class="font-normal text-xl bg-brown-lightest">
    <header class="max-w-lg mx-auto px-4 lg:px-0">
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

    <div class="max-w-lg mx-auto px-4 lg:px-0">
        <div class="flex-col pt-4 mb-8 pb-4">
            <h1 class="text-4xl font-normal text-blue-darker leading-none">
                Static sites for <br />
                modern developers
            </h1>

            <p class="text-xl text-grey max-w-md mt-4 font-normal leading-normal">
                Jigsaw is a framework for rapidly building static sites using the same modern tooling that powers your web applications.
            </p>
        </div>
    </div>

    <div class="pt-8 pb-4 bg-gradient-purple flex flex-col items-center">
        <h2 class="text-white font-normal text-3xl mb-2">Getting started is easy</h2>
        <p class="text-pink-lighter mb-4">Just make new project directory and install Jigsaw using Composer</p>
        <code class="p-2 px-8 rounded bg-purple-darkest">
            <pre class="text-white text-sm">$ composer global require tightenco/jigsaw</pre>
        </code>
    </div>

    <section class="bg-white py-8 ">
        <div class="flex mb-8 max-w-lg mx-auto">
            <div class="flex-col">
                <h3 class="title-3 mb-4 text-blue-darker">
                    Blade templating, <br/>
                    just like your Laravel apps.
                </h3>

                <p class="text-blue">
                    Blade is a powerful, simple, and beautiful templating language, but until now it wasn't an option if you were building a simple static site that didn't need a complex PHP backend.
                </p>

                <p class="text-blue">
                    Jigsaw brings Blade to the static site world, so you can use the same templating engine for simple websites as you do for complex web applications.
                </p>
            </div>
            <div></div>
        </div>

        <div class="flex max-w-lg mx-auto">
            <div class="flex-col">
                <h3 class="title-3 mb-4 text-blue-darker">
                    Use Markdown for content-driven pages.
                </h3>

                <p class="text-blue">
                    Markdown is a fantastic writing format for things like articles, blog posts, or documentation pages.
                </p>

                <p class="text-blue mb-4">
                    Jigsaw makes it painless to create a layout in Blade, and fill it with content written in Markdown.
                </p>

                <a href="/docs/installation" title="Read the Jigsaw documentation"
                    class="text-purple text-base no-underline">
                    Learn more in the docs
                </a>
            </div>
        </div>
    </section>

    <section class="py-6 bg-brown-lightest">
        <div class="max-w-lg mx-auto px-4 lg:px-0 py-6">
            <h2 class="text-blue-darker font-normal text-2xl text-center mb-6">Compile your assets using Laravel Mix.</h2>
            <p class="text-center text-blue leading-normal">
                Jigsaw bakes in support for Laravel Mix so you can compile your CSS <br/>
                and Javascript assets the same way you're used to in Laravel.
            </p>
        </div>
    </section>

    <section class="bg-blue-darker py-8">
        <div class="text-center py-8">
            <h4 class="title-4 text-white font-light mb-4">
                Ready to get started?
            </h4>

            <p class="text-teal-light font-light mb-8 leading-normal">
                Check out our installation instructions and you'll be <br/>
                up and running in no time.
            </p>

            <a href="{{ $page->asset_prefix }}/docs/installation/" class="py-4 px-6 text-grey-darker no-underline tracking-wide uppercase rounded-lg text-sm bg-grey-lightest shadow-lg">
                Build your site
            </a>
        </div>
    </section>
</div>
@endsection
