@extends('layouts.admin.index')

@section('title') Events @endsection

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
          <center>
            @include('sweet::alert')
          <div class="col-lg-11 grid-margin stretch-card" style="text-align: left;">
              <div class="card">
                <div class="card-body">
                  <h2>Data events</h2>
                  <a href="{{route('events.create')}}" class="btn btn-outline-primary"> Tambah data </a>
                  <p></p>
                  <form action="{{route('events.index')}}">

                  <div class="form-group">  
                    <div class="input-group col-xs-10">
                      <input 
                        type="text"
                        name="filter" 
                        class="form-control"
                        placeholder="Cari berdasarkan nama events">
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
                          <th>Deskripsi</th>
                          <th>Waktu</th>
                          <th>Tempat</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 0 ?>
                        @foreach($events as $data)
                        <?php $no++ ?>
                        <form action="{{ route('events.destroy', ['id' => $data->id]) }}" method="post">
                          @method('delete')
                          @csrf
                       <tr>
                          <td>{{$no}}</td>
                          <td>{{ $data->nama }}</td>
                          <td>{{ str_limit($data->deskripsi, 50, ' . . .') }}</td>
                          <td>{{ $data->tanggal}} {{$data->bulan }}, Pukul {{$data->waktu }}</td>
                          <td>{{ $data->tempat }}</td>
                          <td colspan="3">
                            <a href="{{ route('events.edit', ['id' => $data->id])}}" class="btn btn-outline-primary"> Edit </a>
                            <a href="{{ route('events.show', ['id' => $data->id]) }}" class="btn btn-outline-info"> Info </a>
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
                            {{$events->appends(Request::all())->links()}}
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