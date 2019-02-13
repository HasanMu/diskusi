@extends('layouts.admin.index')

@section('title') Contact @endsection

@section('content')
	<div class="main-panel">
        <div class="content-wrapper">
        	<center>
            @include('sweet::alert')
        	<div class="col-lg-11 grid-margin stretch-card" style="text-align: left;">
              <div class="card">
                <div class="card-body">
                  <h2>Data contact</h2>
                  <a href="{{route('contact.create')}}" class="btn btn-outline-primary"> Tambah data </a>
                  <p></p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tempat</th>
                          <th>Email</th>
                          <th>No Telp</th>
                          <th>Facebook</th>
                          <th>Google</th>
                          <th>Twitter</th>
                          <th>Pinterest</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 0; ?>
                        @foreach($contact as $data)
                        <?php $no++ ?>
                        <form action="{{ route('contact.destroy', ['id' => $data->id]) }}" method="post">
                          @method('delete')
                          @csrf
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$data->tempat}}</td>
                          <td>{{$data->email}}</td>
                          <td>{{$data->nohp}}</td>
                          @if($data->facebook)
                          <td>{{$data->facebook}}</td>
                          @else
                          <td></td>
                          @endif
                          @if($data->google)
                          <td>{{$data->google}}</td>
                          @else
                          <td></td>
                          @endif
                          @if($data->twitter)
                          <td>{{$data->twitter}}</td>
                          @else
                          <td></td>
                          @endif
                          @if($data->pinterest)
                          <td>{{$data->pinterest}}</td>
                          @else
                          <td></td>
                          @endif
                          <td colspan="3">
                          	<a 
                              href="{{ route('contact.edit', ['id' => $data->id]) }}"
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