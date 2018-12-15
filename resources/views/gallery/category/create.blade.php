@extends('layouts.admin.index')

@section('title') Kelas @endsection

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
                  <h3>Tambah data kategori</h3>
                  <br>
                  <!-- <p class="card-description">
                    Basic form elements
                  </p> -->
                    <form 
                      class="forms-sample" 
                      method="post" 
                      action="{{route('categories.store')}}">
                      @csrf
                      
                        <div class="form-group">
                          <label for="exampleInputName1">Nama kategori</label>
                          <input name="nama" type="text" class="form-control" id="exampleInputName1" placeholder="Nama kategori">
                        </div>
                      <button type="submit" class="btn btn-success mr-2">Tambah data</button>
                      <a href="{{route('categories.index')}}" class="btn btn-light">Kembali</a>

                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </center>
    </div>
@endsection