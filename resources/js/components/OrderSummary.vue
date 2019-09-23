<template>
    <div>
        <div v-for="(selectedProduct, index) in productlist">
            {{selectedProduct.name}} <i v-on:click="removeProduct(index)" class="material-icons">delete</i>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return{
                productlist:[{}],
            }
        },
        methods:{
            removeProduct: function(index) {
                this.productlist.splice(index, 1)
            },
        },
    }
</script>