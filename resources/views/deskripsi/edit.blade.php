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
                  <h3>Edit data deskripsi</h3>
                  <br>
                  <!-- <p class="card-description">
                    Basic form elements
                  </p> -->
                    <form 
                      class="forms-sample" 
                      method="post" 
                      action="{{route('desc.update', ['id' => $desc->id])}}">
                      @csrf

                      <input type="hidden" name="_method" value="PUT">
                      
                        <div class="form-group">
                          <label for="exampleInputName1">Judul</label>
                          <input name="judul" type="text" class="form-control" id="exampleInputName1" placeholder="Nama deskripsi" value="{{$desc->judul}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Deskripsi</label>
                          <textarea name="desc" type="text" rows="5" class="form-control" id="exampleInputName1" placeholder="Deskripsi . . .">{{$desc->deskripsi}}</textarea>
                        </div>
                      <button type="submit" class="btn btn-success mr-2">Edit data</button>
                      <a href="{{route('desc.index')}}" class="btn btn-light">Kembali</a>

                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </center>
    </div>
@endsection