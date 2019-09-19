<template>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <router-link :to="{name: 'home'}" class="navbar-brand"><img src="https://fabricsevent.fr/images/logo.jpg" alt=""
                                                              class="logo"></router-link>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-center">
                    <li v-for="category in categories">
                        <router-link :to="{name: 'products', params: {id: category.id}}" class="js-right-sidebar" data-close="true">{{category.name}}
                        </router-link>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li class="info-box-devis hover-expand-effect">
                        <a href="">DEVIS GRATUIT</a>
                    </li>
                    <li class="pull-right">
                        <a href="javascript:void(0);"><i class="material-icons">mail</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>


<style>
</style>

<script>
    export default {
        data() {
            return {
                categories: {}
            }
        },
        created(){
            axios.get('http://localhost/fabricsevent/public/api/categories/')
                .then((response) => this.categories = response.data)
                .catch((error) => console.log(error));
        },


    }
</script>
