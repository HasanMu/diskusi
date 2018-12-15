@extends('layouts.teachers')

@section('title') Guru @endsection

@section('content')	
	<div class="divider"></div>
	
	<div class="content">
		<div class="container">
			<h1 style="font-family: 'Dosis', sans-serif; color: gray;">DAFTAR NAMA GURU SMK ASSALAAM BANDUNG</h1>
      <div class="form-group">  
          <div class="input-group col-xs-12">
            <form action="/guru">
              <table width="100%">
                <tr>
                  <td>
                <input 
                  type="text"
                  class="text"
                  name="filter" 
                  placeholder="Cari berdasarkan nama guru"></td><td>
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
                          <th>Nama</th>
                          <th>Bidang studi</th>
                          <th>Alamat</th>
                          <th>Tanggal Lahir</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 0; ?>
                        @foreach($guru as $data)
                        <?php $no++ ?>
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$data->nama}}</td>
                          <td>{{$data->bidang_studi}}</td>
                          <td>{{$data->alamat}}</td>
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