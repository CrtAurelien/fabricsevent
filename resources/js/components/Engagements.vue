<template>
    <div class="col-lg-12" id="engagements">
        <div class="engagements">
            <div class="container-engagements">
                <div class="engagements-top">

                    <div class="engagement" v-for="engagement in engagements">
                        <div class="icon tooltip-container">
                            <i :class="'stickengagements ' + engagement.icon"></i>
                            <span class="tooltip">{{engagement.content}}</span>
                        </div>
                        <div class="text-engagement">
                            {{engagement.title}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                engagements: [
                    {
                        title: 'COMPÉTITIVITÉ',
                        content: 'Nous nous engageons à vous proposer des tarifs abordables et compétitifs',
                        icon:'icofont-euro-true'
                    },
                    {
                        title: 'QUALITÉ',
                        content: 'Nous garantissons que notre travail sera parfaitement réalisé',
                        icon:'icofont-badge'
                    },
                    {
                        title: 'RÉACTIVITÉ',
                        content: 'Nos délais sont optimum et toujours respectés',
                        icon:'icofont-delivery-time'
                    },
                    {
                        title: 'CONFIANCE',
                        content: 'Main dans la main, du commencement jusqu’à la finalisation et au suivi de votre projet',
                        icon:'icofont-holding-hands '
                    },
                    {
                        title: 'DÉVELOPPEMENT',
                        content: 'Nous détectons vos besoins et vous conseillons au mieux pour vous faire grandir',
                        icon:'icofont-chart-growth'
                    },
                    {
                        title: 'PROFESSIONNALISME',
                        content: 'Plus de 5 ans d’expérience à votre service !',
                        icon:'icofont-business-man-alt-3'
                    },

                ]
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
