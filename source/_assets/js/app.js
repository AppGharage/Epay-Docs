let Vue = require('vue');

import DocsNavigation from './components/navigation-docs.vue';
import NavigationToggle from './components/navigation-toggle.vue';
import Navigation from './components/navigation.vue';

new Vue({
    el: '#vue-app',

    components: {
        DocsNavigation,
        Navigation,
        NavigationToggle
    },

    data() {
        return {
            pageHeadings : []
        }
    },

    mounted() {
        document.querySelectorAll('h3').forEach((heading) => {
            heading.id = heading.textContent.replace(/\s+/g, '-').toLowerCase();

            this.pageHeadings.push(heading);
        });
    },
});
