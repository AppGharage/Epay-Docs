@extends('_layouts.master')

@section('body')
@include('_components.documentation.navigation')

<div class="bg-brown-lightest min-h-screen pt-4 md:pt-8">
    <div class="flex py-2 px-3 container-content lg:px-0">
        <navigation navigation-links="{{ $page->docsNavigation }}"></navigation>

        <div class="bg-white rounded-lg w-full mb-12 px-4 py-2 documentation-page md:py-4 md:px-8 lg:max-w-md" v-pre>
            @yield('documentation_content')
        </div>


        <docs-navigation :headings="pageHeadings"></docs-navigation>
    </div>
    <footer class="flex text-center py-8 text-sm justify-center items-center">
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
