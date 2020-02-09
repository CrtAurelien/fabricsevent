<template>
    <div class="howItWorks col-lg-2">
        <b-button class="howitworksbtn" :aria-expanded="showCollapse ? 'true' : 'false'" v-b-toggle.collapse-a.collapse-b>
            <img :src="'./images/question.png'" @click="nopulse" alt="" class="question" :class="{pulsed: !isClicked}">
            <span class="howitworkstitle">Comment ça marche ?</span>

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

    .howitworksbtn.collapsed{
        box-shadow:none !important;
        border: 2px solid #4ba593;
        background: white;
    }

    .howitworksbtn{
        background: white !important;
        box-shadow:none !important;
        border-left: 2px solid #4ba593;
        border-right: 2px solid #4ba593;
        border-top: 2px solid #4ba593;
        border-bottom: 0;
    }

    @keyframes pulse {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.7);
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
        }

        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
        }
    }

    .pulsed{
        transform: scale(1);
        border-radius: 50%;
        animation: pulse 3s infinite;
    }

    .howitworksbtn{
        padding: 25px 0 8px 0px;
        border-radius: 0;
    }

    span.howitworkstitle {
        font-size: 19px;
        text-transform: uppercase;
        font-weight: 600;
        color:#285a53;
    }

    .step {
        border-radius: 0;
        padding: 15px;
        margin: 0;
        border-left: 2px solid #4ba593;
        border-right: 2px solid #4ba593;
    }

    .last-step{
        background: #4BA593;
        color:white;
        font-weight:bold;
    }

    .card{
        border-radius:0;
        box-shadow:none;
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
        letter-spacing: 0;
        text-align: center;
        margin: 0;
        background: transparent;
    }

    .howItWorks {
        position: absolute;
        margin-top:25px;
        float: right;
        height: 0;
        right: 0;
        right: 0;
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
                isClicked: false
            };
        },
        methods: {
            nopulse: function(){
                console.log(this.isClicked);
                if (this.isClicked !== true) {
                    this.isClicked = !this.isClicked
                }
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
