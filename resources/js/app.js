/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import vue from 'vue';
import Vuetify from 'vuetify';

window.Vue = require('vue');
vue.use(Vuetify);

/* import Vuetify from 'vuetify'; */


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin', require('./components/Admin.vue').default);
Vue.component('dashboard', require('./components/views/Dashboard.vue').default);
Vue.component('category', require('./components/views/Category.vue').default);
Vue.component('product', require('./components/views/Products.vue').default);
Vue.component('manageWeb', require('./components/views/ManageWeb.vue').default);
Vue.component('userProfile', require('./components/views/Userprofile.vue').default);
Vue.component('userManage', require('./components/views/UserManage.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    vuetify: new Vuetify(),
    el: '#app',
});
