<template>
    <div class="container-fluid">
        <div class="row main_wrapper">
            <div class="col-lg-2 recap" style="min-height: 100vh;">
                <order-summary></order-summary>
            </div>
            <div class="col-lg-8 middlecolumn">
                <div class="col-lg-12 main-products">
                    <div class="col-lg-3" id="homeListProducts" v-for="category in categories" v-if="category.type === 1">
                        <div class="content">
                            <div class="test-container">
                                <div class="deuxB">
                                    <div class="deuxBUn">
                                        <figure class="imghvr-shutter-out-diag-2"><img
                                                :src="'./images/fabrics-img/sweat-fabrics.png'" alt="example-image">
                                            <figcaption>
                                                <h3 class="home-categories"><span>{{category.name}}</span></h3>
                                            </figcaption>
                                            <router-link :to="{path: '/hkjhk'}"></router-link>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <howitworks></howitworks>
            <!--<div class="col-lg-8" id="homeListProducts">
                <div class="content">
                    <div class="test-container">
                        <div class="un">
                            <figure class="imghvr-shutter-out-diag-2">
                                <img :src="'./images/fabrics-img/tee-shirt-fabrics.jpg'" alt="example-image">
                                <figcaption>
                                    <h3 class="home-categories"><span>Tee-shirts</span></h3>
                                </figcaption>
                                <router-link :to="{path: '/hkjhk'}"></router-link>
                            </figure>
                        </div>
                        <div class="deux">
                            <div class="deuxA">
                                <div class="deuxAUn">
                                    <figure class="imghvr-shutter-out-diag-2"><img
                                            :src="'./images/fabrics-img/tasse-fabrics.jpg'" alt="example-image">
                                        <figcaption>
                                            <h3 class="home-categories"><span>Tasses</span></h3>
                                        </figcaption>
                                        <router-link :to="{path: '/hkjhk'}"></router-link>
                                    </figure>
                                </div>
                                <div class="deuxADeux">
                                    <figure class="imghvr-shutter-out-diag-2"><img
                                            :src="'./images/fabrics-img/bonnet-fabrics.png'" alt="example-image">
                                        <figcaption>
                                            <h3 class="home-categories"><span>Bonnets</span></h3>
                                        </figcaption>
                                        <router-link :to="{path: '/hkjhk'}"></router-link>
                                    </figure>
                                </div>
                            </div>
                            <div class="deuxB">
                                <div class="deuxBUn">
                                    <figure class="imghvr-shutter-out-diag-2"><img
                                            :src="'./images/fabrics-img/sweat-fabrics.png'" alt="example-image">
                                        <figcaption>
                                            <h3 class="home-categories"><span>Sweats</span></h3>
                                        </figcaption>
                                        <router-link :to="{path: '/hkjhk'}"></router-link>
                                    </figure>
                                </div>
                                <div class="deuxBDeux">
                                    <figure class="imghvr-shutter-out-diag-2"><img
                                            :src="'./images/fabrics-img/polo-fabrics.png'" alt="example-image">
                                        <figcaption>
                                            <h3 class="home-categories"><span>Polos</span></h3>
                                        </figcaption>
                                        <router-link :to="{path: '/hkjhk'}"></router-link>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="trois">
                            <figure class="imghvr-shutter-out-diag-2"><img
                                    :src="'./images/fabrics-img/autre-fabrics.png'" alt="example-image">
                                <figcaption>
                                    <h3 class="home-categories"><span>Autres</span></h3>
                                </figcaption>
                                <router-link :to="{path: '/hkjhk'}"></router-link>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>-->
            <clients></clients>
            <printmethods></printmethods>
            <engagements></engagements>
        </div>
    </div>
</template>

<style scoped>
    .welcomeon{
        text-align: center;
        font-size: 50px;
    }

    div#homeListProducts:nth-child(n+5){
        padding-top:30px;
    }

    .middlecolumn{
        text-transform: uppercase;
    }

    .main-products{
        padding-left: 0;
        padding-right: 0;
    }

    .home-categories {
        height: 100%;
        align-items: center;
        display: inline-flex;
        margin: 0;
    }

    .test-container {
        display: flex;
        flex-direction: row;
        text-align: center;
        /*min-height: 332px;*/
    }

    .un, .deux, .trois {
        flex: 1
    }

    .un + .deux, .deux + .trois, .deuxA + .deuxB {
        margin-left: 15px;
    }


    .deuxAUn + .deuxADeux, .deuxBUn + .deuxBDeux {
        margin-top: 15px;
    }

    .deux {
        display: flex;
        flex-direction: row;
    }

    .deuxA {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .deuxAUn, .deuxADeux {
        flex: 1;
    }


    .deuxB {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .deuxBUn, .deuxBDeux {
        flex: 1;
    }

    h3 {
        text-align: center;
    }

    .content {
        background: transparent;
        box-shadow: 0px 0 20px -6px #a0a0a0;
    }
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
                categories: {}
            }
        },
        created(){
            axios.get('http://localhost/fabricsevent/public/api/categories/')
                .then((response) => this.categories = response.data)
                .catch((error) => console.log(error));
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
