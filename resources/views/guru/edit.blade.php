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
          <!-- Form Tambah Murid -->
          <div class="card">
            <div class="card-body">
              <h3>Edit data guru</h3>
              <br>
              <!-- <p class="card-description">
                Basic form elements
              </p> -->
                <form 
                  class="forms-sample" 
                  method="post" 
                  action="{{route('teachers.update', ['id' => $guru->id])}}">
                  @csrf

                  <input type="hidden" name="_method" value="PUT">
                  
                    <div class="form-group">
                      <label for="exampleInputName1">Nama guru</label>
                      <input 
                        name="nama" 
                        type="text" 
                        class="form-control" 
                        id="exampleInputName1" 
                        value="{{$guru->nama}}" 
                        placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Bidang studi</label>
                      <input name="bidang_studi" 
                        value="{{$guru->bidang_studi}}" 
                        type="text" 
                        class="form-control" 
                        id="exampleInputName1" 
                        placeholder="Bidang studi">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Alamat</label>
                      <textarea class="form-control" 
                        name="alamat" 
                        id="exampleTextarea1" 
                        placeholder="Alamat" 
                        rows="4">{{$guru->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Tanggal Lahir</label>
                      <input value="{{$guru->dob}}" 
                        name="dob" 
                        type="date" 
                        class="form-control" 
                        id="exampleInputName1" 
                        placeholder="hh/mm/yyyy">
                    </div>
                  <button type="submit" class="btn btn-success mr-2">Edit data</button>
                  <a href="{{route('teachers.index')}}" class="btn btn-light">Kembali</a>

                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        </center>
	</div>

@endsection