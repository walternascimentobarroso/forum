window._ = require('lodash');

try {
    window.$ = window.jQuery = require('jquery');

    require('materialize-css/dist/js/materialize.js');
    require('./parallax-header.js');
} catch (e) { }


window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
