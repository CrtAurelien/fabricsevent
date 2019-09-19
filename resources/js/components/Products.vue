<template>
    <div class="container-fluid">
        <div class="row main_wrapper">
            <select class="col-lg-4 col-lg-offset-4 products" v-model="selected">
                <option disabled value="">Vous êtes dans la catégorie : {{this.category.name}}</option>
                <option v-for="category in categories" v-on:change="changeRoute">{{category.name}}</option>
            </select>

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
    .products{
        text-align: center;
        background: #ceca7d;
        padding: 7px;
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom:25px;
    }

    .listproducts{
        display:flex;
    }

    .productimg{
        height: 100%;
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
                categories: {}
            }
        },
        methods: {
            changeRoute: function(){
              this.$route.push({path:'/' + this.id})
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
