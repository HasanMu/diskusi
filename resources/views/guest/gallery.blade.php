@extends('layouts.gallery')

@section('title') GALLERY @endsection

@section('content')	
	<div class="divider"></div>
	
	 <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title" style="font-family: 'Roboto Condensed', sans-serif;">Gallery</h1>
        </div>

        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            @foreach($cat as $data)
            <button class="btn btn-default filter-button" data-filter="{{$data->id}}">{{$data->nama}}</button>
            @endforeach
        </div>
        <br/>
        	@foreach($galeri as $data)
        	<div class="gallery_product col-lg-4 col-md-2 col-sm-2 col-xs-2 filter {{$data->cat_id}}">
                <img src="{{'storage/'.$data->nama_foto}}" class="img-responsive">
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection