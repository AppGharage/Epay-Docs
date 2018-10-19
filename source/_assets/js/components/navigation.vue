<template>
    <div class="w-full mx-auto mb-8 max-w-md lg:block lg:w-1/3 lg:mb-0" :class="{ hidden: ! visible }">
        <p class="text-sm uppercase font-light tracking-wide text-blue mb-6">Concepts</p>

        <nav class="nav-list" role="navigation">
            <navigation-item
                v-for="(url, key) in navigation"
                :key="key"
                :item="url">{{ key }}
            </navigation-item>
        </nav>
    </div>
</template>

<script>
import NavigationItem from './navigation-item.vue';

export default {
    components: { NavigationItem },

    props: {
        links: Object,
    },

    data() {
        return {
            navigation: this.links,
            visible: false,
        }
    },

    mounted() {
        this.$root.$on('menu-toggle', visible => {
            this.visible = visible;
        });
    },
}
</script>
