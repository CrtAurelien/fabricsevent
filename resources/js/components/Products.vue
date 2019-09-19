<template>
    <div class="container-fluid">
        <div class="row main_wrapper"></div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2 wrapper">
                    <!--<ol class="breadcrumb breadcrumb-bg-green">
                        <li><i class="material-icons">home</i><router-link :to="{name: 'home'}"> Accueil</router-link></li>
                        <li><i class="material-icons"></i> <span class="badge" :style="{backgroundColor: category.color}">{{category.name}}</span></li>
                    </ol>-->
                    <div class="categories">
                        <router-link :to="{name: 'products', params: {id: category.id}}" class="produit"  v-for="category in categories" :key="category.id" >
                            <span class="badge" :style="{backgroundColor: category.color}">{{category.name}}</span>
                        </router-link>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="col-lg-3 colors" >
                        <span class="color">&nbsp;</span>
                        <span class="color">&nbsp;</span>
                        <span class="color">&nbsp;</span>
                        <span class="color">&nbsp;</span>
                        <span class="color">&nbsp;</span>
                        <span class="color">&nbsp;</span>
                        <span class="color">&nbsp;</span>
                        <span class="color">&nbsp;</span>
                        <span class="color">&nbsp;</span>
                        <span class="color">&nbsp;</span>
                        <span class="color">&nbsp;</span>
                        <span class="color">&nbsp;</span>
                        <span class="color">&nbsp;</span>
                        <span class="color">&nbsp;</span>
                        <span class="color">&nbsp;</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 listproducts">
                    <div class="col-lg-3 product" v-for="products in product">
                        <figure class="imghvr-shutter-out-diag-2 productimg"><img
                                :src="'./images/fabrics-img/tee-shirt-fabrics.jpg'" alt="example-image">
                            <figcaption>
                                <h3>{{products.name}}</h3>
                            </figcaption>
                            <a href="javascript:;"></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
</template>

<style scoped>
    .colors{
    }

    .color{
        margin-bottom: 10px;
        display: inline-block;
        width: 17.4px;
        padding: 3px 7px;
        font-size: 12px;
        font-weight: bold;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        background-color: #777;
    }

    .products{
        text-align: center;
        background: #ceca7d;
        padding: 7px;
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom:25px;
    }

    .wrapper {
        padding-bottom: 20px;
        padding-left: 20px;
    }

    .badge{
        vertical-align:initial !important;
    }

    .produit + .produit {
        margin-left:25px;
    }

    .categories{
        padding-top:10px;
        padding-bottom:40px;
    }

    .listproducts{
        display:flex;
    }

    .productimg{
        height: 100%;
    }

    .product:first-child{
        margin: 0 5px 0 0;
    }

    .product{
        text-align: center;
        background: #ceca7d;
        padding: 7px;
        color: white;
        font-weight: 600;
        margin: 0 5px;
        text-transform: uppercase;
    }
</style>

<script>
    export default {
        data() {
            return {
                category: {},
                product: {},
                selected: '',
                categories: {},
            }
        },
        methods: {
            changeRoute: function(id){
                this.$router.push({path:'/produits/' + id.target.value})
            },
            getCategories: function(){
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
        props: ["id", "name"]
    }
</script>
