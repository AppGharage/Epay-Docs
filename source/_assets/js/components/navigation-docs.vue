<template>
    <div class="w-1/3 pl-6 hidden md:flex">
        <nav class="flex flex-col" v-if="headings.length">
            <p class="text-sm uppercase text-grey-dark mb-6">On this page</p>
            <a :href="'#' + heading.id" :key="heading.id" class="text-blue-darker text-sm mb-4"
                v-for="heading in headings">{{ heading.textContent }}</a>
        </nav>
    </div>
</template>

<script>
export default {
    props: ['headings'],
}
</script>
