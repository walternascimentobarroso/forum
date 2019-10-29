window._ = require('lodash');

try {
    window.$ = window.jQuery = require('jquery');

    require('materialize-css/dist/js/materialize.js');
    require('./parallax-header.js');
} catch (e) { }

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

import Echo from 'laravel-echo'

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted: true,
    forceTLS: true
});

import swal from 'sweetalert2'

const successCallback = (response) => {
    return response;
}

const errorCallback = (error) => {
    if (error.response.status == 401) {
        swal({
            title: 'Autenticação',
            text: 'Para acessar este recurso você precisa estar autenticado! Você será redirecionado!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ok!',
            cancelButtonText: 'Não, obrigado'
        }).then((result) => {
            if (result.value) {
                window.location = '/login';
            }
        })
    } else {
        swal({
            title: 'Error',
            text: 'Algo deu errado e não pude resolver, me desculpe.',
            type: 'error',
            showCancelButton: false,
            confirmButtonText: 'Ok!'
        })
    }

    return Promise.reject(error);
}

window.axios.interceptors.response.use(successCallback, errorCallback);

window.Vue = require('vue');

Vue.component('loader', require('./commons/AxiosLoader.vue'));

const commonApps = new Vue({
    el: '#loader'
})
