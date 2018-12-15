@extends('layouts.students')

@section('title') Murid @endsection

@section('content')	
	<div class="divider"></div>
	
	<div class="content">
		<div class="container">
			<h1 style="font-family: 'Dosis', sans-serif; color: gray;">DAFTAR NAMA MURID SMK ASSALAAM BANDUNG</h1>
      <div class="form-group">  
          <div class="input-group col-xs-12">
            <form action="/murid">
              <table width="100%">
                <tr>
                  <td>
                <input 
                  type="text"
                  class="text"
                  name="filter" 
                  placeholder="Cari berdasarkan nama murid"></td><td>
                  <span class="input-group-append">
                    <button 
                    class="file-upload-browse btn btn-info" 
                    type="submit">&nbsp;<i class="fa fa-search"></i>&nbsp;</button>
                  </span></td>
                </tr>
              </table>
            </form>
          </div>
        </div>
        <hr>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>NIS</th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>Tanggal Lahir</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 0; ?>
                        @foreach($murid as $data)
                        <?php $no++ ?>
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$data->nis}}</td>
                          <td>{{$data->nama}}</td>
                          <td>{{$data->kelas->nama}}</td>
                          <td>{{$data->dob}}</td>
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
            </center>
	
		</div>
		<!-- / container -->
	</div>
@endsection