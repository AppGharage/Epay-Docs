@extends('_layouts.master')

@section('body')
<div class="pt-6 font-normal text-xl bg-brown-lightest">
    <header class="container-content">
        <nav class="flex justify-between items-center mb-8" aria-role="navigation">
            <div class="flex items-center">
                <img src="{{ $page->asset_prefix }}/assets/img/jigsaw-logo.svg" alt="Jigsaw logo"
                    class="logo-icon rounded-lg shadow border-4 border-white mr-2 sm:mr-4 w-10 sm:w-12 sm:border-2" />

                <h4 class="uppercase tracking-wide text-blue-darker text-lg md:text-2xl">Jigsaw</h4>
            </div>

            <div class="text-sm tracking-wide">
                <a href="https://github.com/tightenco/jigsaw" title="Contribute to Jigsaw on GitHub"
                    class="mr-4 text-blue-darker uppercase font-light">
                    <span class="hidden md:inline-block">Contribute</span>

                    <img src="/assets/img/GitHub.svg" alt="GitHub alien logo" class="md:hidden -mb-1">
                </a>

                <a href="/docs/installation" title="Read the Jigsaw documentation"
                    class="py-2 px-4 md:py-3 md:px-4 bg-purple rounded text-white uppercase font-hairline shadow-md">Docs</a>
            </div>
        </nav>
    </header>

    <div class="container-content pt-8 sm:pb-12">
        <div class="flex-col mb-8 pb-4">
            <h1 class="text-5xl text-blue-darker leading-none">
                Static sites for <br />
                modern developers
            </h1>

            <p class="max-w-md mt-4 text-grey lead">
                Jigsaw is a framework for rapidly building static sites using the <br>
                same modern tooling that powers your web applications.
            </p>
        </div>
    </div>

    @include('_components.jigsaw-is-awesome')
    @include('_components.getting-started')
    @include('_components.features')
    @include('_components.compile-your-assets')
    @include('_components.built-with-jigsaw')
    @include('_components.build-your-site')
</div>

<footer class="bg-blue-darkest text-center py-8 text-sm text-white flex justify-center items-center">
    <p class="text-teal-light font-light text-sm mb-0">A project by
        <a href="https://tighten.co"
            title="Tighten | Product Development for Web + Mobile | Laravel + Vue.js"
            class="text-white no-underline">Tighten</a>
    </p>
</footer>
@endsection
