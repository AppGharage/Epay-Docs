let Vue = require('vue');
import PageNavigation from './components/page-navigation';
new Vue({
    el: '#vue-app',

    components: { PageNavigation },

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
