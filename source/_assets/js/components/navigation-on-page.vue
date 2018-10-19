<template>
    <div class="hidden w-1/3 pl-6 lg:flex">
        <nav role="aside" class="flex flex-col" v-if="headings.length">
            <p class="mb-6 text-sm uppercase font-light tracking-wide text-blue">On this page</p>

            <a v-for="heading in headings"
                class="mb-4 text-blue-darker text-sm"
                :href="'#' + heading.id"
                :key="heading.id"
            >{{ heading.textContent }}</a>
        </nav>
    </div>
</template>

<script>
export default {
    props: {
        headings: Array,
    },
}
</script>
