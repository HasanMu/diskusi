@extends('layouts.admin.index')

@section('title') Gallery @endsection

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
        	<div class="col-lg-11 grid-margin stretch-card" style="text-align: left;">
              <div class="card">
                <div class="card-body">
                  <h2>Data kategori</h2>
                  <a href="{{route('categories.create')}}" class="btn btn-outline-primary"> Tambah data </a>
                  <p></p>
                  <form action="{{route('categories.index')}}">
                  
                  <div class="form-group">  
                    <div class="input-group col-xs-10">
                      <input 
                        type="text"
                        name="filter" 
                        class="form-control"
                        placeholder="Cari berdasarkan nama kategori">
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
                          <th>Nama kategori</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 0; ?>
                        @foreach($category as $data)
                        <?php $no++ ?>
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$data->nama}}</td>
                          <td colspan="3">
                          	<a 
                              href="{{ route('categories.edit', ['id' => $data->id]) }}"
                              class="btn btn-outline-primary"> Edit </a>
                          	<!-- <a href="" class="btn btn-outline-info"> Info </a> -->
                          	<a href="" class="btn btn-outline-danger"> Delete </a>
                          </td>
                        </tr>
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
          <br>

@endsection