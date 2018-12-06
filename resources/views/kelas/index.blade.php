@extends('layouts.admin.index')

@section('title') Kelas @endsection

@section('content')
	<div class="main-panel">
        <div class="content-wrapper">
        	<center>
        	<div class="col-lg-11 grid-margin stretch-card" style="text-align: left;">
              <div class="card">
                <div class="card-body">
                  <h2>Data kelas</h2>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama kelas</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76%
                            <i class="mdi mdi-arrow-down"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>Messsy</td>
                          <td>Flash</td>
                          <td class="text-danger"> 21.06%
                            <i class="mdi mdi-arrow-down"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>John</td>
                          <td>Premier</td>
                          <td class="text-danger"> 35.00%
                            <i class="mdi mdi-arrow-down"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>Peter</td>
                          <td>After effects</td>
                          <td class="text-success"> 82.00%
                            <i class="mdi mdi-arrow-up"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>Dave</td>
                          <td>53275535</td>
                          <td class="text-success"> 98.05%
                            <i class="mdi mdi-arrow-up"></i>
                          </td>
                        </tr>
                      </tbody>
                      <tfoot>
		                <tr>
		                    <td colspan="10">
		                        {{$user->links()}}
		                    </td>
		                </tr>
		            </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </center>
    </div>
@endsection