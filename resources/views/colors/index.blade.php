@extends('layouts.admin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <ol class="breadcrumb breadcrumb-bg-green">
                <li><a href="{{route('home')}}"><i class="material-icons">home</i> Tableau de bord</a></li>
                <li class="active"><i class="material-icons">color_lens</i> Couleurs</li>
            </ol>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="clearfix row">
                                @foreach($colors as $color)
                                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                        <a href="{{route('edit-color', ['id' => $color->id])}}">
                                            <div class="demo-color-box"
                                                 style="color:white; background-color: {{$color->hexaCode}}!important;">
                                                <div class="color-name">{{$color->colorname}}</div>
                                                <div class="color-code">{{$color->hexaCode}}</div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection