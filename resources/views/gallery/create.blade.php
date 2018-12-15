@extends('layouts.admin.index')

@section('title') Create @endsection

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
                  <h3>Tambah data gallery</h3>
                  <br>
                  <!-- <p class="card-description">
                    Basic form elements
                  </p> -->
                    <form 
                      class="forms-sample" 
                      method="post"
                      enctype="multipart/form-data" 
                      action="{{route('galleries.store')}}">
                      @csrf
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Nama foto</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputName1" placeholder="Nama foto">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Foto</label>
                        <input name="nama_foto" type="file" class="form-control" id="exampleInputName1" placeholder="Foto">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputSelect">Kategori</label>
                        <select class="form-control" name="kategori">
                            <option>- Pilih Kategori -</option>
                          @foreach($cat as $data)
                            <option value="{{$data->id}}">{{$data->nama}}</option>
                          @endforeach
                          </select>
                      </div>

                      <button type="submit" class="btn btn-success mr-2">Tambah data</button>
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