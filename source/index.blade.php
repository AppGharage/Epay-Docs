@extends('_layouts.master')

@section('body')
<div class="bg-brown-lightest border-t-4 border-purple w-full pb-6"></div>

<main class="font-normal text-xl bg-brown-lightest">
    @include('_components.navigation')

    <div class="container-content">
        <div class="flex-col py-12 mb-8 pb-4">
            <h1 class="title-1 text-blue-darker leading-none">
                Static sites for <br />
                modern developers
            </h1>

            <p class="max-w-md mt-4 text-grey lead">
                Jigsaw is a framework for rapidly building static sites using the same modern tooling that powers your web applications.
            </p>
        </div>
    </div>

    <section class="flex -mb-12 justify-center">
        @component('_components.code-editor')
            <div class="flex items-center mb-4">
                <p class="mr-8 text-white">1</p>
                <div class="text-white font-light font-mono text-sm">@@extends('_layouts.master')</div>
            </div>
            <div class="flex items-center mb-4">
                <p class="mr-8 text-white">2</p>
                <div class="text-white font-light font-mono text-sm">@@section('body')</div>
            </div>
            <div class="flex items-center">
                <p class="mr-8 text-white">3</p>
                <div class="">Some line of code</div>
            </div>
        @endcomponent
    </section>

    @include('_components.getting-started')

    @include('_components.features')

    <section class="py-6 bg-brown-lightest">
        <div class="container-content py-6">
            <h3 class="title-3 text-blue-darker text-center mb-6">Compile your assets using Laravel Mix.</h3>
            <p class="text-center text-blue leading-normal">
                Jigsaw bakes in support for Laravel Mix so you can compile your CSS
                and Javascript assets the same way you're used to in Laravel.
            </p>
        </div>
    </section>

    <section class="bg-blue-darker py-16">
        <div class="text-center">
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
</main>
@endsection
