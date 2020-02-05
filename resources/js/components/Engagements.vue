<template>
    <div class="col-lg-12" id="engagements">
        <div class="engagements">
            <div class="container-engagements">
                <div class="engagements-top">
                    <div class="engagement ">
                        <div class="icon">
                            <i class="icofont-euro-true" data-toggle="tooltip" data-placement="right" title=""
                               data-original-title="Nous nous engageons à vous proposer des
                    tarifs abordables et compétitifs."></i>
                        </div>
                        <div class="text-engagement">
                            COMPÉTITIVITÉ
                        </div>
                    </div>
                    <div class="engagement">
                        <div class="icon">
                            <i class="icofont-badge" data-toggle="tooltip" data-placement="bottom" title=""
                               data-original-title="Nous garantissons que notre travail sera parfaitement réalisé"></i>
                        </div>
                        <div class="text-engagement">
                            QUALITÉ
                        </div>
                    </div>
                    <div class="engagement green">
                        <div class="icon">
                            <i class="icofont-delivery-time" data-toggle="tooltip" data-placement="bottom" title=""
                               data-original-title="Nos délais sont optimum et toujours respectés"></i>
                        </div>
                        <div class="text-engagement">RÉACTIVITÉ
                        </div>
                    </div>
                    <div class="engagement green">
                        <div class="icon">
                            <i class="icofont-holding-hands" data-toggle="tooltip" data-placement="bottom" title=""
                               data-original-title="Main dans la main, du commencement jusqu’à la finalisation et au suivi de votre projet"></i>
                        </div>
                        <div class="text-engagement">CONFIANCE
                        </div>
                    </div>
                    <div class="engagement green">
                        <div class="icon">
                            <i class="icofont-chart-growth" data-toggle="tooltip" data-placement="bottom" title=""
                               data-original-title="Nous détectons vos besoins et vous conseillons au mieux pour vous faire grandir"></i>
                        </div>
                        <div class="text-engagement">DÉVELOPPEMENT
                        </div>
                    </div>
                    <div class="engagement green">
                        <div class="icon">
                            <i class="icofont-business-man-alt-3" data-toggle="tooltip" data-placement="bottom" title=""
                               data-original-title="Plus de 5 ans d’expérience à votre service"></i>
                        </div>
                        <div class="text-engagement">PROFESSIONNALISME
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .engagements {
        padding: 30px 65px;
    }

    .icon{
        background: #f4faf9;
        border-radius: 50%;
        width: 70px;
        height: 70px;
        color: #285a53;
        margin: auto;
    }

    .text-engagement {
        padding: 0 15px;
        text-align: center;
        padding-top: 25px;
    }

    .container-engagements {
        display: flex;
        flex-direction: column;
    }

    .engagements-top, .engagements-bottom {
        display: flex;
        flex-direction: row;
    }

    .engagements-top + .engagements-bottom {
        margin-top: 45px;
    }

    .engagement {
        margin: auto;
        color: white;
        flex: 1;
    }

    .engagement + .engagement {
    }

    .icon {
        display: flex;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        font-size: 40px;
        text-transform: uppercase;
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
