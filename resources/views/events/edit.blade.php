@extends('layouts.admin.index')

@section('title') Edit @endsection

@section('content')

	<div class="main-panel">
		<div class="content-wrapper">
		<center>

    	<div class="col-md-10 grid-margin stretch-card"  style="text-align: left;">
          <!-- Form Tambah Murid -->
          <div class="card">
            <div class="card-body">
              <h3>Edit data events</h3>
              <br>
              <!-- <p class="card-description">
                Basic form elements
              </p> -->
                <form 
                  class="forms-sample" 
                  method="post" 
                  action="{{ route('events.update', ['id' => $events->id])}}">
                  @csrf

                  <input type="hidden" name="_method" value="PUT">
                  
                    <div class="form-group">
                      <label for="exampleInputName1">Nama</label>
                      <input name="nama" type="text" value="{{$events->nama}}" class="form-control" id="exampleInputName1" placeholder="Nama Events">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Deskripsi</label>
                      <textarea class="form-control" name="deskripsi" id="exampleTextarea1" placeholder="Deskripsi" rows="4">{{$events->deskripsi}}</textarea>
                    </div>
                    <label for="exampleInputName1">Waktu</label>
                    <hr>
                    <div class="form-group">
                      <div class="row">
                        <div class="col">
                          <label for="exampleInputName1">Jam</label>
                          <input name="jam" value="{{$events->waktu}}" type="time" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="col">
                          <label for="exampleInputName1">Tanggal</label>
                          <input name="tanggal" value="{{$events->tanggal}}" type="number" class="form-control" id="exampleInputName1" max="31" placeholder="1">
                        </div>
                        <div class="col">
                          <label for="exampleInputName1">Bulan</label>
                          <select class="form-control"  name="bulan">
                            <option>- Pilih bulan -</option>
                            <option {{"Januari" == $events->bulan ? 'selected="selected"' : '' }}
                             value="Januari">Januari</option>
                            <option {{"Februari" == $events->bulan ? 'selected="selected"' : '' }}
                            value="Februari">Februari</option>
                            <option {{"Maret" == $events->bulan ? 'selected="selected"' : '' }}
                            value="Maret">Maret</option>
                            <option {{"April" == $events->bulan ? 'selected="selected"' : '' }}
                            value="April">April</option>
                            <option {{"Mei" == $events->bulan ? 'selected="selected"' : '' }}
                            value="Mei">Mei</option>
                            <option {{"Juni" == $events->bulan ? 'selected="selected"' : '' }}
                            value="Juni">Juni</option>
                            <option {{"Juli" == $events->bulan ? 'selected="selected"' : '' }}
                            value="Juli">Juli</option>
                            <option {{"Agustus" == $events->bulan ? 'selected="selected"' : '' }}
                            value="Agustus">Agustus</option>
                            <option {{"September" == $events->bulan ? 'selected="selected"' : '' }}
                            value="September">September</option>
                            <option {{"Oktober" == $events->bulan ? 'selected="selected"' : '' }}
                            value="Oktober">Oktober</option>
                            <option {{"November" == $events->bulan ? 'selected="selected"' : '' }}
                            value="November">November</option>
                            <option {{"Desember" == $events->bulan ? 'selected="selected"' : '' }}
                            value="Desember">Desember</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Tempat</label>
                      <input name="tempat" value="{{$events->tempat}}" type="text" class="form-control" id="exampleInputName1" placeholder="Nama Tempat">
                    </div>
                  <button type="submit" class="btn btn-success mr-2">Ubah data</button>
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