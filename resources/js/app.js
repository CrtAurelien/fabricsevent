/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('home-list-products', require('./components/HomeListProducts.vue').default);
Vue.component('how-it-works', require('./components/HowItWorks.vue').default);
Vue.component('contact', require('./components/Contact.vue').default);
Vue.component('print-methods', require('./components/PrintMethod.vue').default);
Vue.component('clients', require('./components/Client.vue').default);
Vue.component('engagements', require('./components/Engagements.vue').default);

 /**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const homeListProducts = new Vue({
    el: '#homeListProducts',
});

const howItWorks = new Vue({
    el: '#howItWorks',
});

const contact = new Vue({
    el: '#contact',
});

const printMethods = new Vue({
    el: '#printMethods',
});

const clients = new Vue({
    el: '#clients',
});

const engagements = new Vue({
    el: '#engagements',
});

