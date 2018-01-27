// Vue JS
window.Vue = require('vue');
Vue.component('question-papers', require('./components/QuestionPapers.vue'));
Vue.component('ebooks', require('./components/Ebooks.vue'));
Vue.component('placement-stats', require('./components/PlacementStats.vue'));

const app = new Vue({
    el: '#app'
});
