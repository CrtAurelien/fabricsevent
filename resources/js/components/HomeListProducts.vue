<template>
    <div class="container-fluid">
        <div class="row main_wrapper">
            <div class="col-lg-2 recap">
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
                <div class="col-lg-6 col-lg-offset-3 askdevis">
                    <button class="btn btn-devis waves">DEMANDER UN DEVIS GRATUIT</button>
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
        </div>
    </div>
</template>

<style scoped>

    .ribbon-wrapper {
        position: relative;z-index:998;
    }
    .ribbon-front {
        background: #4aa492;
        height: 50px;
        width: 30%;
        position: relative;
        top:130px;
        left: -10px;
        z-index: 2;
        font: 20px/50px bold Verdana, Geneva, sans-serif;
        color: #f8f8f8;
        text-align: center;
        border: 1px solid #237e72;
    }

    .ribbon-front,
    .ribbon-back-left,
    .ribbon-back-right
    {
        -moz-box-shadow: 0px 0px 4px rgba(0,0,0,0.55);
        -khtml-box-shadow: 0px 0px 4px rgba(0,0,0,0.55);
        -webkit-box-shadow: 1px -1px 3px 0px rgb(40, 90, 83);
        -o-box-shadow: 0px 0px 4px rgba(0,0,0,0.55);
    }

    .ribbon-edge-topleft,
    .ribbon-edge-topright,
    .ribbon-edge-bottomleft,
    .ribbon-edge-bottomright {
        position: absolute;
        z-index: 1;
        border-style:solid;
        height:0px;
        width:0px;
    }

    .ribbon-edge-topleft,
    .ribbon-edge-topright {
    }

    .ribbon-edge-bottomleft,
    .ribbon-edge-bottomright {
        top: 50px;
    }

    .ribbon-edge-topleft,
    .ribbon-edge-bottomleft {
        left: 5px;
        border-color: transparent #285a53 transparent transparent;
    }

    .ribbon-edge-topleft {
        top: 125px;
        border-width: 5px 10px 0 0;
    }
    .ribbon-edge-bottomleft {
        border-width: 0 10px 0px 0;
    }

    .ribbon-edge-topright,
    .ribbon-edge-bottomright {
        right: -10px;
        top: 180px;
        border-color: transparent transparent transparent #4aa492;
    }

    .ribbon-edge-topright {
        top: 0px;
        border-width: 0px 0 0 10px;
    }
    .ribbon-edge-bottomright {
        border-width: 0 0 5px 10px;
    }


    @-webkit-keyframes flow {
        0% { left:-20px;opacity: 0;}
        50% {left:100px;opacity: 0.3;}
        100%{ left:180px;opacity: 0;}
    }
    @keyframes flow {
        0% { left:-20px;opacity: 0;}
        50% {left:100px;opacity: 0.3;}
        100%{ left:180px;opacity: 0;}
    }

    .glow{ background: rgb(255,255,255); width:40px; height:100%; z-index:999; position:absolute;-webkit-animation: flow 1.5s linear infinite;-moz-animation: flow 1.5s linear infinite;-webkit-transform: skew(20deg);
        -moz-transform: skew(20deg);
        -o-transform: skew(20deg);background: -moz-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 1%, rgba(255,255,255,1) 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(255,255,255,0)), color-stop(1%,rgba(255,255,255,0)), color-stop(100%,rgba(255,255,255,1))); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%,rgba(255,255,255,0) 1%,rgba(255,255,255,1) 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(left, rgba(255,255,255,0) 0%,rgba(255,255,255,0) 1%,rgba(255,255,255,1) 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(left, rgba(255,255,255,0) 0%,rgba(255,255,255,0) 1%,rgba(255,255,255,1) 100%); /* IE10+ */
        background: linear-gradient(to right, rgba(255,255,255,0) 0%,rgba(255,255,255,0) 1%,rgba(255,255,255,1) 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 */ border-left:1px solid #fff;}


    .ourclients{
        text-align: center;
        font-size: 18px;
    }

    .separate{
        margin-top: 40px;
        margin-bottom: 0px;
        width: 60px;
        border: 0;
        border-top: 1px solid #285a53;
    }

    .askdevis{
        text-align:center;
        margin-top: 65px;
    }

    .devis[data-v-9f1a96e8] {
        padding: 80px 80px 40px 80px;
    }

    .btn-devis{
        width: 280px !important;
        border-radius: 0;
        border: 2px solid #333;
        box-shadow: none !important;
        color: #333;
        font-size: 17px !important;
        font-weight: 600;
        transition: 0.3s;

    }

    button.btn.btn-devis:hover {
        color: #f4faf9;
        border: 2px solid #333333;
        background: #333333;
        transition: 0.3s;
    }



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
