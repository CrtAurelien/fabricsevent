<template>
    <div class="col-lg-12" id="engagements">
        <div class="engagements">
            <div class="container-engagements">
                <div class="engagements-top">
                    <div class="engagement ">
                        <div class="icon tooltip-container">
                            <i class="icofont-euro-true"></i>
                            <span class="tooltip">Nous nous engageons à vous proposer des
                    tarifs abordables et compétitifs.</span>
                        </div>
                        <div class="text-engagement">
                            COMPÉTITIVITÉ
                        </div>
                    </div>

                    <div class="engagement">
                        <div class="icon tooltip-container">
                            <i class="icofont-badge"></i>
                            <span class="tooltip">Nous garantissons que notre travail sera parfaitement réalisé</span>
                        </div>
                        <div class="text-engagement">
                            QUALITÉ
                        </div>
                    </div>

                    <div class="engagement green">
                        <div class="icon tooltip-container">
                            <i class="icofont-delivery-time"></i>
                            <span class="tooltip">Nos délais sont optimum et toujours respectés</span>
                        </div>
                        <div class="text-engagement">
                            RÉACTIVITÉ
                        </div>
                    </div>

                    <div class="engagement green">
                        <div class="icon tooltip-container">
                            <i class="icofont-holding-hands"></i>
                            <span class="tooltip">Main dans la main, du commencement jusqu’à la finalisation et au suivi de votre projet</span>
                        </div>
                        <div class="text-engagement">CONFIANCE
                        </div>
                    </div>

                    <div class="engagement green">
                        <div class="icon tooltip-container">
                            <i class="icofont-chart-growth"></i>
                            <span class="tooltip">Nous détectons vos besoins et vous conseillons au mieux pour vous faire grandir</span>
                        </div>
                        <div class="text-engagement">DÉVELOPPEMENT</div>
                    </div>

                    <div class="engagement green ">
                        <div class="icon tooltip-container">
                            <i class="icofont-business-man-alt-3"></i>
                            <span class="tooltip">Plus de 5 ans d’expérience à votre service !</span>
                        </div>
                        <div class="text-engagement">PROFESSIONNALISME</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

    .tooltip-container {
        cursor: pointer;
        position: relative;
        display: block;
    }

    .tooltip {
        opacity: 0;
        z-index: 99;
        color: #f4faf9;
        width: 200px;
        display: block;
        font-size: 13px;
        padding: 25px 10px;
        text-align: center;
        background: rgb(65, 154, 138);
        transition: all 1s cubic-bezier(0.68, -0.55, 0.27, 1.55) ;
        transform: scale(0);
        position: absolute;
        right: -68px;
        bottom: 100px;
        box-shadow: 3px -3px #285952d6;
    }

    .tooltip:before, .tooltip:after {
        content: '';
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid rgb(65, 154, 138);
        position: absolute;
        bottom: -10px;
        left: 43%;
    }

    .tooltip-container:hover .tooltip, a:hover .tooltip {
        opacity: 1;
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -o-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }

    .engagements {
        padding: 30px 65px;
    }

    .icon {
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

    .icon.tooltip-container:hover {
        transition: 0.9s;
        transform: rotateY(0deg);
    }

    .icon {
        display: flex;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        transform: rotateY(180deg);
        transition: 0.9s;
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
