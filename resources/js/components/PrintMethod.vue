<template>
    <div class="col-lg-12">
        <hr>
        <h3 class="printmethods">Méthodes d'impression</h3>
        <div class="card-container col-lg-4">
            <div class="square-flip">
                <div class='square2' data-image="https://www.toptal.com/designers/subtlepatterns/patterns/green_dust_scratch.png">
                    <div class="square-container2">
                        <div class="align-center"><img src="http://titanicthemes.com/files/flipbox/kallyas2.png" class="boxshadow" alt=""></div>
                        <p class="textshadow">Motif imprimé sur une feuille, découpé puis pressé à chaud sur le textile.
                            Idéal pour de petites quantités.</p>
                    </div>
                </div>
                <div class='square' style="background-color:#285a53">
                    <div class="square-container">
                        <div class="align-center"></div>
                        <h2>FLOCAGE</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-container col-lg-4">
            <div class="square-flip">
                <div class='square2' data-image="https://www.toptal.com/designers/subtlepatterns/patterns/green_dust_scratch.png">
                    <div class="square-container2">
                        <div class="align-center"><img src="http://titanicthemes.com/files/flipbox/kallyas2.png" class="boxshadow" alt=""></div>
                        <p class="textshadow">Motif imprimé sur une feuille, découpé puis pressé à chaud sur le textile.
                            Couleurs plus resplendissantes, colle appliquée sur le rebord de l’impression.
                            Idéal pour une quantité moyenne.</p>
                    </div>
                </div>
                <div class='square' style="background-color:#285a53">
                    <div class="square-container">
                        <div class="align-center"></div>
                        <h2>FLEX</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-container col-lg-4">
            <div class="square-flip">
                <div class='square2' data-image="https://www.toptal.com/designers/subtlepatterns/patterns/green_dust_scratch.png">
                    <div class="square-container2">
                        <div class="align-center"><img src="http://titanicthemes.com/files/flipbox/kallyas2.png" class="boxshadow" alt=""></div>
                        <p class="textshadow">Motif imprimé à l’aide de cadres et pochoirs. L’encre passe à travers le pochoir et se
                            dépose sur le textile ensuite.
                            Les couleurs sont moins resplendissantes qu’une impression numérique mais tiennent
                            très bien avec le temps. Ce procédé reste d’excellente qualité.</p>
                    </div>
                </div>
                <div class='square' style="background-color:#285a53">
                    <div class="square-container">
                        <div class="align-center"></div>
                        <h2>SERIGRAPHIE</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-container col-lg-6">
            <div class="square-flip">
                <div class='square2' data-image="https://www.toptal.com/designers/subtlepatterns/patterns/green_dust_scratch.png">
                    <div class="square-container2">
                        <div class="align-center"><img src="http://titanicthemes.com/files/flipbox/kallyas2.png" class="boxshadow" alt=""></div>
                        <p class="textshadow">Motif réalisé à l’aiguille ou à la machine, et ce directement sur le support concerné. Haute qualité.</p>
                    </div>
                </div>
                <div class='square' style="background-color:#285a53">
                    <div class="square-container">
                        <div class="align-center"></div>
                        <h2>BRODERIE</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-container col-lg-6">
            <div class="square-flip">
                <div class='square2' data-image="https://www.toptal.com/designers/subtlepatterns/patterns/green_dust_scratch.png">
                    <div class="square-container2">
                        <div class="align-center"><img src="http://titanicthemes.com/files/flipbox/kallyas2.png" class="boxshadow" alt=""></div>
                        <p class="textshadow">Motif imprimé directement sur le textile avec l’aide d’imprimantes.
                            Malgré un système de personnalisation de haute qualité et un résultat optimal, les
                            couleurs durent moins dans le temps à la différence de la sérigraphie.</p>
                    </div>
                </div>
                <div class='square' style="background-color:#285a53">
                    <div class="square-container">
                        <div class="align-center"></div>
                        <h2>IMPRESSION NUMÉRIQUE</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>


