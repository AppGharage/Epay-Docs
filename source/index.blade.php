@extends('_layouts.master')

@section('body')
<header class="bg-hero border-b p-xs-b-4">
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
    <div class="container text-center">
        <div class="constrain">
            <div class="m-xs-b-8">
                <h1 class="text-jumbo m-xs-b-4">
                    Static sites for Laravel developers
                 </h1>
                <h2 class="text-lg">
                    Two lines of text that we should replace with something meaningful for the people who visit the page.
                </h2>
            </div>
        </div>
    </div>
</header>
<!-- Removed until we get the illustrations and copy sorted

Also HTML comments until Blade comment bug gets merged :)

<section class="p-xs-y-8 border-b bg-soft">
    <div class="container">
        <h3 class="text-xl text-center m-xs-b-6">
            Jigsaw is the missing puzzle piece.<br>
            And all it takes is 3 simples steps.
        </h3>
        <div class="row">
            <div class="col-lg-4 m-xs-b-8 m-md-b-6 m-lg-b-0">
                <div class="row">
                    <div class="col-md-4 col-lg-12">
                        <div class="text-center m-xs-b-4 p-xs-x-6">
                            <img class="img-xs-300 img-fit" src="{{ $asset_prefix }}/img/step1.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12">
                        <h4 class="m-xs-b-2">Installation</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia voluptate quidem necessitatibus, earum, ipsum aperiam.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 m-xs-b-8 m-md-b-6 m-lg-b-0">
                <div class="row">
                    <div class="col-md-4 col-lg-12">
                        <div class="text-center m-xs-b-4 p-xs-x-6">
                            <img class="img-xs-300 img-fit" src="{{ $asset_prefix }}/img/step2.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12">
                        <h4 class="m-xs-b-2">Customize your site</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus nemo dolor, eius eligendi nostrum voluptates. Recusandae facilis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 m-lg-b-0">
                <div class="row">
                    <div class="col-md-4 col-lg-12">
                        <div class="text-center m-xs-b-4 p-xs-x-6">
                            <img class="img-xs-300 img-fit" src="{{ $asset_prefix }}/img/step3.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12">
                        <h4 class="m-xs-b-2">Build and deploy</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate consequatur ducimus porro! Quam nobis officiis possimus rem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<section class="p-xs-y-8 border-b bg-soft">
    <div class="container">
        <h3 class="constrain text-xl text-center m-xs-b-6">
            Jigsaw uses the Blade templating language,<br> just like your Laravel apps.
        </h3>
        <div class="row">
            <div class="col-md-6 p-xs-8">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui repellat in, dignissimos minima, nisi voluptates laboriosam earum eveniet ea similique.
            </div>
            <div class="col-md-6">
                <img src="{{ $asset_prefix }}/img/blade-sample.png" alt="Blade Code Sample" class="img-fit">
            </div>
        </div>
    </div>
</section>
<section class="p-xs-y-8 border-b bg-soft">
    <div class="container">
        <h3 class="constrain text-xl text-center m-xs-b-6">
            Compile your assets using Laravel Elixir.
        </h3>
        <div class="row">
            <div class="col-md-6 col-md-push-6 p-xs-8">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui repellat in, dignissimos minima, nisi voluptates laboriosam earum eveniet ea similique.
            </div>
            <div class="col-md-6 col-md-pull-6">
                <img src="{{ $asset_prefix }}/img/elixir-preprocessors.png" alt="Blade Code Sample" class="img-fit">
            </div>
        </div>
    </div>
</section>
<section class="p-xs-y-8 border-b bg-soft">
    <div class="container text-center">
        <h3 class="text-xl m-xs-b-6">
            Open Source
        </h3>
        <p class="constrain constrain-sm m-xs-b-6">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus accusamus at necessitatibus.
        </p>
        <div>
            <a href="https://github.com/tightenco/jigsaw" class="btn btn-lg btn-primary">Contribute on GitHub</a>
        </div>
    </div>
</section>
@endsection
