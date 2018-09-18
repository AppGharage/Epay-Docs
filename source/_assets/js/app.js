let Vue = require('vue');
import PageNavigation from './components/page-navigation';
import DocsNavigation from './components/docs-navigation';

new Vue({
    el: '#vue-app',

    components: { PageNavigation, DocsNavigation },

    data() {
        return {
            pageHeadings : []
        }
    },

    methods: {
        addAnchorsToHeadings(){
            document.querySelectorAll('h3').forEach((heading) => {
                heading.id = heading.textContent.replace(/\s+/g, '').toLowerCase();
                this.pageHeadings.push(heading);
            });
        }
    },

    mounted() {
       this.addAnchorsToHeadings();
    }
});
