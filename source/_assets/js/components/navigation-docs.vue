<template>
    <div class="w-1/3 pl-6 hidden lg:flex">
        <nav role="aside" class="flex flex-col" v-if="headings.length">
            <p class="mb-6 text-sm uppercase tracking-wide text-blue-docs-light">On this page</p>

            <a :href="'#' + heading.id" :key="heading.id" class="mb-4 text-blue-darker text-sm"
                v-for="heading in headings">{{ heading.textContent }}</a>
        </nav>
    </div>
</template>

<script>
export default {
    props: ['headings'],
}
</script>
