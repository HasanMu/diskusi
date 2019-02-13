@extends('layouts.admin.index')

@section('title') Gallery @endsection

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
          <center>
            @include('sweet::alert')
          <div class="col-lg-11 grid-margin stretch-card" style="text-align: left;">
              <div class="card">
                <div class="card-body">
                  <h2>Data gallery</h2>
                  <a href="{{route('galleries.create')}}" class="btn btn-outline-primary"> Tambah data </a>
                  <p></p>
                  <form action="{{route('galleries.index')}}">

                  <div class="form-group">  
                    <div class="input-group col-xs-10">
                      <input 
                        type="text"
                        name="filter" 
                        class="form-control"
                        placeholder="Cari berdasarkan nama foto">
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
                          <th>Nama foto</th>
                          <th>Kategori</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 0; ?>
                        @foreach($gallery as $data)
                        <?php $no++ ?>
                        <form action="{{ route('galleries.destroy', ['id' => $data->id]) }}" method="post">
                          @method('delete')
                          @csrf
                       <tr>
                          <td>{{$no}}</td>
                          @if($data->nama_foto)
                          <td><img src="{{asset('storage/'.$data->nama_foto)}}" height="100px" width="100px"></td>
                          @else
                          <td>N/A</td>
                          @endif
                          <td>{{$data->nama}}</td>
                          <td>{{$data->kategori->nama}}</td>
                          <td colspan="3">
                            <a href="{{ route('galleries.edit', ['id' => $data->id]) }}" class="btn btn-outline-primary"> Edit </a>
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
                            {{$gallery->appends(Request::all())->links()}}
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