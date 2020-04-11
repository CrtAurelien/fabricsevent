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
                                <h3 class="home-categories">Sweat</h3>
                            </figcaption>
                            <router-link :to="{path: '/sweats'}"></router-link>
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
                                    <router-link :to="{path: '/' + category.name}"></router-link>
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
                                    <router-link :to="{path: '/' + category.name}"></router-link>
                                </figure>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <figure class="imghvr-shutter-out-diag-2 shadowBox">
                            <img :src="'./images/fabrics-img/tee-shirt-fabrics.jpg'" alt="example-image">
                            <figcaption>
                                <h3 class="home-categories">Autres</h3>
                            </figcaption>
                            <router-link :to="{path: '/autres'}"></router-link>
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
                lCategoriesOne : [
                    {
                        type: 1,
                        name: 'Casquettes',
                        color: '#EDA2C1'
                    },
                    {
                    type: 1,
                    name: 'Bonnets',
                    color: '#F6A54C'
                }],
                lCategoriesTwo : [
                    {
                        type: 1,
                        name: 'Tote bag',
                        color: '#EDA2C1'
                    },
                    {
                        type: 1,
                        name: 'Polos',
                        color: '#F6A54C'
                    }
                ],
            }
        },
        methods:  {

        },
        beforeCreate(){


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

