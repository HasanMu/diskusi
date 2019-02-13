@extends('layouts.admin.index')

@section('title') Edit @endsection

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
        	<div class="col-12 grid-margin" style="text-align: left;">
              <!-- Form Edit Profile -->
              <div class="card">
                <div class="card-body">
                  <h3>Edit data contact</h3>
                  <br>
                  <!-- <p class="card-description">
                    Basic form elements
                  </p> -->
                    <form 
                      class="forms-sample" 
                      method="post"
                      action="{{ route('contact.update', ['id' => $data->id]) }}">
                      @csrf
                      
                      <input type="hidden" name="_method" value="PUT">

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat</label>
                            <div class="col-sm-9">
                              <input value="{{$data->tempat}}" type="text" name="tempat" placeholder="Nama tempat" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Facebook</label>
                            <div class="col-sm-9">
                              <input value="{{$data->facebook}}" type="text" name="facebook" placeholder="https://www.facebook.com/" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input value="{{$data->email}}" type="email" name="email" placeholder="smkassalaam@gmail.com" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Google</label>
                            <div class="col-sm-9">
                              <input value="{{$data->google}}" type="text" name="google" placeholder="https://www.google.com/" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Telp</label>
                            <div class="col-sm-9">
                              <input value="{{$data->nohp}}" type="number" name="nohp" placeholder="08xxxx" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Twitter</label>
                            <div class="col-sm-9">
                              <input value="{{$data->twitter}}" type="text" name="twitter" placeholder="https://www.twitter.com/" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                              <input  type="hidden" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pinterest</label>
                            <div class="col-sm-9">
                              <input value="{{$data->pinterest}}" type="text" name="pinterest" placeholder="https://www.pinterest.com/" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>

                      <center>
                        <button type="submit" class="btn btn-success mr-2">Edit data</button>
                        <a href="{{route('contact.index')}}" class="btn btn-light">Kembali</a>
                      </center>

                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </center>
    </div>
@endsection