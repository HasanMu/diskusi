@extends('layouts.admin.index')

@section('title') Guru @endsection

@section('content')
	<div class="main-panel">
        <div class="content-wrapper">
        	<center>
            @include('sweet::alert')
        	<div class="col-lg-11 grid-margin stretch-card" style="text-align: left;">
              <div class="card">
                <div class="card-body">
                  <h2>Data guru</h2>
                  <a href="{{route('teachers.create')}}" class="btn btn-outline-primary"> Tambah data </a>
                  <p></p>
                  <form action="{{route('teachers.index')}}">

                  <div class="form-group">  
                    <div class="input-group col-xs-10">
                      <input 
                        type="text"
                        name="filter" 
                        class="form-control"
                        placeholder="Cari berdasarkan nama guru">
                      <span class="input-group-append">
                        <button 
                        class="file-upload-browse btn btn-info" 
                        type="submit"><i class="fa fa-search"></i></button>
                      </span>
                    </form>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Bidang studi</th>
                          <th>Tanggal Lahir</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 0; ?>
                        @foreach($guru as $data)
                        <?php $no++ ?>
                        <form action="{{ route('teachers.destroy', ['id' => $data->id]) }}" method="post">
                          @method('delete')
                          @csrf
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$data->nama}}</td>
                          <td>{{$data->bidang_studi}}</td>
                          <td>{{$data->dob}}</td>
                          <td colspan="3">
                          	<a 
                              href="{{ route('teachers.edit', ['id' => $data->id]) }}"
                              class="btn btn-outline-primary"> Edit</a>
                          	<a href="{{ route('teachers.show', ['id' => $data->id]) }}" class="btn btn-outline-info"> Info</a>
                          	<button type="submit" class="btn btn-outline-danger"  onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Delete</button>
                          </td>
                        </tr>
                        </form>
                        @endforeach
                      </tbody>
                      <tfoot>
		                <br>
                    <tr>
		                    <td colspan="10">
		                        {{$guru->appends(Request::all())->links()}}
		                    </td>
		                </tr>
		            </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
            </center>
    </div>
@endsection