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
          <!-- Form Tambah Murid -->
          <div class="card">
            <div class="card-body">
              <h3>Tambah data murid</h3>
              <br>
              <!-- <p class="card-description">
                Basic form elements
              </p> -->
                <form 
                  class="forms-sample" 
                  method="post" 
                  action="{{route('students.store')}}">
                  @csrf
                  
                    <div class="form-group">
                      <label for="exampleInputName1">NIS</label>
                      <input name="nis" type="text" class="form-control" id="exampleInputName1" placeholder="1214200xxx">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Nama siswa</label>
                      <input name="nama" type="text" class="form-control" id="exampleInputName1" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                    	<label for="exampleInputSelect">Kelas</label>
                    	<select class="form-control" name="kelas">
                          <option>- Pilih Kelas -</option>
                        @foreach($murid as $data)
                          <option value="{{$data->id}}">{{$data->nama}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Alamat</label>
                      <textarea class="form-control" name="alamat" id="exampleTextarea1" placeholder="Alamat" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Tanggal Lahir</label>
                      <input name="dob" type="date" class="form-control" id="exampleInputName1" placeholder="Nama Lengkap">
                    </div>
                  <button type="submit" class="btn btn-success mr-2">Tambah data</button>
                  <a href="{{route('students.index')}}" class="btn btn-light">Kembali</a>

                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        </center>
	</div>

@endsection