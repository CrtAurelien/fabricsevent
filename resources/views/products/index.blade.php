@extends('layouts.admin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <ol class="breadcrumb breadcrumb-bg-green">
                <li><a href="{{route('home')}}"><i class="material-icons">home</i> Tableau de bord</a></li>
                <li class="active"><i class="material-icons">color_lens</i> Produits</li>
            </ol>
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                {{$product->name}}
                                <small>Add the badges component to any list group item and it will automatically be
                                    positioned on the right.
                                </small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a>
                                        </li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another
                                                action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something
                                                else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <ul class="list-group">
                                <li class="list-group-item">Cras justo odio <span class="badge bg-pink">14 new</span>
                                </li>
                                <li class="list-group-item">Dapibus ac facilisis in <span
                                            class="badge bg-cyan">99 read</span></li>
                                <li class="list-group-item">Morbi leo risus <span class="badge bg-teal">99+</span></li>
                                <li class="list-group-item">Porta ac consectetur ac <span
                                            class="badge bg-orange">21</span></li>
                                <li class="list-group-item">Vestibulum at eros <span class="badge bg-purple">18</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
