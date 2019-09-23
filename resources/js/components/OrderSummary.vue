<template>
    <div class="recap col-lg-2">
        <h3 v-if="listproduct.length > 0" class="recap-title">Recapitulatif</h3>
        <div v-for="(selectedProduct, index) in listproduct" class="recap-products">
            {{selectedProduct.name}}
            <i :class="" v-on:click="removeProduct(index)" class="material-icons">delete</i>
        </div>
    </div>
</template>
<style>
    .recap-products{
        box-shadow: 0px 0px 6px -2px #000000b5, inset 0px 0px 9px 0px rgb(40, 90, 83);
        background: #4ba593;
        width: 210px;
        border: 5px solid #ffffff;
        color: white;
        position: relative;
        text-align:center;
        padding: 10px 0;
    }
    .recap-title{
        box-shadow: 0px 0px 6px 0px #000000b5;
        background: #4ba593;
        width: 210px;
        margin: 0;
        padding: 40px 0 15px 0;
        text-transform: uppercase;
        text-align: center;
        color: white;
        border: 5px solid white;
    }

    .recap-products > i{
        line-height: 18px;
        right:10px;
        position: absolute;
        color:#de2a2a;
    }

    i{
        cursor: pointer;
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