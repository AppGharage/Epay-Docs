<template>
    <div class="hidden xl:flex flex-col lg:w-1/3 p-4 text-sm">
        <nav class="flex-col flex">
            <a class="text-blue-darker mb-3" :href="this.prefix + '/docs/installation/'">Installation</a>
            <a class="text-blue-darker mb-3 ml-4" :href="this.prefix + '/docs/upgrading/'">Upgrading</a>
            <a class="text-blue-darker mb-3" :href="this.prefix + '/docs/building-and-previewing/'">Building &amp; Previewing</a>
            <a class="text-blue-darker mb-3" :href="this.prefix + '/docs/compiling-assets/'">Compiling Assets</a>

            <a class="text-blue-darker mb-3" :href="this.prefix + '/docs/content/'">Creating Your Site's Content</a>
            <a class="text-blue-darker mb-3 ml-4" :href="this.prefix + '/docs/content-blade/'">Blade Templates &amp; Partials</a>
            <a class="text-blue-darker mb-3 ml-4" :href="this.prefix + '/docs/content-markdown/'">Markdown</a>
            <a class="text-blue-darker mb-3 ml-4" :href="this.prefix + '/docs/content-other-file-types/'">Other File Types</a>

            <a class="text-blue-darker mb-3" :href="this.prefix + '/docs/site-variables/'">Site Variables</a>
            <a class="text-blue-darker mb-3" :href="this.prefix + '/docs/helper-methods/'">Helper Methods</a>
            <a class="text-blue-darker mb-3" :href="this.prefix + '/docs/page-metadata/'">Page Metadata</a>
            <a class="text-blue-darker mb-3" :href="this.prefix + '/docs/environments/'">Environments</a>

            <a class="text-blue-darker mb-3" :href="this.prefix + '/docs/collections/'">Collections</a>
            <a class="text-blue-darker mb-3 ml-4" :href="this.prefix + '/docs/collections-extending-parent-templates/'">Extending Parent Templates</a>
            <a class="text-blue-darker mb-3 ml-4" :href="this.prefix + '/docs/collections-paths/'">Paths</a>
            <a class="text-blue-darker mb-3 ml-4" :href="this.prefix + '/docs/collections-sorting/'">Sorting</a>
            <a class="text-blue-darker mb-3 ml-4" :href="this.prefix + '/docs/collections-pagination/'">Pagination</a>
            <a class="text-blue-darker mb-3 ml-4" :href="this.prefix + '/docs/collections-variables-and-functions/'">Variables &amp; Helper Functions</a>
            <a class="text-blue-darker mb-3 ml-4" :href="this.prefix + '/docs/collections-remote-collections/'">Remote Collections</a>

            <a class="text-blue-darker mb-3" :href="this.prefix + '/docs/pretty-urls/'">Pretty URLs</a>
            <a class="text-blue-darker mb-3" :href="this.prefix + '/docs/custom-404-page/'">Custom 404 Page</a>
            <a class="text-blue-darker mb-3" :href="this.prefix + '/docs/event-listeners/'">Event Listeners</a>
            <a class="text-blue-darker mb-3" :href="this.prefix + '/docs/deploying-your-site/'">Deploying Your Site</a>
        </nav>
    </div>


</template>

<script>
export default {
    props: ['prefix'],

}
</script>
