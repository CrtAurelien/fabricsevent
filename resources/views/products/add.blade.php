@extends('layouts.admin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <ol class="breadcrumb breadcrumb-bg-green">
                <li><a href="{{route('home')}}"><i class="material-icons">home</i> Tableau de bord</a></li>
                <li class="active"><i class="material-icons">shop</i> Ajouter un nouveau produit</li>
            </ol>
            <div class="row clearfix">
                {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST']) !!}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <p>
                                        <i class="material-icons label-icon">
                                            shop
                                        </i>
                                        <b>Produit</b>
                                    </p>
                                    <div class="input-group">
                                        <div class="form-line">
                                            {{ Form::text('name', null,['placeholder' => 'Nom du produit', 'required' => 'required', 'class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <i class="material-icons label-icon">
                                            category
                                        </i>
                                        <b>Catégorie</b>
                                    </p>
                                    {!! Form::select('id_category', $allcategories, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <p>
                                        <i class="material-icons label-icon">
                                            color_lens
                                        </i>
                                        <b>Couleur</b>
                                    </p>
                                    <div class="input-group">
                                        <div class="form-line">
                                            {{ Form::text('colorname', null,['placeholder' => 'Nom de la couleur', 'class' => 'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="input-group colorpicker colorpicker-element">
                                        <div class="form-line">
                                            {{ Form::text('hexaCode', null,['placeholder' => 'Couleur', 'class' => 'form-control']) }}
                                        </div>
                                        <span class="input-group-addon">
                                            <i style="background-color: rgb(0, 170, 187);"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ Form::button('Ajouter', ['type' => 'submit', 'class' => 'todo-send btn-add col-lg-8 col-lg-offset-2 info-box-devis hover-expand-effect addButton btn-primary btn-md  btn notika-add-todo waves-effect']) }}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </section>
@endsection