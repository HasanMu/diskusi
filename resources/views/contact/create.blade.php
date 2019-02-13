@extends('layouts.admin.index')

@section('title') Create @endsection

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
                  <h3>Tambah data contact</h3>
                  <br>
                  <!-- <p class="card-description">
                    Basic form elements
                  </p> -->
                    <form 
                      class="forms-sample" 
                      method="post"
                      action="{{route('contact.store')}}">
                      @csrf
                      
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat</label>
                            <div class="col-sm-9">
                              <input type="text" name="tempat" placeholder="Nama tempat" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Facebook</label>
                            <div class="col-sm-9">
                              <input type="text" name="facebook" placeholder="https://www.facebook.com/" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" name="email" placeholder="smkassalaam@gmail.com" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Google</label>
                            <div class="col-sm-9">
                              <input type="text" name="google" placeholder="https://www.google.com/" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Telp</label>
                            <div class="col-sm-9">
                              <input type="number" name="nohp" placeholder="08xxxx" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Twitter</label>
                            <div class="col-sm-9">
                              <input type="text" name="twitter" placeholder="https://www.twitter.com/" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                              <input type="hidden" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pinterest</label>
                            <div class="col-sm-9">
                              <input type="text" name="pinterest" placeholder="https://www.pinterest.com/" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>

                      <center>
                        <button type="submit" class="btn btn-success mr-2">Tambah data</button>
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