@extends('_layouts.master')

@section('body')
@include('_components.documentation.navigation')

<div class="bg-brown-lightest min-h-screen pt-4 md:pt-8">
    <div class="flex py-2 px-3 lg:px-0 w-full xl:w-4/5 max-w-3xl md:mx-auto">
        <navigation navigation-links="{{ $page->docsNavigation }}"></navigation>

        <div class="bg-white rounded-lg w-full lg:max-w-md mb-12 px-4 md:px-8 py-2 md:py-4 documentation-page" v-pre>
            @yield('documentation_content')
        </div>


        <docs-navigation :headings="pageHeadings"></docs-navigation>
    </div>
    <footer class="text-center py-8 text-sm flex justify-center items-center">
        <p class="text-blue-darker font-light text-sm mb-0">A project by
            <a href="https://tighten.co"
                title="Tighten | Product Development for Web + Mobile | Laravel + Vue.js"
                class="text-purple no-underline font-normal">Tighten</a>
        </p>
    </footer>
</div>
@endsection

@section('scripts')
    <script src="{{ $page->asset_prefix }}/assets/js/app.js"></script>
@endsection
