@extends('_layouts.master')

@section('body')
<div class="w-full bg-brown-lightest border-t-4 border-purple pb-6"></div>

<main class="font-normal text-xl bg-brown-lightest">
    @include('_components.navigation')

    <div class="container-content pt-4 sm:pb-12">
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

    @include('_components.build-your-site')
</main>

<footer class="bg-blue-darkest text-center py-8 text-sm text-white flex justify-center items-center">
    <p class="text-teal-light font-light text-sm mb-0">A project by
        <a href="https://tighten.co"
            title="Tighten | Product Development for Web + Mobile | Laravel + Vue.js"
            class="text-white no-underline">Tighten</a>
    </p>
</footer>
@endsection
