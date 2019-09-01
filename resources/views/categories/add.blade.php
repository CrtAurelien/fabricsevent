@extends('layouts.admin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <ol class="breadcrumb breadcrumb-bg-green">
                <li><a href="{{route('home')}}"><i class="material-icons">home</i> Tableau de bord</a></li>
                <li class="active"><i class="material-icons">category</i> Ajouter une nouvelle catégorie</li>
            </ol>
            <div class="row clearfix">
                {!! Form::open(['action' => 'CategoriesController@store', 'method' => 'POST']) !!}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <p>
                                        <b>Nom de la catégorie</b>
                                    </p>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons label-icon">category</i>
                                        </span>
                                        <div class="form-line">
                                            {{ Form::text('name', null,['placeholder' => 'Nom de la catégorie', 'required' => 'required', 'class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <b>Type de catégorie</b>
                                    </p>
                                    {!! Form::select('type', $typecategories, null, ['class' => 'form-control']) !!}
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