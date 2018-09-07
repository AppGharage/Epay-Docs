<section class="flex -mb-12 justify-center container-content">
    <div class="flex flex-col w-full md:w-2/3">
        @component('_components.code-editor')
            <div class="editor-row">
                <p class="line-number">1</p>
                <div class="line-code">---</div>
            </div>

            <div class="editor-row">
                <p class="line-number">2</p>
                <div class="line-code">
                    <span class="text-pink-dark">title</span>: <span class="text-yellow">"Jigsaw is awesome!"</span>
                </div>
            </div>

            <div class="editor-row">
                <p class="line-number">3</p>
                <div class="line-code">---</div>
            </div>

            <div class="editor-row">
                <p class="line-number">5</p>
                <div class="line-code">@@extends('layouts.master')</div>
            </div>

            <div class="editor-row">
                <p class="line-number">6</p>
                <div class="line-code"></div>
            </div>

            <div class="editor-row">
                <p class="line-number">7</p>
                <div class="line-code">@@section('content')</div>
            </div>

            <div class="editor-row">
                <p class="line-number">8</p>
                <div class="line-code ml-4">
                    <span class="text-pink-dark">&lt;h1&gt;</span>
                        @{{ $page->title }}
                    <span class="text-pink-dark">&lt;/h1&gt;</span>
                </div>
            </div>

            <div class="editor-row">
                <p class="line-number">9</p>
                <div class="line-code ml-4">
                    <span class="text-pink-dark">&lt;p&gt;</span>
                        Contact us at @{{ $page->contact_email }}
                    <span class="text-pink-dark">&lt;/p&gt;</span>
                </div>
            </div>

            <div class="editor-row">
                <p class="line-number">10</p>
                <div class="line-code">@@stop</div>
            </div>
        @endcomponent
    </div>
    <div class="hidden md:flex flex-col -ml-8 bg-white items-center justify-center h-64 relative py-26 px-12 rounded shadow-lg z-50">
        <h4 class="title-4 text-grey">Jisaw is awesome!</h4>
        <p class="text-grey text-base">Contact us at <a href="mailto:hello@tighten.co?subject='Hello from Jigsaw'" class="text-blue-lighter">hello@tighten.co</a>.</p>
    </div>
</section>
