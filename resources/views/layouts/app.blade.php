<!--
    DEVELOPPÉ FIÈREMENT
    ET
    AVEC ♥ PAR
    VICTOR GUÉRINON & AURÉLIEN CARTERET
-->

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FabricsEvent</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('./images/favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet"/>

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet"/>

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet"/>
    <link href="css/imagehover.css" rel="stylesheet"/>
    <link href="css/icofont.css" rel="stylesheet"/>
    <link href="css/fontello.css" rel="stylesheet"/>

    <!-- Custom Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/fabrics.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet"/>
</head>

<body class="theme-green">
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
<div id="app">
    <navbar></navbar>
    <router-view :key="$route.fullPath"></router-view>
    <router-view name="productslist"></router-view>
    <router-view name="methods"></router-view>
    <router-view name="engagements"></router-view>
    <footer-site></footer-site>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog contact-box" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title w-100 contact-title font-weight-bold">Contactez-nous</h4>
            </div>
            <hr>
            <div class="modal-body mx-3">
                <div class="md-form mb-5 contact-area">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="form29">Votre email</label>
                    <input type="email" id="form29" class="form-control contact-form validate">
                </div>
                <div class="md-form mb-5 contact-area">
                    <i class="fas fa-tag prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="form32">Sujet</label>
                    <input type="text" id="form32" class="form-control contact-form validate">
                </div>
                <div class="md-form contact-area">
                    <i class="fas fa-pencil prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="form8">Votre message</label>
                    <textarea type="text" id="form8" class="md-textarea contact-textarea form-control" rows="4"></textarea>
                </div>
            </div>
            <div class="modal-footer contact-footer d-flex justify-content-center">
                <button class="btn btn-unique btn-contact">Envoyer</button>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('js/multislider.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="{{asset('plugins/node-waves/waves.js')}}"></script>
<script src="{{asset('js/admin.js')}}"></script>
<script src="{{asset('plugins/jquery-spinner/js/jquery.spinner.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 2,
            speed: 2000,
            autoplay: true,
            autoplaySpeed: 3500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>
</body>
</html>
