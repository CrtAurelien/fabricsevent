<template>
    <div class="col-lg-12" id="engagements">
        <div class="engagements">
            <div class="container-engagements">
                <div class="engagements-top">
                    <div class="engagement ">
                        <div class="icon">
                            <i class="icofont-euro-true" data-toggle="tooltip" data-placement="bottom" title=""
                               data-original-title="Nous nous engageons à vous proposer des
                    tarifs abordables et compétitifs."></i>
                        </div>
                        <div class="text-engagement">
                            TARIFS ACCESSIBLES
                        </div>
                    </div>
                    <div class="engagement">
                        <div class="icon">
                            <i class="icofont-badge" data-toggle="tooltip" data-placement="bottom" title=""
                               data-original-title="Nous nous engageons à vous proposer des
                    tarifs abordables et compétitifs."></i>
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
                        <div class="text-engagement">RESPECT DES DÉLAIS
                        </div>
                    </div>
                    <div class="engagement">
                        <div class="icon">
                            <i class="icofont-space-shuttle"></i>
                        </div>
                        <div class="text-engagement">Nos délais sont optimum et toujours respectés
                        </div>
                    </div>
                    <div class="engagement green">
                        <div class="icon">
                            <i class="icofont-business-man"></i>
                        </div>
                        <div class="text-engagement">Nous garantissons que notre travail sera parfaitement
                            réalisé.
                        </div>
                    </div>
                    <div class="engagement">
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
