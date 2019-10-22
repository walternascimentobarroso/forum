window.Vue = require('vue');

Vue.component('replies', require('./components/Replies.vue').default);

const app = new Vue({
    el: '#app',
});
