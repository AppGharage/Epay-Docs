<template>
    <div>
        <nav class="flex flex-col" v-if="headings.length">
            <p class="text-grey-dark">On this page</p>
            <a :href="'#' + heading.id" :key="heading.id" v-for="heading in headings">{{ heading.textContent }}</a>
        </nav>
    </div>
</template>

<script>
export default {
    props: ['headings'],
}
</script>
