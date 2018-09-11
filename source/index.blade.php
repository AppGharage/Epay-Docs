@extends('_layouts.master')

@section('body')
<div class="bg-brown-lightest border-t-4 border-purple w-full pb-6"></div>

<main class="font-normal text-xl bg-brown-lightest">
    @include('_components.navigation')

    <div class="container-content pt-4 pb-12">
        <div class="flex-col mb-8 pb-4">
            <h1 class="title-1 text-blue-darker leading-none">
                Static sites for <br />
                modern developers
            </h1>

            <p class="max-w-md mt-4 text-grey lead">
                Jigsaw is a framework for rapidly building static sites using the same modern tooling that powers your web applications.
            </p>
        </div>
    </div>

    @include('_components.jigsaw-is-awesome')

    @include('_components.getting-started')

    @include('_components.features')

    @include('_components.compile-your-assets')

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
