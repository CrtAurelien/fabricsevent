@extends('layouts.admin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            @if (session('status'))
                <div class="col-lg-offset-4 alert alert-success alert-dismissible fade in">
                    <button aria-label="Close" data-dismiss="alert" class="close fade" type="button"><span
                                aria-hidden="true">×</span></button>
                    <i class="icofont-check-circled"></i>
                    {{ session('status') }}
                </div>
            @endif
            <ol class="breadcrumb breadcrumb-bg-green">
                <li><a href="#"><i class="material-icons">home</i> Tableau de bord</a></li>
            </ol>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <a href="{{route('new-product')}}">
                            <div class="icon">
                                <i class="material-icons">
                                    add_circle_outline
                                </i>
                            </div>
                        </a>
                        <div class="content">
                            <div class="text add-thing">
                                AJOUTER UN NOUVEAU PRODUIT
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <a href="{{route('new-category')}}">
                            <div class="icon">
                                <i class="material-icons">
                                    add_circle_outline
                                </i>
                            </div>
                        </a>
                        <div class="content">
                            <div class="text">AJOUTER UNE NOUVELLE CATEGORIE</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-teal hover-expand-effect">
                        <a href="{{route('new-color')}}">
                            <div class="icon">
                                <i class="material-icons">
                                    add_circle_outline
                                </i>
                            </div>
                        </a>
                        <div class="content">
                            <div class="text">AJOUTER UNE NOUVELLE COULEUR</div>
                            {{--
                                                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                            --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-pink">
                            <div class="m-b--35 font-bold">DERNIERS PRODUITS AJOUTÉS</div>
                            <ul class="dashboard-stat-list">
                                @foreach($products as $product)
                                    @if($loop->index < 10)
                                        <li>
                                            {{$product->name}}
                                            <span class="pull-right">
                                            <a href="{{route('delete-product', ['id' => $product->id])}}">&nbsp;
                                                 <i class="material-icons md-18" title="Supprimer">delete</i>
                                            </a>
                                        </span>
                                            <span class="pull-right">
                                             <a href="{{route('edit-product', ['id' => $product->id])}}">&nbsp;
                                                 <i class="material-icons md-18">edit</i>
                                             </a>
                                    </span>
                                        </li>
                                    @endif
                                @endforeach
                                <hr>
                                <div class="font-bold" style="text-align: center">
                                    <a href="{{route('products')}}">TOUS LES PRODUITS</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-cyan">
                            <div class="m-b--35 font-bold">DERNIERES CATÉGORIES AJOUTÉES</div>
                            <ul class="dashboard-stat-list">
                                @foreach($categories as $category)
                                    @if($loop->index < 10)
                                        <li>
                                            {{$category->name}}
                                            <span class="pull-right">&nbsp;
                                        <a href="{{route('delete-category', ['id' => $category->id])}}">
                                            <i class="material-icons md-18 remove-icon" title="Supprimer">delete</i>
                                        </a>
                                    </span>
                                            <span class="pull-right">
                                        <a href="{{route('edit-category', ['id' => $category->id])}}">
                                            <i class="material-icons md-18">edit</i>
                                        </a>
                                    </span>
                                        </li>
                                    @endif
                                @endforeach
                                <hr>
                                <div class="font-bold" style="text-align: center">
                                    <a href="{{route('categories')}}">TOUTES LES CATEGORIES</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">DERNIERES COULEURS AJOUTÉES</div>
                            <ul class="dashboard-stat-list">
                                @foreach($colors as $color)
                                    <li>&nbsp;
                                        @if($loop->index < 10)
                                            {{$color->colorname}}
                                            <span class="pull-right">&nbsp;
                                                <a href="{{route('delete-color', ['id' => $color->id])}}">
                                                    <i class="material-icons md-18 remove-icon"
                                                       title="Supprimer">delete</i>
                                                </a>
                                            </span>
                                            <span class="pull-right">
                                                <a href="{{route('edit-color', ['id' => $color->id])}}">&nbsp;
                                                    <i class="material-icons md-18" title="Editer">edit</i>
                                                </a>
                                            </span>
                                            <span class="label pull-left" title="{{$color->hexaCode}}"
                                                  style="background-color:{{$color->hexaCode}} !important;">&nbsp;
                                            </span>
                                        @endif
                                    </li>
                                @endforeach
                                <hr>
                                <div class="font-bold" style="text-align: center">
                                    <a href="{{route('colors')}}">TOUTES LES COULEURS</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
            </div>

            <div class="row clearfix">
            </div>
        </div>
    </section>
@endsection
