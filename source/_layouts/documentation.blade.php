@extends('_layouts.master')

@section('body')
@include('_components.documentation.navigation')

<div class="bg-grey-lighter pt-4 md:pt-8">
    <div class="flex py-2 px-3 lg:px-0 w-full lg:w-4/5 max-w-3xl md:mx-auto">
        @include('_components.documentation.navigation-sidebar')

        <div class="bg-white rounded-lg max-w-lg w-full sm:w-2/3 mb-16 p-8 documentation-page">
            @yield('documentation_content')
        </div>

        <div class="w-1/5 pl-8 hidden xl:flex">
            <nav class="flex flex-col">
                <p class="text-grey-dark">On this page</p>
                <a href="#" class="text-blue-darker">System Requirements</a>
                <a href="#" class="text-blue-darker">Create Project</a>
                <a href="#" class="text-blue-darker">Install Jigsaw with Composer</a>
                <a href="#" class="text-blue-darker">Initialize your project</a>
                <a href="#" class="text-blue-darker">Directory structure</a>
            </nav>
        </div>
    </div>
</div>

@endsection
