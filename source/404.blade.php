---
permalink: 404.html
---

@extends('_layouts.master')

@section('body')
<nav class="navbar navbar-brand">
    <div class="container">
        <div class="navbar-content">
            <div>
                <a class="link-plain text-xxl flex-y-center" href="{{ $page->asset_prefix }}/">
                    <img src="{{ $page->asset_prefix }}/img/jigsaw-logo.svg" alt="Jigsaw logo" class="logo-icon" width="65">
                    <img src="{{ $page->asset_prefix }}/img/jigsaw-type.svg" alt="Jigsaw logo" class="logo-type" width="130">
                </a>
            </div>
            <div class="docsearch navbar-buttons">
                <input id="docsearch" class="docsearch__input" type="text" name="docsearch" value=""/>
                <span class="docsearch__icon"></span>
            </div>
        </div>
    </div>
</nav>

<div class="container m-xs-b-6 documentation-page">
    <div class="row">
        <div class="col-xs-12 p-xs-y-8 text-center">
            <h2>Something went wrong...</h2>
            <h4 class="m-xs-y-2">
                We couldn't find the page you were looking for.<br/>
                Try using the search box above.
            </h4>
        </div>
    </div>
</div>
@endsection
