<template>
    <div class="container-fluid">
        <div class="row main_wrapper">
            <div class="col-lg-8 col-lg-offset-2" id="homeListProducts">
                <div class="content">
                    <div class="test-container">
                        <div class="un">
                            <figure class="imghvr-shutter-out-diag-2">
                                <img :src="'./images/fabrics-img/tee-shirt-fabrics.jpg'" alt="example-image">
                                <figcaption>
                                    <h3>Hello World</h3>
                                </figcaption>
                                <a href="javascript:;"></a>
                            </figure>
                        </div>
                        <div class="deux">
                            <div class="deuxA">
                                <div class="deuxAUn">
                                    <figure class="imghvr-shutter-out-diag-2"><img
                                            :src="'./images/fabrics-img/tasse-fabrics.jpg'" alt="example-image">
                                        <figcaption>
                                            <h3>Hello World</h3>
                                        </figcaption>
                                        <a href="javascript:;"></a>
                                    </figure>
                                </div>
                                <div class="deuxADeux">
                                    <figure class="imghvr-shutter-out-diag-2"><img
                                            :src="'./images/fabrics-img/bonnet-fabrics.png'" alt="example-image">
                                        <figcaption>
                                            <h3>Hello World</h3>
                                        </figcaption>
                                        <a href="javascript:;"></a>
                                    </figure>
                                </div>
                            </div>
                            <div class="deuxB">
                                <div class="deuxBUn">
                                    <figure class="imghvr-shutter-out-diag-2"><img
                                            :src="'./images/fabrics-img/sweat-fabrics.png'" alt="example-image">
                                        <figcaption>
                                            <h3>Hello World</h3>
                                        </figcaption>
                                        <a href="javascript:;"></a>
                                    </figure>
                                </div>
                                <div class="deuxBDeux">
                                    <figure class="imghvr-shutter-out-diag-2"><img
                                            :src="'./images/fabrics-img/polo-fabrics.png'" alt="example-image">
                                        <figcaption>
                                            <h3>Hello World</h3>
                                        </figcaption>
                                        <a href="javascript:;"></a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="trois">
                            <figure class="imghvr-shutter-out-diag-2"><img
                                    :src="'./images/fabrics-img/autre-fabrics.png'" alt="example-image">
                                <figcaption>
                                    <h3>Autres</h3>
                                </figcaption>
                                <a href="javascript:;"></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <howitworks></howitworks>
        </div>
    </div>
</template>

<style scoped>

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
    }
</style>

<script>
    import HowItWorks from "./HowItWorks";

    export default {
        components:{
          howitworks: HowItWorks,
        }
    }
</script>
