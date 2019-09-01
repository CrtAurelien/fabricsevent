@extends('layouts.admin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <ol class="breadcrumb breadcrumb-bg-green">
                <li><a href="{{route('home')}}"><i class="material-icons">home</i> Tableau de bord</a></li>
                <li class="active"><i class="material-icons">color_lens</i> Produits</li>
            </ol>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>{{$category->name}}</h2>
                            </div>
                            <div class="body">
                                <ul class="list-group">

                                    @foreach($products as $product)
                                        @if($product->id_category == $category->id)
                                            <li class="list-group-item">{{$product->name}}
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection