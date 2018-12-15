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
              <h3>Tambah data events</h3>
              <br>
              <!-- <p class="card-description">
                Basic form elements
              </p> -->
                <form 
                  class="forms-sample" 
                  method="post" 
                  action="{{route('events.store')}}">
                  @csrf
                  
                    <div class="form-group">
                      <label for="exampleInputName1">Nama</label>
                      <input name="nama" type="text" class="form-control" id="exampleInputName1" placeholder="Nama Events">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Deskripsi</label>
                      <textarea class="form-control" name="deskripsi" id="exampleTextarea1" placeholder="Deskripsi" rows="4"></textarea>
                    </div>
                    <label for="exampleInputName1">Waktu</label>
                    <hr>
                    <div class="form-group">
                      <div class="row">
                        <div class="col">
                          <label for="exampleInputName1">Jam</label>
                          <input name="jam" type="time" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="col">
                          <label for="exampleInputName1">Tanggal</label>
                          <input name="tanggal" type="number" class="form-control" id="exampleInputName1" max="31" placeholder="1">
                        </div>
                        <div class="col">
                          <label for="exampleInputName1">Bulan</label>
                          <select class="form-control" name="bulan">
                            <option>- Pilih bulan -</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Tempat</label>
                      <input name="tempat" type="text" class="form-control" id="exampleInputName1" placeholder="Nama Tempat">
                    </div>
                  <button type="submit" class="btn btn-success mr-2">Tambah data</button>
                  <a href="{{route('events.index')}}" class="btn btn-light">Kembali</a>

                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        </center>
	</div>

@endsection