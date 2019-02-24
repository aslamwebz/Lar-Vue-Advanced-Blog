
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

require('./bootstrap');

window.Vue = require('vue');
// window.Slug = require('slug');
// Slug.defaults.mode = 'rfc3986';

import Buefy from 'buefy'
import 'buefy/dist/buefy.css'
Vue.use(Buefy);

// $(document).ready(function() {
//       $('.editor').summernote({
//         height: 300,
//         tabsize: 2
//       });
//     });

// Vue.component('slug-widget', require('./components/slugWidget.vue'));

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// require('./custom-vue');

// var app = new Vue({
//     el: '#app',
//     data:{}
// });

