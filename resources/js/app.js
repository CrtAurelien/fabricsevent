require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'
import VueAxios from 'vue-axios'
import Vuex from 'vuex'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue)
Vue.use(VueAxios, axios)
Vue.use(VueRouter)
Vue.use(Vuex)


import HomeListProducts from "./components/HomeListProducts";
import Navbar from './components/Navbar';
import PrintMethod from './components/PrintMethod';
import Clients from './components/Clients';
import Engagements from "./components/Engagements";
import FooterSite from "./components/FooterSite";
import Products from "./components/Products";
import HowItWorks from "./components/HowItWorks";
import Error404 from "./components/Error404";
import OrderSummary from "./components/OrderSummary";

const router = new VueRouter({
    routes: [
        {
            path: '/404',
            name: 'error404',
            component: Error404,
        },
        {
            path: '*',
            redirect: '/404',
        },
        {
            path: '/',
            name: 'home',
            components: {
                productslist: HomeListProducts,
                methods: PrintMethod,
                clients: Clients,
                engagements: Engagements,
            }
        },
        {
            path: '/produits/:id',
            name: 'products',
            component: Products,
            props: true
        }
    ],
});

/* eslint-disable no-new */
const app = new Vue({
    store: require('./components/ProductsStore'),
    el: '#app',
    components: {
        OrderSummary,
        HowItWorks,
        Navbar,
        FooterSite
    },
    router,
});


export default {
    router,
}



