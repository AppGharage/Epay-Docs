@extends('_layouts.master')

@section('body')
<header class="w-full bg-white absolute z-10 shadow-md">
    <nav class="flex items-center justify-center py-4 container-content" aria-role="navigation">
        <a href="/" class="flex items-center lg:w-1/3" title="Jigsaw by Tighten">
            <img src="/assets/img/jigsaw-logo.svg" alt="Jigsaw logo"
                class="rounded-lg w-8 mr-4" />

            <h1 class="hidden mr-4 ml-4 uppercase tracking-wide text-blue-darker text-lg lg:text-2xl lg:ml-0 lg:inline-block">
                Jigsaw
                <span class="hidden text-blue lowercase text-base align-top lg:inline-block">docs</span>
            </h1>
        </a>

        <div class="w-full flex items-center max-w-md px-2 border-2 border-indigo-lighter rounded bg-grey xl:max-w-lg lg:-mx-3">
            <img src="/assets/img/icon-search.svg" class="h-4">

            <input id="docsearch" type="text" placeholder="Search documentation..." />
        </div>

        <div class="w-1/3 hidden items-center pl-3 lg:flex lg:pl-8">
            <a href="https://github.com/tightenco/jigsaw" title="Contribute to Jigsaw on GitHub"
                class="mr-6 text-blue-darker">
                <img src="/assets/img/GitHub.svg" alt="GitHub alien logo">
            </a>

            <p class="text-sm text-blue-dark mb-0">
                A project by
                <a href="https://tighten.co" title="Tighten | Product Development for Web + Mobile"
                    class="text-purple">Tighten</a>
            </p>
        </div>

        <navigation-toggle></navigation-toggle>
    </nav>
</header>


<div class="bg-brown-lightest min-h-screen pt-32">
    <div class="flex flex-col lg:flex-row py-2 container-content">
        <navigation :links='@json($page->navigation)'></navigation>

        <div class="bg-white rounded-lg w-full max-w-md mb-10 mx-auto px-6 py-4 documentation-page xl:max-w-lg" v-pre>
            @yield('documentation_content')
        </div>

        <navigation-on-page :headings="pageHeadings"></navigation-on-page>
    </div>

    <footer class="text-center py-8 flex justify-center items-center">
        <p class="m-0 text-blue-darker text-sm font-light pr-1">Brought to you by the lovely humans at </p>

        <a href="https://tighten.co" class="text-sm text-purple no-underline pr-2"
            title="Tighten | Product Development for Web + Mobile | Laravel + Vue.js">Tighten</a>

        <a href="https://github.com/tightenco/jigsaw" class="text-sm border-l border-blue-darker pl-3 text-purple no-underline"
            title="Jigsaw on GitHub">Issues/Feature Requests</a>
    </footer>
</div>
@endsection

@section('scripts')
    <script src="{{ mix('js/app.js', 'assets/build') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
    <script type="text/javascript">
        docsearch({
            apiKey: '57a7f5b1e4e0a44c7e2f8e96abcbf674',
            indexName: 'jigsaw',
            inputSelector: '#docsearch'
        });
    </script>
@endsection
