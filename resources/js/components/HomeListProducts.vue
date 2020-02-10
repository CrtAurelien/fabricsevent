<template>
    <div class="container-fluid homeListProduct">
        <div class="row main_wrapper">
            <div class="col-lg-2 recap">
                <order-summary></order-summary>
            </div>

            <div class="col-lg-8 middlecolumn">
                <h3 class="productslist">Nos produits phares</h3>
                <div class="col-lg-12 main-products">
                    <div class="col-lg-4">
                        <figure class="imghvr-shutter-out-diag-2 shadowBox">
                            <img :src="'./images/fabrics-img/tee-shirt-fabrics.jpg'" alt="example-image">
                            <figcaption>
                                <h3 class="home-categories">{{firstCateg.name}}</h3>
                            </figcaption>
                            <router-link :to="{path: '/hkjhk'}"></router-link>
                        </figure>
                    </div>

                    <div class="col-lg-4 flex-product-list">
                        <div class="container-flex-product">
                            <div class="flex-product" v-for="category in lCategoriesOne">
                                <figure class="imghvr-shutter-out-diag-2 shadowBox"><img
                                        :src="'./images/fabrics-img/autre-fabrics.png'" alt="example-image">
                                    <figcaption>
                                        <h3 class="home-categories">{{category.name}}</h3>
                                    </figcaption>
                                    <router-link :to="{path: '/hkjhk'}"></router-link>
                                </figure>
                            </div>
                        </div>
                        <div class="container-flex-product">
                            <div class="flex-product" v-for="category in lCategoriesTwo">
                                <figure class="imghvr-shutter-out-diag-2 shadowBox"><img
                                        :src="'./images/fabrics-img/autre-fabrics.png'" alt="example-image">
                                    <figcaption>
                                        <h3 class="home-categories">{{category.name}}</h3>
                                    </figcaption>
                                    <router-link :to="{path: '/hkjhk'}"></router-link>
                                </figure>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <figure class="imghvr-shutter-out-diag-2 shadowBox">
                            <img :src="'./images/fabrics-img/tee-shirt-fabrics.jpg'" alt="example-image">
                            <figcaption>
                                <h3 class="home-categories">{{lastCateg.name}}</h3>
                            </figcaption>
                            <router-link :to="{path: '/hkjhk'}"></router-link>
                        </figure>
                    </div>


                </div>
                <printmethods></printmethods>
            </div>
            <engagements></engagements>
            <div class="col-lg-12 devis">
                <h3 style="letter-spacing: 5px; font-size: 42px;">Vous avez un projet ?</h3>
                <h4 style="text-align: center">Dites-nous tout, votre devis est gratuit ♥</h4>
                <h4 class="ourclients">Faites comme eux</h4>
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="ribbon-front">
                        Ils nous font confiance
                    </div>
                    <div class="ribbon-edge-topleft"></div>
                    <clients></clients>
                </div>
                <div class="col-lg-12 askdevis">
                    <button class="btn btn-devis waves">DEMANDER UN DEVIS GRATUIT</button>
                </div>
            </div>
            <howitworks></howitworks>
        </div>
    </div>
</template>

<style scoped>

</style>

<script>
    import HowItWorks from "./HowItWorks";
    import PrintMethod from "./PrintMethod";
    import Engagements from "./Engagements";
    import OrderSummary from "./OrderSummary";
    import Clients from "./Clients";

    export default {
        data() {
            return {
                categories: {},
                lCategoriesOne : [],
                lCategoriesTwo : [],
                firstCateg: {},
                lastCateg: {}
            }
        },
        methods:  {
            getCategoriesPhares : function (categ) {
                for(let i = 0; i<categ.length; i++) {
                    if(categ[i].type !== 1) {
                        categ.splice(i, 1);
                    }
                }
                this.spliceCateg(this.categories)
            },
            spliceCateg: function(categ) {
                this.firstCateg = categ[0];
                categ.splice(0, 1);
                let length = categ.length - 1;
                this.lastCateg = categ[length];
                categ.splice(length, 1);

                for(let i =0; i < categ.length; i++) {
                    if(i === 0 || i === 1) {
                        this.lCategoriesOne.push(categ[i]);
                    } else {
                        this.lCategoriesTwo.push(categ[i]);
                    }
                }

            }
        },
        beforeCreate(){
            axios.get('http://localhost/fabricsevent/public/api/categories/')
                .then((response) => this.categories = response.data)
                .catch((error) => console.log(error))
                .finally(() =>
                    this.getCategoriesPhares(this.categories)
                )

        },
        components: {
            Clients,
            OrderSummary,
            howitworks: HowItWorks,
            printmethods: PrintMethod,
            engagements: Engagements,
        }

    }
</script>
