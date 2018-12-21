---
permalink: 404.html
---

@extends('_layouts.master')

@section('body')
<div class="min-h-screen pt-6 font-normal text-xl bg-brown-lightest">
    @include('_components.navigation')

    <div class="flex py-32 max-w-xl mx-auto justify-around">
        <img src="/assets/img/404.svg" alt="404 Jigsaw">

        <div>
            <h1 class="text-6xl font-bold text-blue-darker leading-0 mb-12">404</h1>
            <h1 class="text-5xl font-bold text-blue-darker mb-6">Page not found</h1>
            <p class="text-grey-dark text-lg mb-6">The page you requested could not be found</p>

            <a href="/" title="Jigsaw by Tighten" class="bg-purple-dark py-2 px-6 text-sm rounded-lg uppercase text-white shadow">Go to home</a>
        </div>
    </div>
</div>

@include('_components.footer')
@endsection
