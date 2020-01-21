// Vue JS
window.Vue = require('vue');
Vue.component('question-papers', require('./components/QuestionPapers.vue').default);
Vue.component('ebooks', require('./components/Ebooks.vue').default);
Vue.component('placement-stats', require('./components/PlacementStats.vue').default);

const app = new Vue({
    el: '#app'
});
