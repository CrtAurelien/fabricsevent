require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueAxios, axios)
Vue.use(VueRouter)

import HomeListProducts from "./components/HomeListProducts";
import Navbar from './components/Navbar';
import PrintMethod from './components/PrintMethod';
import Clients from './components/Clients';
import Engagements from "./components/Engagements";
import FooterSite from "./components/FooterSite";
import Products from "./components/Products";
import HowItWorks from "./components/HowItWorks";
import OrderSummary from "./components/OrderSummary";

const router = new VueRouter({
    routes: [
        {
            path: '*',
            redirect: '/',
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

const app = new Vue({
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



