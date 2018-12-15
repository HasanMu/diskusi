@extends('layouts.admin.index')

@section('title') Kelas @endsection

@section('content')
	<div class="main-panel">
        <div class="content-wrapper">
          <center>
            @if(session('status'))
            <div style="position: relative; padding-left: 130px;">
              <div class="row">
                  <div class="col-md-10">
                      <div class="alert alert-success">
                        Data kelas berhasil diperbarui!
                      </div>
                  </div>
              </div>
            </div>
            @endif
        	<div class="col-md-10 grid-margin stretch-card"  style="text-align: left;">
              <!-- Form Edit Profile -->
              <div class="card">
                <div class="card-body">
                  <h3>Edit data kelas</h3>
                  <br>
                  <!-- <p class="card-description">
                    Basic form elements
                  </p> -->
                    <form 
                      class="forms-sample" 
                      method="post" 
                      action="{{route('class.update', ['id' => $kelas->id])}}">
                      @csrf

                      <input type="hidden" name="_method" value="PUT">
                      
                        <div class="form-group">
                          <label for="exampleInputName1">Nama kelas</label>
                          <input 
                            name="nama" 
                            type="text" 
                            class="form-control" 
                            id="exampleInputName1" 
                            value="{{$kelas->nama}}" 
                            placeholder="X, XII RPL, TSM, TKR 1, 2, 3">
                        </div>
                      <button type="submit" class="btn btn-success mr-2">Edit data</button>
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