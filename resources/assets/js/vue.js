// Vue JS
window.Vue = require('vue');
Vue.component('question-papers', require('./components/QuestionPapers.vue'));

const app = new Vue({
    el: '#app'
});
