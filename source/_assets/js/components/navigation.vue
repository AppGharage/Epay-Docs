<template>
    <div class="w-full mx-auto mb-8 max-w-md lg:block lg:w-1/3 lg:mb-0" :class="{ hidden: ! visible }">
        <p class="text-sm uppercase tracking-wide text-blue-docs-light mb-6">Concepts</p>

        <nav class="nav-list" role="navigation">
            <navigation-item :key="key" v-for="(url, key) in navigation" :item="url">{{ key }}</navigation-item>
        </nav>
    </div>
</template>

<script>
import NavigationItem from './navigation-item.vue';

export default {
    components: { NavigationItem },

    props: {
        navigationLinks: String,
    },

    computed: {
        navigation() {
            return JSON.parse(this.navigationLinks);
        }
    },

    data() {
        return {
            visible: false,
        }
    },

    mounted() {
        this.$root.$on('menu-toggle', data => {
            this.visible = data;
        });
    },
}
</script>
