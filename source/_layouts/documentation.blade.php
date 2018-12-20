@extends('_layouts.master')

@section('body')
<header class="w-full bg-white absolute z-10 shadow-md px-4 md:px-6">
    <nav class="flex items-center max-w-3xl mx-auto py-4" aria-role="navigation">
        <a class="flex lg:flex-1 items-center" href="/" title="Jigsaw by Tighten">
            <img src="/assets/img/jigsaw-logo.svg" alt="Jigsaw logo" class="w-8 mr-4" />

            <h1 class="hidden mr-4 ml-4 uppercase tracking-wide text-blue-darker text-lg lg:text-2xl lg:ml-0 lg:inline-block">
                Jigsaw
            </h1>
        </a>

        <div class="w-full flex items-center lg:max-w-md xl:max-w-lg border-2 border-indigo-lighter rounded bg-grey">
            <img src="/assets/img/icon-search.svg" class="absolute z-10 h-4 ml-2">

            <input id="docsearch" type="text" class="pl-8 pr-2 py-2 bg-grey" placeholder="Search documentation..." />
        </div>

        <div class="hidden lg:flex lg:flex-1 items-center">
            <a href="https://github.com/tightenco/jigsaw" title="Contribute to Jigsaw on GitHub" class="flex mr-3 text-blue-darker pl-8">
                <img src="/assets/img/GitHub.svg" alt="GitHub alien logo">
            </a>

            <p class="text-sm text-blue-dark mb-0 leading-tight">
                A project by
                <a href="https://tighten.co" title="Tighten | Product Development for Web + Mobile"
                    class="text-purple">Tighten</a>
            </p>
        </div>

        <navigation-toggle></navigation-toggle>
    </nav>
</header>

<div class="bg-brown-lightest min-h-screen pt-16 md:pt-24 lg:pt-32 px-0 md:px-6">
    <div class="flex flex-col lg:flex-row justify-center max-w-3xl mx-auto">
        <navigation :links='@json($page->navigation)'></navigation>

        <div class="markdown bg-white w-full lg:max-w-md xl:max-w-lg md:mb-6 lg:mb-10 px-6 xl:px-10 pt-4 pb-8 font-normal sm:shadow md:rounded-lg" v-pre>
            @yield('documentation_content')
        </div>

        <navigation-on-page :headings="pageHeadings"></navigation-on-page>
    </div>

    <footer class="py-8 flex flex-col sm:flex-row justify-center items-center text-center">
        <p class="text-grey-dark font-normal text-xs sm:text-sm my-1">Brought to you by the lovely humans at
            <a href="https://tighten.co" class="text-purple hover:text-purple-darker font-normal no-underline sm:pr-4" title="Tighten | Product Development for Web + Mobile | Laravel + Vue.js">Tighten</a>
        </p>

        <a href="https://github.com/tightenco/jigsaw" class="sm:border-l border-purple-light sm:pl-4 text-purple text-xs sm:text-sm hover:text-purple-darker font-normal no-underline my-1"
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
