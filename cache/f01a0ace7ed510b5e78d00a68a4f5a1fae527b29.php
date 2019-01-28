<?php $__env->startSection('body'); ?>
<header class="w-full bg-white absolute z-10 shadow-md px-4 md:px-6">
    <nav class="flex items-center max-w-3xl mx-auto py-4" aria-role="navigation">
        <a class="flex flex-no-shrink lg:flex-1 items-center mr-1" href="/" title="Epay Docs">
            <img src="/assets/img/epay-fav.png" alt="Jigsaw logo" class="w-10 lg:w-11 mr-3 shadow border-2 border-white rounded-lg" />

            <h1 class="hidden mr-4 ml-4 uppercase tracking-wide text-blue-darker text-lg lg:text-2xl font-normal lg:ml-0 lg:inline-block">
                Epay Docs
            </h1>
        </a>

        <div class="w-full flex items-center lg:max-w-md xl:max-w-lg border-2 border-indigo-lighter rounded bg-grey">
            <img src="/assets/img/icon-search.svg" class="absolute z-10 h-4 ml-2">

            <input id="docsearch" type="text" class="pl-8 pr-2 py-2 bg-grey" placeholder="Search documentation..." />
        </div>

        <div class="hidden lg:flex lg:flex-1 items-center">
            <a href="https://github.com/AppGharage/Epay-Docs" title="Contribute to Epay-Docs on GitHub" class="flex mr-3 text-blue-darker pl-8">
                <img src="/assets/img/GitHub.svg" alt="GitHub alien logo">
            </a>

            <p class="text-sm text-blue-dark mb-0 leading-tight">
                Documentation for
                <a href="https://epaygh.com" title="Epay Docs | Secure, Global and Instant Payments for Africa"
                    class="text-purple">Epay</a>
            </p>
        </div>

        <navigation-toggle></navigation-toggle>
    </nav>
</header>

<div class="bg-brown-lightest min-h-screen pt-16 md:pt-24 lg:pt-32 px-0 md:px-6">
    <div class="flex flex-col lg:flex-row justify-center max-w-3xl mx-auto">
        <navigation :links='<?php echo json_encode($page->navigation, 15, 512) ?>'></navigation>

        <div class="markdown bg-white w-full lg:max-w-md xl:max-w-lg md:mb-6 lg:mb-10 px-6 xl:px-10 pt-4 pb-8 font-normal sm:shadow md:rounded-lg" v-pre>
            <?php echo $__env->yieldContent('documentation_content'); ?>
        </div>

        <navigation-on-page :headings="pageHeadings"></navigation-on-page>
    </div>

    <footer class="py-8 flex flex-col sm:flex-row justify-center items-center text-center">
        <p class="text-grey-dark font-normal text-xs sm:text-sm my-1">Documentation website for
            <a href="https://epaygh.com" class="text-purple hover:text-purple-darker font-normal no-underline sm:pr-4" title="Epay Docs | Secure, Global and Instant Payments for Africa">Epay</a>
        </p>

        <a href="https://github.com/AppGharage/Epay-Docs" class="sm:border-l border-purple-light sm:pl-4 text-purple text-xs sm:text-sm hover:text-purple-darker font-normal no-underline my-1"
            title="Epay on GitHub">Issues/Feature Requests</a>
    </footer>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(mix('js/app.js', 'assets/build')); ?>"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
    <script type="text/javascript">
        docsearch({
            apiKey: '57a7f5b1e4e0a44c7e2f8e96abcbf674',
            indexName: 'jigsaw',
            inputSelector: '#docsearch'
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>