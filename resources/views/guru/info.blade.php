@extends('layouts.admin.index')

@section('title') Info @endsection

@section('content')
	<div class="main-panel">
		<div class="content-wrapper">
			<center>
				<div class="col-md-10 grid-margin stretch-card"  style="text-align: left;">
          <!-- Form Tambah Murid -->
          <div class="card">
            <div class="card-body">
              <h3>Edit data guru</h3>
              <br>
              <!-- <p class="card-description">
                Basic form elements
              </p> -->
                    <div class="form-group">
                      <label for="exampleInputName1">Nama guru</label>
                      <input disabled 
                        name="nama" 
                        type="text" 
                        class="form-control" 
                        id="exampleInputName1" 
                        value="{{$guru->nama}}" 
                        placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Bidang studi</label>
                      <input disabled name="bidang_studi" 
                        value="{{$guru->bidang_studi}}" 
                        type="text" 
                        class="form-control" 
                        id="exampleInputName1" 
                        placeholder="Bidang studi">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Alamat</label>
                      <textarea disabled class="form-control" 
                        name="alamat" 
                        id="exampleTextarea1" 
                        placeholder="Alamat" 
                        rows="4">{{$guru->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Tanggal Lahir</label>
                      <input disabled value="{{$guru->dob}}" 
                        name="dob" 
                        type="date" 
                        class="form-control" 
                        id="exampleInputName1" 
                        placeholder="hh/mm/yyyy">
                    </div>
                    <center><a href="{{route('teachers.index')}}" class="btn btn-secondary">Kembali</a></center>
                </div>
              </div>
            </div>
          </div>
        </div>
        </center>
	</div>
@endsection