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
                  <h3>Tambah data alumni</h3>
                  <br>
                  <!-- <p class="card-description">
                    Basic form elements
                  </p> -->
                    <form 
                      class="forms-sample" 
                      method="post"
                      enctype="multipart/form-data" 
                      action="{{route('alumni.store')}}">
                      @csrf
                      
                        <div class="form-group">
                          <label for="exampleInputName1">Nama</label>
                          <input name="nama" type="text" class="form-control" id="exampleInputName1" placeholder="Namaa lengkap">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">foto</label>
                          <input name="foto" type="file" class="form-control" id="exampleInputName1" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Pekerjaan</label>
                          <input name="pekerjaan" type="text" class="form-control" id="exampleInputName1" placeholder="Pekerjaan">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Deskripsi</label>
                          <textarea rows="5" name="deskripsi" class="form-control" id="exampleInputName1" placeholder="Deskripsi"></textarea>
                        </div>
                      <button type="submit" class="btn btn-success mr-2">Tambah data</button>
                      <a href="{{route('class.index')}}" class="btn btn-light">Kembali</a>

                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </center>
    </div>
@endsection