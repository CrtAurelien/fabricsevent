import Vuex from 'vuex'
import Vue from 'vue'
Vue.use(Vuex);

const state = {
    productlist: [

    ]
};

const mutations = {
    ADD_PRODUCT: (state, product) => {
        state.productlist.push({
            product,
        })
    },

    REMOVE_PRODUCT: (state, product) => {
        var index = state.productlist.findIndex(todo => todo.id === product);
        var test = state.productlist.splice(index, 1);
        console.log(test)
    }
};

const actions = {
    addProduct: (store, name) => {
        store.commit('ADD_PRODUCT', name)
    },

    removeProduct: (store, product) => {
        store.commit('REMOVE_PRODUCT', product)
    }
};

const getters = {
    productlist: state => state.productlist
};

let store = new Vuex.Store({
    state: state,

    mutations: mutations,

    getters: getters,

    actions: actions
});

global.store = store

export default store