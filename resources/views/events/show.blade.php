@extends('layouts.admin.index')

@section('title') Show @endsection

@section('content')

	<div class="main-panel">
		<div class="content-wrapper">
		<center>
    	<div class="col-md-10 grid-margin stretch-card"  style="text-align: left;">
          <!-- Form Tambah Murid -->
          <div class="card">
            <div class="card-body">
              <!-- <p class="card-description">
                Basic form elements
              </p> -->
                    <div class="form-group" style="text-align: center;">
                      <label for="exampleInputName1">{{$events->nama}}</label>
                    </div>
                    <div class="form-group" style="padding-top: -20px;">
                      <label>{{$events->deskripsi}}</label>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col">
                          <label for="exampleInputName1"></label>
                          <label>{{$events->tanggal}} {{$events->bulan}}, Pukul {{$events->waktu}}</label>
                        </div>
                        <div class="col">
                          <label for="exampleInputName1"></label>
                          <label></label>
                        </div>
                        <div class="col">
                          <label for="exampleInputName1"></label>
                          <label>{{$events->tempat}}</label>
                        </div>
                      </div>
                    </div>
                  <center><a href="{{route('events.index')}}" class="btn btn-light">Kembali</a></center>
                </div>
              </div>
            </div>
          </div>
        </div>
        </center>
	</div>

@endsection