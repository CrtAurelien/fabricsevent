@extends('layouts.admin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <ol class="breadcrumb breadcrumb-bg-green">
                <li><a href="{{route('home')}}"><i class="material-icons">home</i> Tableau de bord</a></li>
                <li class="active"><i class="material-icons">shop</i> Edition de la couleur : <b>{{$color->colorname}}</b></li>
            </ol>
            <div class="row clearfix">
                {!! Form::open(['route' => ['update-color', $color->id], 'method' => 'POST', 'files' => true, 'enctype'=>'multipart/form-data']) !!}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-4 col-lg-offset-4">
                                    <p>
                                        <i class="material-icons label-icon">
                                            color_lens
                                        </i>
                                        <b>Couleur</b>
                                    </p>
                                    <div class="input-group">
                                        <div class="form-line">
                                            {!!  Form::text('colorname', $color->colorname, ['class' => 'form-control input-sm'])!!}
                                        </div>
                                    </div>
                                    <div class="input-group colorpicker colorpicker-element">
                                        <div class="form-line">
                                            {!!  Form::text('hexaCode', $color->hexaCode, ['class' => 'form-control input-sm'])!!}
                                        </div>
                                        <span class="input-group-addon">
                                            <i style="background-color: rgb(0, 170, 187);"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ Form::button('Modifier', ['type' => 'submit', 'class' => 'todo-send btn-add col-lg-8 col-lg-offset-2 info-box-devis hover-expand-effect addButton btn-primary btn-md  btn notika-add-todo waves-effect']) }}
                </div>
                {!! Form::close() !!}
            </div>
            <!-- #END# Input Group -->
        </div>
    </section>
@endsection