
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';

import Vuelidate from 'vuelidate';
import { CoolSelectPlugin } from 'vue-cool-select'
import VModal from 'vue-js-modal'



Vue.use(VModal, { componentName: "v-modal" });

Vue.use(Vuelidate);
Vue.use(CoolSelectPlugin);
import 'vue-cool-select/dist/themes/bootstrap.css'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue').default);
Vue.component('item-crud', require('./components/ItemCrud.vue').default);
Vue.component('crud', require('./components/Crud.vue').default);
Vue.component('modal', require('./components/Modal.vue').default);
// Forms
Vue.component('form-base', require('./forms/Base.vue').default);
Vue.component('form-category', require('./forms/Category.vue').default);
Vue.component('form-unit-measure', require('./forms/UnitMeasure').default);
Vue.component('form-product', require('./forms/Product').default);
Vue.component('form-vendor', require('./forms/Vendor').default);
// form Gastos
Vue.component('form-tipo-gastos', require('./forms/TipoGasto').default);
// form Vouchers
Vue.component('form-voucher-buy', require('./forms/Vouchers/Buy').default);

Vue.component('padre', require('./components/padre.vue').default);
Vue.component('hijo', require('./components/hijo.vue').default);
const app = new Vue({
    el: '#app'
});
