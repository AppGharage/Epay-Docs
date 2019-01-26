@extends('_layouts.master')

@section('body')
<div class="pt-6 font-normal text-xl bg-brown-lightest">
    @include('_components.navigation')

    <div class="container-content px-4 sm:px-6 py-4 sm:py-8">
        <div class="flex-col mb-0 sm:mb-8 pb-4">
            <h1 class="text-4xl md:text-5xl text-blue-darker leading-none">
                The next Generation <br />
                Payments Platform
            </h1>

            <p class="max-w-md mt-4 text-grey-dark lead">
                Epay is a payments platform designed to allow African Businesses, Accept / Disburse payments.<br class="hidden sm:block">
                Accept Credit Cards and / or Mobile Money on your website or mobile app in minutes!
            </p>
        </div>
    </div>

    @include('_components.epay-is-awesome')
    @include('_components.getting-started')
    @include('_components.features')
    @include('_components.accept-payments-globally')
    @include('_components.built-with-epay')
</div>

@include('_components.footer')
@endsection
