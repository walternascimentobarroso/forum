window.Vue = require('vue');

Vue.component('threads', require('./components/Threads.vue').default);

const app = new Vue({
    el: '#app',
});
