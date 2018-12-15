@extends('layouts.admin.index')

@section('title') Edit @endsection

@section('content')
	<div class="main-panel">
        <div class="content-wrapper">
          <center>
          @if(session('status'))
            <div style="position: relative; padding-left: 140px;">
              <div class="row">
                  <div class="col-md-10">
                      <div class="alert alert-success">
                        {{session('status')}}
                      </div>
                  </div>
              </div>
            </div>
          @endif
        	<div class="col-md-10 grid-margin stretch-card"  style="text-align: left;">
              <!-- Form Edit Profile -->
              <div class="card">
                <div class="card-body">
                  <h3>Edit data gallery</h3>
                  <br>
                  <!-- <p class="card-description">
                    Basic form elements
                  </p> -->
                    <form 
                      class="forms-sample" 
                      method="POST"
                      enctype="multipart/form-data"
                      action="{{route('galleries.update', ['id' => $gallery->id])}}">
                      @csrf
                      
                      <input type="hidden" name="_method" value="PUT">

                      <div class="form-group">
                        <label for="exampleInputName1">Nama foto</label>
                        <input name="nama" type="text" class="form-control" value="{{$gallery->nama}}" id="exampleInputName1" placeholder="Nama foto">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Foto</label><br>
                        @if($gallery->nama_foto)
                          <img src="{{asset('storage/'.$gallery->nama_foto)}}" height="200px" width="300px">
                        @else
                        N/A
                        @endif
                        <p></p>
                        <input name="nama_foto" type="file" class="form-control" id="exampleInputName1" placeholder="Foto">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputSelect">Kategori</label>
                        <select class="form-control" name="kategori">
                        @foreach($gal as $data)
                          <option 
                            value="{{$data->id}}" {{ $selectid == $data->id ? 'selected="selected"' : '' }}>{{$data->nama}}</option>  
                          @endforeach
                          </select>
                      </div>

                      <button type="submit" class="btn btn-success mr-2">Edit data</button>
                      <a href="{{route('galleries.index')}}" class="btn btn-light">Kembali</a>

                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </center>
    </div>
@endsection