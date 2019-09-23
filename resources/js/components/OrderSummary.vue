<template>
    <div class="recap col-lg-2">
        <h3 class="recap-title">Recapitulatif</h3>
        <div v-for="(selectedProduct, index) in listproduct" class="recap-products">
            {{selectedProduct.name}}
            <i :class="" v-on:click="removeProduct(index)" class="material-icons">delete</i>
        </div>
    </div>
</template>
<style>
    .recap-products{

        background: #4ba593;
        width: 210px;
    }
    .recap-title{
        background: #4ba593;
        width: 210px;
        margin:0 ;
        padding: 15px 0;
        text-transform: uppercase;
        text-align: center;
    }
</style>
<script>
    export default {
        methods:{
            removeProduct: function(index) {
                this.listproduct.splice(index, 1)
            }
        },
        props:['listproduct']
    }
</script>