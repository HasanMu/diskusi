@extends('layouts.admin.index')

@section('title') Profile @endsection

@section('content')

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @if(session('status'))
          <div class="alert alert-success">
              {{session('status')}}
          </div>
          @endif
          <!-- Form seacrh kalau perlu -->
            <div class="col-md-6 grid-margin stretch-card"  style="text-align: left;">
              <!-- Form Edit Profile -->
              <div class="card">
                <div class="card-body">
                  <h3>Profile</h3>
                  <br>
                  <!-- <p class="card-description">
                    Basic form elements
                  </p> -->
                  @foreach($user as $data)
                  <form 
                    class="forms-sample" 
                    method="post" 
                    enctype="multipart/form-data" 
                    action="{{route('home.update', ['id' => $data->id]) }}">
                    @csrf

                    <input type="hidden" name="_method" value="PUT">

                    
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input name="name" type="text" class="form-control" id="exampleInputName1" value="{{$data->name}}" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail3" value="{{$data->email}}" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label>File upload</label>
                      <!-- <input type="file" name="img[]" class="file-upload-default"> -->
                      <br>
                      @if($data->avatars)
                      <img src="{{asset('storage/'.$data->avatars)}}" height="100px">
                      @else
                      N/A
                      @endif
                      <p></p>
                      <div class="input-group col-xs-12">
                        
                        <span class="input-group-append">
                          <input name="image" class="file-upload-browser btn btn-info" type="file">
                        </span>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Save changes</button>
                    <a href="{{route('home.index')}}" class="btn btn-light">Cancel</a>
                    @endforeach
                  </form>
                </div>
              </div>

              <!-- Form Security -->
              <div class="card">
                <div class="card-body">
                  <!-- <h3>Security</h3>
                  <br> -->
                  <!-- <p class="card-description">
                    Basic form elements
                  </p> -->

                  <!-- <form 
                    class="forms-sample" 
                    method="post" 
                    enctype="multipart/form-data" 
                    action="{{route('home.update', ['id' => $data->id]) }}">
                    @csrf

                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <input name="password" type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">New password</label>
                      <input name="newpassword" type="password" class="form-control" id="exampleInputPassword4" placeholder="New Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Confirm password</label>
                      <input name="confirmpassword" type="password" class="form-control" id="exampleInputPassword4" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">&nbsp;</label>
                      &nbsp;
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Save changes</button>
                    <a href="{{ route('home.index') }}" class="btn btn-light">Cancel</a>
                  </form> -->
                </div>
              </div>
            </div>
        </div>
@endsection