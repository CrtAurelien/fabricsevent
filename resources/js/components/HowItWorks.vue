<template>
    <div class="howItWorks col-lg-2">
        <b-button class="howitworksbtn how-desktop" :aria-expanded="showCollapse ? 'true' : 'false'" v-b-toggle.collapse-a.collapse-b>
            <img :src="'./images/question.png'" @click="nopulse" alt="" class="question" :class="{pulsed: !isClicked}">
            <span class="howitworkstitle">Comment ça marche ?</span>
        </b-button>

        <b-button class="how-mobile" :aria-expanded="showCollapse ? 'true' : 'false'" v-b-toggle.collapse-a.collapse-b>
            <img :src="'./images/question.png'" @click="nopulse" alt="" class="question" :class="{pulsed: !isClicked}">
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
