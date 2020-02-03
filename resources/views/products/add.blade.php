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
                                <div class="col-md-6">
                                    <div class="demo-checkbox">
                                        <input type="checkbox" id="md_checkbox_1" class="chk-col-red">
                                        <label for="md_checkbox_1">RED</label>
                                        <input type="checkbox" id="md_checkbox_2" class="chk-col-pink">
                                        <label for="md_checkbox_2">PINK</label>
                                        <input type="checkbox" id="md_checkbox_3" class="chk-col-purple">
                                        <label for="md_checkbox_3">PURPLE</label>
                                        <input type="checkbox" id="md_checkbox_4" class="chk-col-deep-purple">
                                        <label for="md_checkbox_4">DEEP PURPLE</label>
                                        <input type="checkbox" id="md_checkbox_5" class="chk-col-indigo">
                                        <label for="md_checkbox_5">INDIGO</label>
                                        <input type="checkbox" id="md_checkbox_6" class="chk-col-blue">
                                        <label for="md_checkbox_6">BLUE</label>
                                        <input type="checkbox" id="md_checkbox_7" class="chk-col-light-blue">
                                        <label for="md_checkbox_7">LIGHT BLUE</label>
                                        <input type="checkbox" id="md_checkbox_8" class="chk-col-cyan">
                                        <label for="md_checkbox_8">CYAN</label>
                                        <input type="checkbox" id="md_checkbox_9" class="chk-col-teal">
                                        <label for="md_checkbox_9">TEAL</label>
                                        <input type="checkbox" id="md_checkbox_10" class="chk-col-green">
                                        <label for="md_checkbox_10">GREEN</label>
                                        <input type="checkbox" id="md_checkbox_11" class="chk-col-light-green">
                                        <label for="md_checkbox_11">LIGHT GREEN</label>
                                        <input type="checkbox" id="md_checkbox_12" class="chk-col-lime">
                                        <label for="md_checkbox_12">LIME</label>
                                        <input type="checkbox" id="md_checkbox_13" class="chk-col-yellow">
                                        <label for="md_checkbox_13">YELLOW</label>
                                        <input type="checkbox" id="md_checkbox_14" class="chk-col-amber">
                                        <label for="md_checkbox_14">AMBER</label>
                                        <input type="checkbox" id="md_checkbox_15" class="chk-col-orange">
                                        <label for="md_checkbox_15">ORANGE</label>
                                        <input type="checkbox" id="md_checkbox_16" class="chk-col-deep-orange">
                                        <label for="md_checkbox_16">DEEP ORANGE</label>
                                        <input type="checkbox" id="md_checkbox_17" class="chk-col-brown">
                                        <label for="md_checkbox_17">BROWN</label>
                                        <input type="checkbox" id="md_checkbox_18" class="chk-col-grey">
                                        <label for="md_checkbox_18">GREY</label>
                                        <input type="checkbox" id="md_checkbox_19" class="chk-col-blue-grey">
                                        <label for="md_checkbox_19">BLUE GREY</label>
                                        <input type="checkbox" id="md_checkbox_20" class="chk-col-black">
                                        <label for="md_checkbox_20">BLACK</label>
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