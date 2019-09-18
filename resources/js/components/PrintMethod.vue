<template>
    <div class="container-fluid">
        <div class="row">
            <div id="printMethods" class="col-lg-8 col-lg-offset-2">
                <div class="printMethods">
                    <h3>Méthodes d'impressions</h3>
                </div>
            </div>
        </div>
    </div>
</template>


<style>
    h3 {
        text-align: center;
    }

    .printMethods {
        background: white;
    }
</style>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>