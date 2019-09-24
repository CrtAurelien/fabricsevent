<template>
    <div class="recap col-lg-2">
        <h3 v-if="listproduct.length > 0" class="recap-title">Recapitulatif</h3>

        <div v-for="(selectedProduct, index) in listproduct" class="recap-products">
            {{selectedProduct.name}} <b-form-input placeholder="x" class="quantity" data-placeholder="x" :value="value" v-model="value"></b-form-input>
        </div>
    </div>
</template>
<style>
    .quantity{
        width: 45px;
        border: none;
        text-align:right;
        background: none;
        float: right;
        height: 20px;
        border-bottom: 1px solid white;
        border-radius: 0;
        color:white;
        box-shadow: none;
        padding:0;
    }

    .custom-range{
        margin-top:5px;
    }

    .form-control:focus{
        box-shadow: inset 0px 0px 8px 0px rgba(0, 0, 0, 0.12);
        border-color:inherit;
    }

    input[type="range"] {
        display: inline-block;
        width: 80%;
    }

    .recap-products{
        box-shadow: 0px 0px 6px -2px #000000b5, inset 0px 0px 9px 0px rgb(40, 90, 83);
        background: #4ba593;
        width: 210px;
        border: 5px solid #ffffff;
        color: white;
        position: relative;
        padding: 10px 8px;
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
        line-height: 28px;
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
        data(){
          return{
              value:1
          }
        },
        methods:{
            removeProduct: function(index) {
                this.listproduct.splice(index, 1)
            }
        },
        props:['listproduct']
    }
</script>