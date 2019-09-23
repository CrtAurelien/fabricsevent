<template>
    <div class="container-fluid">
        <div class="row main_wrapper"></div>
        <ordersummary></ordersummary>
        <div class="container">
            <div class="row">
                <ol class="breadcrumb breadcrumb-bg-green">
                    <li>
                        <router-link :to="{name: 'home'}">Accueil</router-link>
                    </li>
                    <li><span v-if="category.name">{{category.name}}</span></li>
                </ol>
                <hr class="separator">
                <div class="categories">
                    <router-link :to="{name: 'products', params: {id: category.id}}" class="produit"
                                 v-for="category in categories" :key="category.id">
                        <span class="badge" :style="{backgroundColor: category.color}">{{category.name}}</span>
                    </router-link>
                </div>
                <hr class="separator">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 product" v-for="products in product" :key="products.id" v-on:click="addProduct(products);">
                    <figure class="productimg" v-bind:id="products.id" v-on:click="selectedItem()">
                        <img :src="'./images/fabrics-img/sweat-fabrics.png'"
                             :class="{highlight:products.selectproduct}"
                             alt="">
                        <!--@click="$set(products, 'selectproduct', !products.selectproduct)"-->
                        <a href="javascript:;"></a>
                    </figure>
                    <hr>
                    <div class="color">
                        <span class="badge">&nbsp;</span>
                        <span class="badge">&nbsp;</span>
                        <span class="badge">&nbsp;</span>
                        <span class="badge">&nbsp;</span>
                        <span class="badge">&nbsp;</span>
                        <span class="badge">&nbsp;</span>
                        <span class="badge">&nbsp;</span>
                        <span class="badge">&nbsp;</span>
                        <span class="badge" data-toggle="modal" data-target="#modal-colors">&nbsp;</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-colors" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <span class="badge">&nbsp;</span>
                        <span class="badge">&nbsp;</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

    div.product > figure > img:hover {
        filter: brightness(0.8);
    }

    div.product > figure > img.highlight {
        filter: brightness(0.5);
    }

    .separator {
        margin-top: 0px;
        margin-bottom: 5px;
        border: 0;
        border-top: 1px solid #eee;
    }


    .color {
        width: auto;
        display: block;
        background: #d0d5d4;
        padding: 12px;
        text-align: center;
    }

    .color > .badge {
        width: 25px;
        height: 25px;
        cursor: pointer;
        padding: 0;
    }

    .productimg > img {
        width: 100%;
    }

    .modal-body {
        text-align: center;
    }

    .modal-body > .badge {
        width: 45px;
        height: 45px;
        cursor: pointer;
        padding: 0;
    }

    .color > .badge:last-child {
        background: url(https://static.brusheezy.com/system/resources/previews/000/050/237/non_2x/gay-pride-gradient-photoshop-gradients.jpg);
        background-size: cover;
    }

    .badge {
        vertical-align: initial !important;
    }

    .produit + .produit {
        margin-left: 20px;
    }

    .categories {
        padding-bottom: 5px;
        padding-top: 0px;
    }

    .productimg {
        height: auto;
        border: 5px solid #d0d5d4;
    }

    .product {
        position: relative;
        text-align: center;
        padding: 5px;
        color: white;
        font-weight: 600;
        text-transform: uppercase;
    }
</style>

<script>
    import OrderSummary from "./OrderSummary";
    export default {
        data() {
            return {
                productlist:[{}],
                selectedProduct: [{name: ''}],
                isActive: false,
                category: {},
                product: {},
                selected: '',
                categories: {},
                selectproduct: undefined
            }
        },
        methods: {
            addProduct: function(product) {
                this.selectedProduct = product;
                this.productlist.push(product);
            },
            selectedItem: function () {
                this.isActive = !this.isActive;
            },
            changeRoute: function (id) {
                this.$router.push({path: '/produits/' + id.target.value})
            },
            getCategories: function () {
                return axios.get('http://localhost/fabricsevent/public/api/categories/')
            },
            getCategory: function (id) {
                return axios.get('http://localhost/fabricsevent/public/api/category/' + id)
            },
            getProduct: function (id) {
                return axios.get('http://localhost/fabricsevent/public/api/product/' + id)
            }
        },
        created() {
            var self = this;
            axios.all([this.getCategory(this.id), this.getProduct(this.id), this.getCategories()])
                .then(axios.spread(function (category, product, categories) {
                    self.category = category.data;
                    self.product = product.data;
                    self.categories = categories.data;
                }));
        },
        props: ["id", "name"],
        components:{
            ordersummary: OrderSummary
        }
    }
</script>
