<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8" id="engagements">
                <div class="engagements">
                    <div class="container-engagements">
                        <div class="engagements-top">
                            <div class="engagement ">
                                <div class="icon">
                                    <i class="icofont-law"></i>
                                </div>
                                <div class="text-engagement">
                                    Nous nous engageons à vous proposer des
                                    tarifs abordables et compétitifs.
                                </div>
                            </div>
                            <div class="engagement">
                                <div class="icon">
                                    <i class="icofont-badge"></i>
                                </div>
                                <div class="text-engagement">Nous garantissons que notre travail sera parfaitement
                                    réalisé.
                                </div>
                            </div>
                            <div class="engagement green">
                                <div class="icon">
                                    <i class="icofont-chart-histogram-alt"></i>
                                </div>
                                <div class="text-engagement">Nous garantissons que notre travail sera parfaitement
                                    réalisé.
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

        </div>
    </div>
</template>

<style scoped>

    .engagements {
        padding-top: 25px;
    }

    .text-engagement {
        padding-top: 10px;
        text-align: center;
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
        margin-top: 15px;
    }

    .engagement {
        color:white;
        flex: 1;
        box-shadow: 0px 0px 12px -6px rgba(0, 0, 0, 0.95);
        padding: 15px;
        background: url(https://www.zupimages.net/up/19/39/1zmf.png);
        background-size: cover;
        background-repeat: no-repeat;
        filter: saturate(0.5);
    }

    .engagement + .engagement {
        margin-left: 15px;
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
