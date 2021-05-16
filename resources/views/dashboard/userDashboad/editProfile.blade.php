@extends('layouts.dashboard.userDashboard')

@section('title','Edit-Profile')

@section('mainContent')
        {{--  --}}
        <div class="content address">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-md-7">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Update Profile</h4>
                    <p class="card-category">Edit Your Profile Info</p>
                  </div>
                  {{--  --}}
                  <div class="card-body">
                    <form method="POST" action="{{url('profileUpdate')}}" id="profileEditForm" enctype="multipart/form-data"> 
                      @method('PUT')
                      @csrf 
                      <div class="row justify-content-center">
                          <div class="col-md-11">

                              <div class="form-group">
                                  <label class="bmd-label-floating">Fist Name </label>
                                  <input type="text" class="form-control" id="Fname" name="Fname" value="{{ Auth::user()->Fname }}">
                              </div>

                              <div class="form-group">
                                  <label class="bmd-label-floating">Last Name</label>
                                  <input type="text" class="form-control" id="Lname" name="Lname" value="{{ Auth::user()->Lname }}">
                              </div>
      
                              <div class="form-group">
                                  <label class="bmd-label-floating">Job Title</label>
                                  <input type="text" class="form-control" id="jobTitle" name="jobTitle" value="{{ Auth::user()->jobTitle }}">
                              </div>
      
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1" class="bmd-label-floating">Bio</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="bio">{{ Auth::user()->bio }}</textarea>
                              </div>
                              {{--  --}}
                              <div class="file-upload">
                                <div class="image-upload-wrap">
                                  <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="img" value="{{ Auth::user()->img }}"/>
                                  <div class="drag-text">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                    <h3>Drag and drop a Image </h3>
                                  </div>
                                </div>
                                <div class="file-upload-content">
                                  <img class="file-upload-image" src="#" alt="your image" />
                                  <div class="image-title-wrap">
                                    <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                  </div>
                                </div>
                              </div>
                              {{--  --}}
                              <input type="text" class="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                          </div>
                      </div>
                      <div class="clearfix"></div>
                    <button type="submit" class="btn btn-primary pull-right" onclick="AddAddreass()">Update Info</button>

                    </form>

                  </div>
                  {{--  --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      {{--  --}}
@endsection
        
      