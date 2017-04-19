@extends('_layouts.master')

@section('body')
<nav class="navbar navbar-brand">
    <div class="container">
        <div class="navbar-content">
            <div>
                <a class="link-plain text-xxl flex-y-center" href="{{ $asset_prefix }}/">
                    <img class="logo" src="{{ $asset_prefix }}/img/jigsaw-logo-440.png" width="220">
                </a>
            </div>
            <div class="docsearch navbar-buttons">
                <input id="docsearch" class="docsearch__input" type="text" name="docsearch" value=""/>
                <span class="docsearch__icon"></span>
            </div>
        </div>
    </div>
</nav>

<div class="container m-xs-b-6">
    <div class="row">
        <div class="col-md-3 m-xs-b-6">
            <nav class="nav-list">
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/installation/">Installation</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $asset_prefix }}/docs/upgrading/">Upgrading</a>
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/starting-a-new-site/">Starting a New Site</a>
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/building-and-previewing/">Building &amp; Previewing</a>
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/site-variables/">Site Variables</a>
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/helper-functions/">Helper Functions</a>
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/page-metadata/">Page Metadata</a>
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/environments/">Environments</a>

                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/blade-templates-and-partials/">Supported File Types</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $asset_prefix }}/docs/blade-templates-and-partials/">Blade Templates &amp; Partials</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $asset_prefix }}/docs/markdown/">Markdown</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $asset_prefix }}/docs/other-file-types/">Other File Types</a>

                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/collections/">Collections</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $asset_prefix }}/docs/collections-extending-parent-templates/">Extending Parent Templates</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $asset_prefix }}/docs/collections-paths/">Paths</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $asset_prefix }}/docs/collections-sorting/">Sorting</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $asset_prefix }}/docs/collections-pagination/">Pagination</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $asset_prefix }}/docs/collections-variables-and-functions/">Variables &amp; Helper Functions</a>

                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/pretty-urls/">Pretty URLs</a>
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/compiling-assets/">Compiling Assets</a>
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/deploying-your-site/">Deploying Your Site</a>
            </nav>
            <p class="p-xs-x-1 p-xs-y-4 text-dark-soft">
                <small>Brought to you by <a href="http://tighten.co" class="link-tighten">Tighten Co.</a></small>
            </p>
        </div>
        <div class="col-md-9 documentation-page">
            @yield('documentation_content')
        </div>
    </div>
</div>
@endsection