<style>

    .square-flip{
        -webkit-perspective: 1000;
        -moz-perspective: 1000;
        -ms-perspective: 1000;
        perspective: 1000;

        -webkit-transform: perspective(1000px);
        -moz-transform: perspective(1000px);
        -ms-transform: perspective(1000px);
        transform: perspective(1000px);

        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transform-style: preserve-3d;

        /*border:1px solid #efefef;*/


    }
    .square-flip{
        width:100%;
        height:100%;
    }
    .square,.square2{
        width:100%;
        height:100%;
    }
    .square{

        background-size: cover;
        background-position:center center;

        -ms-transition: transform 0.60s cubic-bezier(.5,.3,.3,1);
        transition: transform 0.60s cubic-bezier(.5,.3,.3,1);
        -webkit-transition: transform 0.60s cubic-bezier(.5,.3,.3,1);
        overflow: hidden;

        position:absolute;
        top:0;


        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }
    .square-flip .square{
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        -o-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        transform: rotateY(0deg);
        transform-style: preserve-3d;
        z-index:1;
    }
    .square-flip:hover .square{
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
        transform-style: preserve-3d;
    }


    .square2{

        background-size: cover;
        background-position:center center;

        -ms-transition: transform 0.60s cubic-bezier(.5,.3,.3,1);
        transition: transform 0.60s cubic-bezier(.5,.3,.3,1);
        -webkit-transition: transform 0.60s cubic-bezier(.5,.3,.3,1);
        overflow: hidden;

        position:absolute;
        top:0;

        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }
    .square-flip .square2{
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
        -ms-transform: rotateY(180deg);
        transform: rotateY(180deg);
        transform-style: preserve-3d;
        z-index:1;
    }
    .square-flip:hover .square2{
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        -o-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        transform: rotateY(0deg);
        transform-style: preserve-3d;
    }

    /*Square content*/
    .square-container{
        padding:40px;
        text-align:center;
        position:relative;
        color: #f4faf9;
        top:50%;

        -ms-transition: transform 0.60s cubic-bezier(.5,.3,.3,1);
        transition: transform 0.60s cubic-bezier(.5,.3,.3,1);
        -webkit-transition: transform 0.60s cubic-bezier(.5,.3,.3,1);


        -webkit-transform: translateY(-50%) translateX(0px)  scale(1);
        -ms-transform: translateY(-50%) translateX(0px)  scale(1);
        transform: translateY(-50%) translateX(0px)  scale(1);
        transform-style: preserve-3d;
        z-index:2;
    }
    .square-flip:hover .square-container{

        -webkit-transform: translateY(-50%) translateX(-650px)  scale(.88);
        -ms-transform: translateY(-50%) translateX(-650px)  scale(.88);
        transform: translateY(-50%) translateX(-650px)  scale(.88);
        transform-style: preserve-3d;

    }

    .square-container2{
        padding:40px;
        text-align:center;
        color: #285a53;
        position:relative;
        top:50%;

        -ms-transition: transform 0.60s cubic-bezier(.5,.3,.3,1);
        transition: transform 0.60s cubic-bezier(.5,.3,.3,1);
        -webkit-transition: transform 0.60s cubic-bezier(.5,.3,.3,1);


        -webkit-transform: translateY(-50%) translateX(650px) translateZ(60px) scale(.88);
        -ms-transform: translateY(-50%) translateX(650px) translateZ(60px) scale(.88);
        transform: translateY(-50%) translateX(650px) translateZ(60px) scale(.88);

        transform-style: preserve-3d;
        z-index:2;
    }
    .square-flip:hover .square-container2{

        -webkit-transform: translateY(-50%) translateX(0px) translateZ(0px) scale(1);
        -ms-transform: translateY(-50%) translateX(0px) translateZ(0px) scale(1);
        transform: translateY(-50%) translateX(0px) translateZ(0px) scale(1);
        transform-style: preserve-3d;
    }



    /*Style text*/

    /*Elements*/
    .flip-overlay{
        display:block;
        background:rgba(0,0,0,0.5);
        width:100%;
        height:100%;
        position:absolute;
        top:0;
    }
    .align-center{
        margin:0 auto;
    }
    .kallyas-button{
        display:block;
        width:160px;
        padding:18px 30px;
        font-family:"Open Sans";
        font-weight:600;
        color:#fff;
        background:#FF2024;
        margin:0 auto;
        border-radius:2px;
        text-decoration:none;

        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffa067+0,ff2959+49,ff2024+100 */
        background: #ffa067; /* Old browsers */
        background: -moz-linear-gradient(-45deg,  #ffa067 0%, #ff2959 49%, #ff2024 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(-45deg,  #ffa067 0%,#ff2959 49%,#ff2024 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(135deg,  #ffa067 0%,#ff2959 49%,#ff2024 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffa067', endColorstr='#ff2024',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
    }


    /*ADD SHADOWS OPTIONAL*/
    .square-flip .square .boxshadow, .square-flip .square .textshadow, .square-flip .square2 .boxshadow, .square-flip .square2 .textshadow{
        -ms-transition: 0.60s;
        transition: 0.60s;
        -webkit-transition: 0.60s;
    }

    .square-flip .square .boxshadow{
        -webkit-box-shadow: 24px 42px 58px -8px rgba(0,0,0,0.3);
        -moz-box-shadow: 24px 42px 58px -8px rgba(0,0,0,0.3);
        box-shadow: 24px 42px 58px -8px rgba(0,0,0,0.3);
    }
    .square-flip .square .textshadow{
        -webkit-text-shadow: 24px 42px 58px -8px rgba(0,0,0,0.3);
        -moz-text-shadow: 24px 42px 58px -8px rgba(0,0,0,0.3);
        text-shadow: 24px 42px 58px -8px rgba(0,0,0,0.3);
    }
    .square-flip:hover .square .boxshadow, .square-flip:hover .square .textshadow{
        -webkit-box-shadow: 240px 42px 58px -8px rgba(0,0,0,0.0);
        -moz-box-shadow: 240px 42px 58px -8px rgba(0,0,0,0.0);
        box-shadow: 240px 42px 58px -8px rgba(0,0,0,0.0);
    }





    /*You can delete this style*/
    .centerflipcards{
        display:block;
        width:1330px;
        height:440px;
        text-align:center;
        margin:0 auto;
        margin-top:25px;
    }
    .clearfix{clear:both;}
    .centerflipcards p{
        font-family:"Open Sans";
        font-size:13px;
        margin-top:10px;
        font-weight:700;
    }




    .title {
        position: absolute;
        bottom: 100px;
        text-align: center;
        width: 100%;
        font-weight: 100;
    }

    .card-container {
        height: 150px;
        perspective: 1000px;
        margin: 15px 0;
    }

    .card {
        position: relative;
        width: 100%;
        height: 100%;
        transition: 1s ease-in-out;
        transform-style: preserve-3d;
        border-radius: 5px;
        box-shadow: 0px 0px 50px #000;
    }

    .card-faces {
        position: absolute;
        height: 100%;
        width: 100%;
        border-radius: 1px;
        backface-visibility: hidden;
    }

    /*  FRONT STYLES */
    /* alternative background "http://www.desktopimages.org/pictures/2014/0303/1/small-black-hexagon-pattern-wallpaper-60021.jpg" */
    .front {
        background-color: #000;
        background-image: url("https://i.pinimg.com/originals/db/59/4b/db594b739eb9f298a7c9dfeb64eb4e16.jpg");
        background-size: cover;
        background-position: 250px 150px;
        background-repeat: no-repeat;
        box-shadow: inset 0px 200px 350px #000;
    }


    .jedi-icon {
        color: #00ADEF;
        font-size: 150%;
    }

    .front-title {
        position: absolute;
        top: 32%;
        left: 25%;
        text-align: center;
        color: #3A3A3C;
        font-size: 188%;
        letter-spacing: 2px;
        font-family: 'Open Sans', sans-serif;
        border-left: 2px solid #3A3A3C;
        padding-left: 1.75%;
        line-height: 340%;
        align-self: flex-end;
        text-transform: uppercase;
        backface-visibility: hidden;
        font-weight: 800;
    }

    .front-sub-title {
        color: #00ADEF;
        align-self: flex-start;
        position: absolute;
        bottom: 40%;
        left: 30.5%;
        font-family: 'Open Sans', sans-serif;
        letter-spacing: 3px;
        backface-visibility: hidden;
        text-transform: uppercase;
        font-weight: 600;
    }


    /*  BACK STYLES */
    .back {
        background-color: #000;
        background-image: url("https://i.pinimg.com/originals/db/59/4b/db594b739eb9f298a7c9dfeb64eb4e16.jpg");
        background-size: cover;
        background-position: -250px 150px;
        background-repeat: no-repeat;
        box-shadow: inset 0px 200px 350px #000;
        transform: rotateY(180deg);
    }

    .logo-back {
        margin-right: 10px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border-top: 3px solid #3A3A3C;
        border-left: 3px solid #3A3A3C;
        border-right: 3px solid #00ADEF;
        border-bottom: 3px solid #3A3A3C;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 20px;
        left: 20px;
        backface-visibility: hidden;
        transform: scale(.75);
    }

    .jedi-icon-back {
        color: #00ADEF;
        font-size: 24px;
    }

    .back-title {
        position: absolute;
        top: 8px;
        left: 40px;
        text-align: center;
        color: #3A3A3C;
        font-size: 30px;
        letter-spacing: 2px;
        font-family: 'Open Sans', sans-serif;
        border-left: 2px solid #3A3A3C;
        padding-left: 10px;
        line-height: 80px;
        align-self: flex-end;
        text-transform: uppercase;
        backface-visibility: hidden;
        transform: scale(.75);
        font-weight: 700;
    }

    .back-sub-title {
        color: #00ADEF;
        align-self: flex-start;
        position: absolute;
        top: 54px;
        left: 62px;
        letter-spacing: 3px;
        backface-visibility: hidden;
        transform: scale(.75);
        text-transform: uppercase;
        font-weight: 600;
    }

    .back-name {
        position: absolute;
        right: 5%;
        top: 35%;
        color: #fff;
        font-weight: 300;
        text-transform: uppercase;
    }

    .wizard {
        color: #00ADEF;
    }

    .back-sub-name {
        position: absolute;
        right: 5%;
        top: 43%;
        color: #fff;
        font-weight: 300;
    }

    .back-list {
        list-style: none;
        position: absolute;
        right: 5%;
        top: 55%;
    }

    .back-list-item {
        color: #fff;
        font-size: 70%;
    }

    .list-icon {
        color: #00ADEF;
        padding: 4px 5px 4px 0px;
    }

    .blue-bar {
        position: absolute;
        top: 13%;
        right: 0;
        width: 10px;
        height: 220px;
        background: #00ADEF;
    }


    .card.is-flipped {
        transform: rotateY(180deg);
    }

    h3.printmethods:before {
        content: '';
        height: 15px;
        margin-right: 15px;
        width: 15px;
        background: #4ba593;
        display: block;
        z-index: -1;
        float: left;
        box-shadow: 8px 8px #285952;
    }

    .printmethods {
        display: inline-block;
        width:100%;
        letter-spacing: 0;
        text-align: left;
        color: #285a53;
        padding-bottom: 10px;
    }

    .card .header h2 {
        font-size: 25px;
        text-transform: uppercase;
        text-align: center;
        letter-spacing: 15px;
    }


    .printmethods-title {
        text-align: center;
    }

    .printmethod {
        min-height: 150px;
    }

    .separatewelcome {
        width: 530px;
    }

    h3 {
        text-align: center;
        letter-spacing: 15px;
    }


    .printmethods {
        display: inline-block;
    }

    .printmethods-title {
        text-align: center;
    }

    .printmethod {
        min-height: 150px;
    }

    .separatewelcome {
        width: 530px;
    }

    h3 {
        text-align: center;
    }

    .printMethods {
        background: white;
    }
</style>

<script>
    import {mdbStepper} from 'mdbvue';

    export default {
        components: {
            mdbStepper,
        },
        data() {
            return {
                steps: [
                    {
                        content:
                            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse cupiditate voluptate facere iusto quaerat vitae excepturi, accusantium ut aliquam repellat atque nesciunt nostrum similique. Inventore nostrum ut, nobis porro sapiente."
                    },
                    {
                        content:
                            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse cupiditate voluptate facere iusto quaerat vitae excepturi, accusantium ut aliquam repellat atque nesciunt nostrum similique. Inventore nostrum ut, nobis porro sapiente."
                    },
                    {
                        content:
                            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse cupiditate voluptate facere iusto quaerat vitae excepturi, accusantium ut aliquam repellat atque nesciunt nostrum similique. Inventore nostrum ut, nobis porro sapiente."
                    }
                ],
            };
        }
    };
</script>
