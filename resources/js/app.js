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



const router = new VueRouter({
    routes: [
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
        }
    ],
});



const app = new Vue({
    el: '#app',
    components: {
        Navbar,
        FooterSite
    },
    router,
});

export default {
    router
}



