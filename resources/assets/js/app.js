
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';

import Vuelidate from 'vuelidate';
Vue.use(Vuelidate);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue').default);
Vue.component('item-crud', require('./components/ItemCrud.vue').default);
Vue.component('crud', require('./components/Crud.vue').default);
Vue.component('modal', require('./components/Modal.vue').default);

Vue.component('form-category', require('./forms/Category.vue').default);

const app = new Vue({
    el: '#app'
});
