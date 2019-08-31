@extends('layouts.admin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>AJOUT D'UN NOUVEAU PRODUIT</h2>
            </div>
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
                                    {!! Form::select('id_category', $categories, null, ['class' => 'form-control']) !!}
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
                                            {{ Form::text('colorname', null,['placeholder' => 'Nom de la couleur', 'required' => 'required', 'class' => 'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="input-group colorpicker colorpicker-element">
                                        <div class="form-line">
                                            {{ Form::text('hexaCode', null,['placeholder' => 'Couleur', 'required' => 'required', 'class' => 'form-control']) }}                                        </div>
                                        <span class="input-group-addon">
                                            <i style="background-color: rgb(0, 170, 187);"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="demo-checkbox">
                                        <input type="checkbox" id="md_checkbox_1" class="chk-col-red" checked="">
                                        <label for="md_checkbox_1">RED</label>
                                        <input type="checkbox" id="md_checkbox_2" class="chk-col-pink" checked="">
                                        <label for="md_checkbox_2">PINK</label>
                                        <input type="checkbox" id="md_checkbox_3" class="chk-col-purple" checked="">
                                        <label for="md_checkbox_3">PURPLE</label>
                                        <input type="checkbox" id="md_checkbox_4" class="chk-col-deep-purple" checked="">
                                        <label for="md_checkbox_4">DEEP PURPLE</label>
                                        <input type="checkbox" id="md_checkbox_5" class="chk-col-indigo" checked="">
                                        <label for="md_checkbox_5">INDIGO</label>
                                        <input type="checkbox" id="md_checkbox_6" class="chk-col-blue" checked="">
                                        <label for="md_checkbox_6">BLUE</label>
                                        <input type="checkbox" id="md_checkbox_7" class="chk-col-light-blue" checked="">
                                        <label for="md_checkbox_7">LIGHT BLUE</label>
                                        <input type="checkbox" id="md_checkbox_8" class="chk-col-cyan" checked="">
                                        <label for="md_checkbox_8">CYAN</label>
                                        <input type="checkbox" id="md_checkbox_9" class="chk-col-teal" checked="">
                                        <label for="md_checkbox_9">TEAL</label>
                                        <input type="checkbox" id="md_checkbox_10" class="chk-col-green" checked="">
                                        <label for="md_checkbox_10">GREEN</label>
                                        <input type="checkbox" id="md_checkbox_11" class="chk-col-light-green" checked="">
                                        <label for="md_checkbox_11">LIGHT GREEN</label>
                                        <input type="checkbox" id="md_checkbox_12" class="chk-col-lime" checked="">
                                        <label for="md_checkbox_12">LIME</label>
                                        <input type="checkbox" id="md_checkbox_13" class="chk-col-yellow" checked="">
                                        <label for="md_checkbox_13">YELLOW</label>
                                        <input type="checkbox" id="md_checkbox_14" class="chk-col-amber" checked="">
                                        <label for="md_checkbox_14">AMBER</label>
                                        <input type="checkbox" id="md_checkbox_15" class="chk-col-orange" checked="">
                                        <label for="md_checkbox_15">ORANGE</label>
                                        <input type="checkbox" id="md_checkbox_16" class="chk-col-deep-orange" checked="">
                                        <label for="md_checkbox_16">DEEP ORANGE</label>
                                        <input type="checkbox" id="md_checkbox_17" class="chk-col-brown" checked="">
                                        <label for="md_checkbox_17">BROWN</label>
                                        <input type="checkbox" id="md_checkbox_18" class="chk-col-grey" checked="">
                                        <label for="md_checkbox_18">GREY</label>
                                        <input type="checkbox" id="md_checkbox_19" class="chk-col-blue-grey" checked="">
                                        <label for="md_checkbox_19">BLUE GREY</label>
                                        <input type="checkbox" id="md_checkbox_20" class="chk-col-black" checked="">
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
            <!-- #END# Input Group -->
        </div>
    </section>
@endsection