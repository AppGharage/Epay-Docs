let Vue = require('vue');

import NavigationDocs from './components/navigation-docs.vue';
import NavigationToggle from './components/navigation-toggle.vue';
import Navigation from './components/navigation.vue';

new Vue({
    el: '#vue-app',

    components: {
        NavigationDocs,
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
