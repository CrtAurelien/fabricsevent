<template>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <router-link :to="{name: 'home'}" class="navbar-brand">
                    <img src="https://fabricsevent.fr/images/logo.jpg" alt="" class="logo">
                </router-link>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-center">
                    <li v-for="category in categories" v-if="category.type === 1">
                        <router-link :to="{name: 'products', params: {id: category.id}}" v-if="category" class="js-right-sidebar" data-close="true">{{category.name}}
                        </router-link>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle js-right-sidebar" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Autres
                        </a>
                        <div class="dropdown-menu dropdown-navbar" aria-labelledby="navbarDropdownMenuLink">
                            <router-link :to="{name: 'products', params: {id: category.id}}" :key="category.id" v-if="category.type !==  1" v-for="category in categories" class="js-right-sidebar" data-close="true">
                                {{category.name}}
                            </router-link>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li class="info-box-devis hover-expand-effect">
                        <a class="devis" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">DEVIS GRATUIT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</template>


<style scoped>
    .dropdown-navbar{
        padding: 10px;
        font-size: 17px;
        transition: none !important;
        transform: skew(20deg) !important;
        height: auto;
        border: 3px solid #285a53;
        margin-left: 20px;
        background: #4ba593;
        margin-top: 0 !important;
        min-width: 135px !important;
    }

    .dropdown-navbar > a{
        width: 100%;
        display:block;
    }

    .devis{
        cursor: initial;
    }

    .navbar-nav {
        flex-direction: row;
    }

    .container-fluid {
        flex-wrap: initial;
    }

    .navbar {
        padding:0;
    }


</style>

<script>
    export default {
        data() {
            return {
                categories: {}
            }
        },
        beforeCreate(){
            axios.get('http://localhost/fabricsevent/public/api/categories/')
                .then((response) => this.categories = response.data)
                .catch((error) => console.log(error));
        },


    }
</script>
