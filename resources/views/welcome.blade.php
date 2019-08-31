@extends('layouts.app')

@section('content')
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Ça charge... !</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <a class="overlay"></a>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="#"><img src="https://fabricsevent.fr/images/logo.jpg" alt="" class="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-center">
                    <li>
                        <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">TEE-SHIRT</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">BONNETS</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">CASQUETTES</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">SWEATS</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">POLOS</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">AUTRES</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li class="info-box-devis hover-expand-effect">
                        <a href="">DEVIS GRATUIT</a>
                    </li>
                    <li class="pull-right">
                        <a href="javascript:void(0);" ><i class="material-icons">mail</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

@endsection