<template>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <router-link to="/" class="navbar-brand"><img src="https://fabricsevent.fr/images/logo.jpg" alt="" class="logo"></router-link>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-center">
                    <li>
                        <router-link to="/produits/teeshirt" class="js-right-sidebar" data-close="true">TEE-SHIRT</router-link>
                    </li>
                    <li>
                        <router-link to="/produits/bonnets" class="js-right-sidebar" data-close="true">BONNETS</router-link>
                    </li>
                    <li>
                        <router-link to="/produits/casquettes" class="js-right-sidebar" data-close="true">CASQUETTES</router-link>
                    </li>
                    <li>
                        <router-link to="/produits/sweats" class="js-right-sidebar" data-close="true">SWEATS</router-link>
                    </li>
                    <li>
                        <router-link to="/produits/polos" class="js-right-sidebar" data-close="true">POLOS</router-link>
                    </li>
                    <li>
                        <router-link to="/produits/autres" class="js-right-sidebar" data-close="true">AUTRES</router-link>
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
        mounted() {
            console.log('Navbar mounted.')
        }
    }
</script>
