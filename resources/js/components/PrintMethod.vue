<template>
    <div id="printMethods" class="col-lg-8">
        <h3>Méthodes d'impressions</h3>
        <div class="container-prints">
            <div class="print-method">
                <h4>Flocage</h4>
                <!--<p>Motif imprimé sur une feuille, découpé puis pressé à chaud sur le textile.-->
                    <!--Idéal pour de petites quantités</p>-->
            </div>
            <div class="print-method">
                <h4>Flex</h4>
                <!--<p>-->
                    <!--Motif imprimé sur une feuille, découpé puis pressé à chaud sur le textile.-->
                    <!--Couleurs plus resplendissantes, colle appliquée sur le rebord de l’impression. Idéal pour une quantité moyenne.-->
                <!--</p>-->
            </div >
            <div class="print-method">
                <h4>Impression numérique</h4>
                <!--<p>-->
                    <!--Motif imprimé directement sur le textile avec l’aide d’imprimantes.-->
                    <!--Malgré un système de personnalisation de haute qualité et un résultat optimal, les-->
                    <!--couleurs durent moins dans le temps à la différence de la sérigraphie.-->
                <!--</p>-->
            </div>
            <div class="print-method">
                <h4>Serigraphie</h4>
                <!--<p>-->
                    <!--Motif imprimé à l’aide de cadres et pochoirs. L’encre passe à travers le pochoir et se-->
                    <!--dépose sur le textile ensuite. Les couleurs sont moins resplendissantes qu’une impression numérique mais tiennent-->
                    <!--très bien avec le temps. Ce procédé reste d’excellente qualité.-->
                <!--</p>-->
            </div>
            <div class="print-method">
                <h4>Broderie</h4>
                <!--<p>-->
                    <!--Motif réalisé à l’aiguille ou à la machine, et ce directement sur le support concerné.-->
                    <!--Haute qualité.-->
                <!--</p>-->
            </div>
        </div>

    </div>

</template>


<style>
    h3 {
        text-align: center;
    }


</style>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
