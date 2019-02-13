@extends('layouts.admin.index')

@section('title') Alumni @endsection

@section('content')
	<div class="main-panel">
        <div class="content-wrapper">
        	<center>
            @include('sweet::alert')
        	<div class="col-lg-11 grid-margin stretch-card" style="text-align: left;">
              <div class="card">
                <div class="card-body">
                  <h2>Data alumni</h2>
                  <a href="{{route('alumni.create')}}" class="btn btn-outline-primary"> Tambah data </a>
                  <p></p>
                  <form action="{{route('alumni.index')}}">
                  
                  <div class="form-group">  
                    <div class="input-group col-xs-10">
                      <input 
                        type="text"
                        name="filter" 
                        class="form-control"
                        placeholder="Cari berdasarkan nama alumni">
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
                          <th>Foto</th>
                          <th>Nama</th>
                          <th>Pekerjaan</th>
                          <th>Deskripsi</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 0; ?>
                        @foreach($alumni as $data)
                        <?php $no++ ?>
                        <form action="{{ route('alumni.destroy', ['id' => $data->id]) }}" method="post">
                          @method('delete')
                          @csrf
                        <tr>
                          <td>{{$no}}</td>
                          @if($data->foto)
                          <td><img src="{{'storage/'.$data->foto}}"></td>
                          @else
                          <td>N/A</td>
                          @endif
                          <td>{{$data->nama}}</td>
                          <td>{{$data->pekerjaan}}</td>
                          <td>{{str_limit($data->deskripsi, 20, '. . .')}}</td>
                          <td colspan="3">
                          	<a 
                              href="{{ route('alumni.edit', ['id' => $data->id]) }}"
                              class="btn btn-outline-primary"> Edit </a>
                          	<!-- <a href="" class="btn btn-outline-info"> Info </a> -->
                          	{{-- <button type="button" data-toggle="modal" data-target="#modelId" class="btn btn-outline-danger"> Delete </button> --}}
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
		                        {{$alumni->appends(Request::all())->links()}}
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