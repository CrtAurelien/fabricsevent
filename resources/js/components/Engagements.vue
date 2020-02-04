<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" id="engagements">
                <div class="container-engagements col-lg-10 col-lg-offset-1">
                    <div class="engagements-top">
                        <div class="col-lg-2 engagement">
                            <div class="icon">
                                <i class="icofont-law"></i>
                            </div>
                            <div class="text-engagement">
                                Nous nous engageons à vous proposer des
                                tarifs abordables et compétitifs.
                            </div>
                        </div>
                        <div class="col-lg-2 engagement">
                            <div class="icon">
                                <i class="icofont-badge"></i>
                            </div>
                            <div class="text-engagement">Nous garantissons que notre travail sera parfaitement
                                réalisé.
                            </div>
                        </div>
                        <div class="col-lg-2 engagement">
                            <div class="icon">
                                <i class="icofont-chart-histogram-alt"></i>
                            </div>
                            <div class="text-engagement">Nous garantissons que notre travail sera parfaitement
                                réalisé.
                            </div>
                        </div>
                        <div class="col-lg-2 engagement">
                            <div class="icon">
                                <i class="icofont-space-shuttle"></i>
                            </div>
                            <div class="text-engagement">Nos délais sont optimum et toujours respectés
                            </div>
                        </div>
                        <div class="col-lg-2 engagement">
                            <div class="icon">
                                <i class="icofont-business-man"></i>
                            </div>
                            <div class="text-engagement">Nous garantissons que notre travail sera parfaitement
                                réalisé.
                            </div>
                        </div>
                        <div class="col-lg-2 engagement">
                            <div class="icon">
                                <i class="icofont-business-man"></i>
                            </div>
                            <div class="text-engagement">Nous garantissons que notre travail sera parfaitement
                                réalisé.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>


    .text-engagement {
        text-align: center;
    }

    .container-engagements {
        display: flex;
        flex-direction: column;
        margin-top: 35px;
    }


    .engagement {
        color: white;
        flex: 1;
        padding: 0 35px;
    }

    .icon {
        font-size: 40px;
        text-transform: uppercase;
        text-align: center;
    }

    .trending-icon {
        font-size: 40px;
    }

</style>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
