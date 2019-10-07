<template>
    <div class="recap col-lg-2">
        <h3 v-if="this.$store.getters.productlist.length > 0" class="recap-title">Recapitulatif</h3>
        <div v-for="(selectedProduct, index) in this.$store.getters.productlist" :key="index" class="recap-products">
            <span class="badge">&nbsp;</span> {{selectedProduct.product.name}}
            <button v-on:click="removeProduct()">Supprimer</button>
            <b-form-input placeholder="x" class="quantity from-control" min="0" type="number" data-placeholder="x" :value="quantity" v-model="quantity"></b-form-input>

        </div>
        <button data-toggle="modal" data-target="#devis" data-whatever="@getbootstrap" v-if="this.$store.getters.productlist.length > 0" class="recap-footer">Valider le devis</button>
        <div class="modal fade" id="devis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog contact-box" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title w-100 contact-title font-weight-bold">Récapitulatif de votre devis</h4>
                    </div>
                    <hr>
                    <div class="modal-body mx-3" v-for="(selectedProduct, index) in this.$store.getters.productlist" :key="index">
                        <div class="md-form mb-5 contact-area">
                            <span class="badge">&nbsp;</span> {{selectedProduct.product.name}}
                        </div>
                        <div class="md-form contact-area">
                            <i class="fas fa-pencil prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="form8">Laisser un commentaire</label>
                            <textarea type="text" id="form8" class="md-textarea contact-textarea form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer contact-footer d-flex justify-content-center">
                        <button class="btn btn-unique btn-contact" type="submit">Modifier</button>
                        <button class="btn btn-unique btn-contact" type="submit">Valider</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
    .colors{
        padding-top:5px;
        display:block;
    }

    .quantity{
        padding-left: 5px !important;
        width: 45px;
        border: none;
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

    .recap-footer{
        box-shadow: 0px 0px 6px 0px #000000b5;
        background: #4ba593;
        width: 210px;
        margin: 10px 0 0 0;
        padding: 5px 0;
        font-size:15px;
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
    import Vuex from 'vuex';
    import store from './ProductsStore';
    export default {
        store: store,
        data(){
            return{
                quantity: 1,
            }
        },

        methods:{
            ...Vuex.mapGetters([
                'productlist'
            ]),
            ...Vuex.mapActions([
                'removeProduct'
            ]),
            /*removeProduct: function(index) {
                this.productlist.splice(index, 1)
            }*/
        },
    }
</script>