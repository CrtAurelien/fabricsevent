<template>
    <div class="container">
        <div class="row main_wrapper">
            {{this.$route.params.id}}
        </div>
    </div>
</template>

<style>
</style>

<script>
    export default {
        mounted() {
            console.log('The id is: ' + this.$route.params.id);
        }
    }
</script>
