<template>
    <div class="howItWorks col-lg-2">
        <h3>Comment ça marche</h3>
        <div class="step-one">
            <div class="number">
                <span>1</span>
            </div>
            <span class="explication">Sélectionnez la ou les couleurs que vous désirez ajouter pour le produit souhaité</span>
        </div>
        <div class="step-two">
            <div class="number">
                <span>2</span>
            </div>
            <span class="explication">Cliquez ensuite sur le produit correspondant aux couleurs choisies </span>
        </div>
        <div class="step-three">
            <div class="number">
                <span>3</span>
            </div>
            <span class="explication">Le récapitulatif de votre devis s'affichera, et vous pourrez éditer la quantité voulue du produit par couleur sélectionnée</span>
        </div>
        <div class="step-four">
            <div class="number">
                <span>4</span>
            </div>
            <span class="explication">Valider votre devis, vous aurez la possibilité de laisser un message pour accompagner votre devis</span>
        </div>
    </div>
</template>


<style scoped>
    .step-one {
        padding: 15px 15px 55px 15px;
    }

    .step-two {
        padding: 15px 15px 40px 15px;
    }

    .step-three {
        padding: 15px 15px 105px 15px;
    }

    .step-four {
        padding: 15px 15px 100px 15px;
    }

    .explication {
        vertical-align: top;
        position: absolute;
        max-width: 155px;
        padding-left: 15px;
    }

    .number {
        background: red;
        border-radius: 50%;
        width: 15px;
        height: 15px;
        padding: 15px;
        vertical-align: middle;
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
        width: 16%;
    }
</style>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>