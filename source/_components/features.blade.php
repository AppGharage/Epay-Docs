<section class="bg-white py-12 md:py-16">
    <div class="example-row container-content">
        <div class="flex-col md:w-3/5 pr-8 pb-8 md:pb-0">
            <h3 class="title-3 mb-4 text-blue-darker">
                Blade templating, <br/>
                just like your Laravel apps.
            </h3>

            <p class="text-blue">
                Blade is a powerful, simple, and beautiful templating language,
                but until now it wasn't an option if you were building a simple static site that didn't need a complex PHP backend.
            </p>

            <p class="text-blue">
                Jigsaw brings Blade to the static site world,
                so you can use the same templating engine for simple websites as you do for complex web applications.
            </p>
        </div>


        <div class="w-full md:w-1/2">
            @component('_components.code-editor')
                <div class="editor-row">
                    <p class="line-number">1</p>
                    <div class="line-code">@@extends('_layouts.master')</div>
                </div>

                <div class="editor-row">
                    <p class="line-number">2</p>
                    <div class="line-code">@@section('body')</div>
                </div>

                <div class="editor-row">
                    <p class="line-number">3</p>
                    <div class="line-code ml-4"><span class="text-pink-dark">&lt;h1&gt;</span>Hello World<span class="text-pink-dark">&lt;/h1&gt;</span></div>
                </div>

                <div class="editor-row">
                    <p class="line-number">4</p>
                    <div class="line-code">@@endsection</div>
                </div>
            @endcomponent
        </div>
    </div>

    <div class="example-row container-content">
        <div class="flex-col md:w-3/5 pr-8 pb-8 md:pb-0">
            <h3 class="title-3 mb-4 text-blue-darker">
                Use Markdown for content-driven pages.
            </h3>

            <p class="text-blue">
                Markdown is a fantastic writing format for things like articles, blog posts, or documentation pages.
            </p>

            <p class="text-blue mb-4">
                Jigsaw makes it painless to create a layout in Blade, and fill it with content written in Markdown.
            </p>

            <a href="/docs/installation" title="Read the Jigsaw documentation"
                class="text-purple text-base no-underline">
                Learn more in the docs <img src="/assets/img/icon-arrow.svg" class="w-4 -mb-1">
            </a>
        </div>

        <div class="w-full md:w-1/2">
            @component('_components.code-editor')
                <div class="editor-row">
                    <p class="line-number">1</p>
                    <div class="line-code">---</div>
                </div>

                <div class="editor-row">
                    <p class="line-number">2</p>
                    <div class="line-code">extends: layouts.post</div>
                </div>

                <div class="editor-row">
                    <p class="line-number">3</p>
                    <div class="line-code">section: content</div>
                </div>

                <div class="editor-row">
                    <p class="line-number">4</p>
                    <div class="line-code">---</div>
                </div>

                <div class="editor-row">
                    <p class="line-number">5</p>
                    <div class="line-code"></div>
                </div>

                <div class="editor-row">
                    <p class="line-number">6</p>
                    <div class="line-code"># Hellow World!</div>
                </div>

                <div class="editor-row">
                    <p class="line-number">7</p>
                    <div class="line-code">Welcome to the future.</div>
                </div>
            @endcomponent
        </div>
    </div>
</section>
