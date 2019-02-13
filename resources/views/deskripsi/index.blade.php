@extends('layouts.admin.index')

@section('title') Deskripsi @endsection

@section('content')
	<div class="main-panel">
        <div class="content-wrapper">
        	<center>
            @include('sweet::alert')
        	<div class="col-lg-11 grid-margin stretch-card" style="text-align: left;">
              <div class="card">
                <div class="card-body">
                  <h2>Data deskripsi</h2>
                  <a href="{{route('desc.create')}}" class="btn btn-outline-primary"> Tambah data </a>
                  <p></p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Deskripsi</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 0; ?>
                        @foreach($desc as $data)
                        <?php $no++ ?>
                        <form action="{{ route('desc.destroy', ['id' => $data->id]) }}" method="post">
                          @method('delete')
                          @csrf
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$data->judul}}</td>
                          <td>{{ str_limit($data->deskripsi, 20, '. . .')}}</td>
                          <td colspan="3">
                          	<a 
                              href="{{ route('desc.edit', ['id' => $data->id]) }}"
                              class="btn btn-outline-primary"> Edit </a>
                          	<!-- <a href="" class="btn btn-outline-info"> Info </a> -->
                          	<button type="submit"  onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')" class="btn btn-outline-danger">Delete</button>
                          </td>
                        </tr>
                        </form>
                        @endforeach
                      </tbody>
                      <tfoot>
		                <br>
                    <tr>
		                    <td colspan="10">
		                        
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