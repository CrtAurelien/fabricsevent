<template>
    <div class="col-lg-12">
    <hr>
    <h3 class="printmethods">Méthodes d'impression</h3>
    <div class="container-methods">
        <div class="flip-card" v-for="printMethod in printMethods">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <h2>{{printMethod.title}}</h2>
                </div>
                <div class="flip-card-back">
                    <p class="textshadow">{{printMethod.content}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</template>


<style>



</style>

<script>
import {mdbStepper} from 'mdbvue';

export default {
    components: {
        mdbStepper,
    },
    data() {
        return {
            printMethods: [
                {
                    title: "FLOCAGE",
                    content: 'MOTIF IMPRIMÉ SUR UNE FEUILLE, DÉCOUPÉ PUIS PRESSÉ À CHAUD SUR LE TEXTILE. IDÉAL POUR DE PETITES QUANTITÉS.'
                },
                {
                    title: "FLEX",
                    content: 'MOTIF IMPRIMÉ SUR UNE FEUILLE, DÉCOUPÉ PUIS PRESSÉ À CHAUD SUR LE TEXTILE. COULEURS PLUS RESPLENDISSANTES, COLLE APPLIQUÉE SUR LE REBORD DE L’IMPRESSION. IDÉAL POUR UNE QUANTITÉ MOYENNE.'
                },
                {
                    title: "SERIGRAPHIE",
                    content: 'MOTIF IMPRIMÉ À L’AIDE DE CADRES ET POCHOIRS. L’ENCRE PASSE À TRAVERS LE POCHOIR ET SE DÉPOSE SUR LE TEXTILE ENSUITE. LES COULEURS SONT MOINS RESPLENDISSANTES QU’UNE IMPRESSION NUMÉRIQUE MAIS TIENNENT TRÈS BIEN AVEC LE TEMPS. CE PROCÉDÉ RESTE D’EXCELLENTE QUALITÉ.'
                },
                {
                    title: "BRODERIE",
                    content: 'MOTIF RÉALISÉ À L’AIGUILLE OU À LA MACHINE, ET CE DIRECTEMENT SUR LE SUPPORT CONCERNÉ. HAUTE QUALITÉ.'
                },
                {
                    title: "IMPRESSION NUMERIQUE",
                    content: 'MOTIF IMPRIMÉ DIRECTEMENT SUR LE TEXTILE AVEC L’AIDE D’IMPRIMANTES. MALGRÉ UN SYSTÈME DE PERSONNALISATION DE HAUTE QUALITÉ ET UN RÉSULTAT OPTIMAL, LES COULEURS DURENT MOINS DANS LE TEMPS À LA DIFFÉRENCE DE LA SÉRIGRAPHIE.'
                }
            ],
        };
    }
};
</script>
