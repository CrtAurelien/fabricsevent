<template>
    <div class="clients">
        <div id="exampleSlider">
            <div class="MS-content">
                <div class="item">
                    <!--<<img :src="imageOuestFrance">-->
                    <p><i class="icofont-brand-bmw"></i></p>
                </div>
                <div class="item">
                    <!--<<img :src="imageOuestFrance">-->
                    <p><i class="icon-club_elite_sarthe"></i></p>
                </div>
                <div class="item">
                    <!--<<img :src="imageOuestFrance">-->
                    <p><i class="icon-ouestfrance"></i></p>
                </div>
                <div class="item">
                    <!--<<img :src="imageOuestFrance">-->
                    <p><i class="icofont-brand-mercedes"></i></p>
                </div>
                <div class="item">
                    <!--<<img :src="imageOuestFrance">-->
                    <p><i class="icon-nowadaysrecord"></i></p>
                </div>
                <div class="item">
                    <!--<<img :src="imageOuestFrance">-->
                    <p><i class="icon-4l_trophy"></i></p>
                </div>
                <div class="item">
                    <!--<<img :src="imageOuestFrance">-->
                    <p><i class="icon-sport_2000"></i></p>
                </div>
                <div class="item">
                    <!--<<img :src="imageOuestFrance">-->
                    <p><i class="icofont-brand-volkswagen"></i></p>
                </div>
                <div class="item">
                    <!--<<img :src="imageOuestFrance">-->
                    <p><i class="icon-bleu_citron"></i></p>
                </div>
                <div class="item">
                    <!--<<img :src="imageOuestFrance">-->
                    <p><i class="icon-francebleu_maine"></i></p>
                </div>
                <div class="item">
                    <!--<<img :src="imageOuestFrance">-->
                    <p><i class="icon-superforma"></i></p>
                </div>
                <div class="item">
                    <!--<<img :src="imageOuestFrance">-->
                    <p><i class="icon-club_ambassadeur_sarthe"></i></p>
                </div>
                <div class="item">
                    <!--<<img :src="imageOuestFrance">-->
                    <p><i class="icon-public"></i></p>
                </div>
                <div class="item">
                    <!--<<img :src="imageOuestFrance">-->
                    <p><i class="icon-mouv"></i></p>
                </div>
            </div>
        </div>
    </div>



</template>


<style scoped>


    .clients {
        padding-top: 25px;
    }

    #exampleSlider .MS-content {
        overflow: hidden;
        white-space: nowrap;
    }

    #exampleSlider .MS-content .item {
        display: inline-block;
        height: 100%;
        overflow: hidden;
        position: relative;
        vertical-align: top;
        border-right: none;
        width: auto;
        min-width: 18%;
    }



    #exampleSlider .MS-content .item p {
        font-size: 30px;
        text-align: center;
        line-height: 1;
        vertical-align: middle;
        margin: 0;
        padding: 20px 0;
    }


</style>

<script>
    import multislider from "../../../public/js/multislider.js";
    export default {
        mounted() {
            $('#exampleSlider').multislider({
                interval: 4000,
                continuous: true,
                duration: 6500
            });

        },
        data: function() {
            return {
                imageOuestFrance : "./images/fabrics-img/ouestFrance.png"
            }
        }
    }



</script>
