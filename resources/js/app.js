require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import VueRouter from 'vue-router'

import HomeListProducts from "./components/HomeListProducts";
import Navbar from './components/Navbar';
import Tees from './components/Tees';
import PrintMethod from './components/PrintMethod';
import Clients from './components/Clients';
import Engagements from "./components/Engagements";
import FooterSite from "./components/FooterSite";
import Products from "./components/Products";

Vue.use(VueRouter)

const router = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'home',
            components: {
                products: HomeListProducts,
                methods: PrintMethod,
                clients: Clients,
                engagements: Engagements,
            }
        },
        {
            path: '/tees',
            name: 'tees',
            component: Tees
        },
        {
            path: '/produits/:id',
            name: 'products',
            component: Products
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

export default router



