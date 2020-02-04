<template>
    <div class="howItWorks col-lg-2">
        <img :src="'./images/question.png'" alt="" class="question">
        <b-button class="howitworksbtn" :aria-expanded="showCollapse ? 'true' : 'false'" v-b-toggle.collapse-a.collapse-b>
            <h3 class="howitworks-title">Comment ça marche ?</h3>
        </b-button>

        <!-- Elements to collapse -->
        <b-collapse id="collapse-a" v-model="showCollapse" class="mt-2">
            <b-card class="step">
                <div class="number" id="1">
                    <span>1</span>
                </div>
                <div class="explication">
                    Sélectionnez le ou les produits que vous désirez.
                </div>
            </b-card>
        </b-collapse>
        <b-collapse id="collapse-a" v-model="showCollapse" class="mt-2">
            <b-card class="step">
                <div class="number" id="2">
                    <span>2</span>
                </div>
                <div class="explication">Sélectionnez ensuite la ou les couleurs souhaitées.</div>
            </b-card>
        </b-collapse>
        <b-collapse id="collapse-a" v-model="showCollapse" class="mt-2">
            <b-card class="step">
                <div class="number" id="3">
                    <span>3</span>
                </div>
                <div class="explication">Le récapitulatif de votre devis s'affichera, et vous pourrez éditer la quantité voulue du produit.</div>
            </b-card>
        </b-collapse>
        <b-collapse id="collapse-a" v-model="showCollapse" class="mt-2">
            <b-card class="step">
                <div class="number" id="4">
                    <span>4</span>
                </div>
                <div class="explication">Validez votre devis. Vous aurez la possibilité de laisser un message pour accompagner celui-ci.</div>
            </b-card>
        </b-collapse>
        <b-collapse id="collapse-a" v-model="showCollapse" class="mt-2">
            <b-card class="last-step">
                <div class="last-explication">NOTRE CONSEILLER VOUS CONTACTERA APRES VALIDATION</div>
            </b-card>
        </b-collapse>
    </div>
</template>


<style scoped>

    .howitworksbtn{
        padding: 25px 0 8px 0px;
        border-radius: 0;
    }

    .howitworks-title {
        background: white;
        color: black;
        text-transform: uppercase;
        width: 100%;
        border-radius: 0 !important;
        font-weight: bold;
        font-size: 20px !important;
        font-family: "Roboto", sans-serif;
    }

    .step {
        border-radius: 0;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
        padding: 15px;
        margin: 0;
    }

    .last-step{
        background: #4BA593;
        color:white;
        font-weight:bold;
    }

    .card{
        border-radius:0;
    }

    .explication {
        margin-left: 45px;
    }

    .last-explication {
        padding: 15px;
        text-align:center;
    }

    .number[id="1"]{
        background-color: #E5A686;
    }

    .number[id="2"]{
        background-color: #92A4CF;
    }

    .number[id="3"]{
        background-color: #7BD5A2;
    }

    .number[id="4"]{
        background-color: #E1EC7E;
    }

    .number {
        margin-right: 15px;
        float: left;
        border-radius: 50%;
        width: 15px;
        height: 15px;
        padding: 15px;
        display: inline-block;
        position: relative;
    }

    .number > span {
        width: 100%;
        position: absolute;
        left: 0;
        color: white;
        text-align: center;
        top: 6px;
        height: auto;
    }


    *[class^="step"] {
        background: white;
    }

    .howItWorks h3 {
        text-align: center;
        margin: 0;
        background: white;
    }

    .howItWorks {
        position: relative;
        margin-top:25px;
        float: right;
    }

    img.question {
        top: -30px;
        position: absolute;
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
    }
</style>

<script>
    export default {
        data: function () {
            return{
                showCollapse: true,
            }
        },
        created() {
            let url = location.href;
            if (url === 'http://localhost/fabricsevent/public/#/'){
                this.showCollapse = false;
            }
        }
    }
</script>
