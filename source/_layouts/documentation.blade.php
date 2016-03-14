@extends('_layouts.master')

@section('body')
<nav class="navbar navbar-brand">
    <div class="container">
        <div class="navbar-content">
            <div>
                <a class="link-plain text-xxl flex-y-center" href="{{ $asset_prefix }}/">
                    <strong><em>Jigsaw</em></strong>
                </a>
            </div>
            <div>
                <a href="{{ $asset_prefix }}/docs/installation/" class="btn btn-primary-outline">
                    Docs
                </a>
            </div>
        </div>
    </div>
</nav>
<div class="container m-xs-b-6">
    <div class="row">
        <div class="col-md-3 m-xs-b-6">
            <nav class="nav-list">
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/installation/">Installation</a>
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/starting-a-new-site/">Starting a new site</a>
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/blade-templating/">Blade templating</a>
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/layouts/">Layouts</a>
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/markdown/">Markdown</a>
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/partials/">Partials</a>
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/configuration-variables/">Configuration variables</a>
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/compiling-assets/">Compiling assets</a>
                <a class="nav-list-item" href="{{ $asset_prefix }}/docs/pretty-urls/">Pretty URLs</a>
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
