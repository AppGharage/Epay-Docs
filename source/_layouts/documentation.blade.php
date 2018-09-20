@extends('_layouts.master')

@section('body')
<nav class="flex items-center py-2 container-content" aria-role="navigation">
    <a href="/" class="flex items-center mr-3 lg:mr-0 lg:w-1/3" title="Jigsaw by Tighten">
        <img src="{{ $page->asset_prefix }}/assets/img/jigsaw-logo.svg" alt="Jigsaw logo"
            class="rounded-lg w-8 mr-3" />

        <h4 class="hidden lg:inline-block mr-4 title-4 uppercase tracking-wide text-blue-darker">Jigsaw</h4>
    </a>

    <input id="docsearch" type="text" class="" />

    <div class="w-1/3 hidden lg:flex items-center pl-8">
        <a href="https://github.com/tightenco/jigsaw" title="Contribute to Jigsaw on GitHub"
            class="mr-4 text-blue-darker">
            <img src="/assets/img/GitHub.svg" alt="GitHub alien logo">
        </a>

        <p class="text-sm text-blue-docs-dark">
            A project by
            <a href="https://tighten.co" title="Tighten | Product Development for Web + Mobile"
                class="text-purple">Tighten</a>
        </p>
    </div>
    <navigation-toggle></navigation-toggle>
</nav>

<div class="bg-brown-lightest min-h-screen pt-4 md:pt-8">
    <div class="flex flex-col lg:flex-row py-2 container-content">
        <navigation navigation-links="{{ $page->docsNavigation }}"></navigation>

        <div class="bg-white rounded-lg w-full max-w-md mb-12 mx-auto px-4 py-2 documentation-page" v-pre>
            @yield('documentation_content')
        </div>

        <docs-navigation :headings="pageHeadings"></docs-navigation>
    </div>

    <footer class="flex text-center py-6 text-sm justify-center items-center">
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
    <script type="text/javascript">
        docsearch({
            apiKey: '57a7f5b1e4e0a44c7e2f8e96abcbf674',
            indexName: 'jigsaw',
            inputSelector: '#docsearch'
        });
    </script>
@endsection
