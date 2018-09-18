@extends('_layouts.master')

@section('body')
@include('_components.documentation.navigation')

<div class="bg-brown-lightest pt-4 md:pt-8">
    <div class="flex py-2 px-3 lg:px-0 w-full xl:w-4/5 max-w-3xl md:mx-auto">
        @include('_components.documentation.navigation-sidebar')

        <div class="bg-white rounded-lg w-full lg:max-w-lg mb-16 px-4 md:px-8 py-2 md:py-4 documentation-page" v-pre>
            @yield('documentation_content')
        </div>

        <div class="w-1/5 pl-8 hidden xl:flex">
            <page-navigation :headings="pageHeadings"></page-navigation>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ $page->asset_prefix }}/assets/js/app.js"></script>
@endsection
