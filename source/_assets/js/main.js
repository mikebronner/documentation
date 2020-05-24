window.docsearch = require('docsearch.js');
window.axios = require('axios');
window.fuse = require('fuse.js');
window.Vue = require('vue');
import "alpinejs";

import ContextMenu from './components/ContextMenu.vue';
import Search from './components/Search.vue';
import hljs from 'highlight.js/lib/highlight';
import Testimonial from "./components/Testimonial.vue";

hljs.registerLanguage('bash', require('highlight.js/lib/languages/bash'));
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));
hljs.registerLanguage('html', require('highlight.js/lib/languages/xml'));
hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
hljs.registerLanguage('json', require('highlight.js/lib/languages/json'));
hljs.registerLanguage('markdown', require('highlight.js/lib/languages/markdown'));
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));
hljs.registerLanguage('scss', require('highlight.js/lib/languages/scss'));
hljs.registerLanguage('yaml', require('highlight.js/lib/languages/yaml'));

document.querySelectorAll('pre code').forEach((block) => {
    hljs.highlightBlock(block);
});

Vue.config.productionTip = false;

new Vue({
    components: {
        ContextMenu,
        Search,
        Testimonial,
    },

    data: function () {
        return {
            pageHeadings: [],
        };
    },

    mounted: function () {
        var self = this;

        document
            .querySelectorAll('h2,h3')
            .forEach(function (heading) {
                heading.id = heading.textContent.replace(/\s+/g, '-').toLowerCase();
                self.pageHeadings.push(heading);
            });
    }
}).$mount('#app');

