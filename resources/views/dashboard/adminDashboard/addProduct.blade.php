@extends('layouts.dashboard.adminDashboard')

@section('title','Add-Product')

@section('mainContent')
        {{--  --}}
        <div class="content dash">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-md-7">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">ADD Product</h4>
                    <p class="card-category">Add New Product</p>
                  </div>
                  {{--  --}}
                  <div class="card-body">
                    <form id="addProductForm" enctype="multipart/form-data"> 

                      <div class="row justify-content-center">
                          <div class="col-md-11">

                              <div class="form-group">
                                  <label class="bmd-label-floating">Name </label>
                                  <input type="text" class="form-control" id="name" name="name" >
                              </div>
      
                              <div class="form-group">
                                  <label class="bmd-label-floating">Price</label>
                                  <input type="text" class="form-control" id="price" name="price" >
                              </div>
                              
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1" class="bmd-label-floating">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="des"></textarea>
                              </div>

                              {{--  --}}
                              <div class="form-group">
                                <div class="dropdown category">
                                    <button class="btn btn-secondary dropdown-toggle res" type="button" style="width: 100%" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Salty
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 100%">
                                      <a class="dropdown-item Salty" value="1">Salty</a>
                                      <a class="dropdown-item Dessert" value="2">Dessert</a>
                                    </div>
                                </div>
                                <input type="number" name="category_id" id="category_id" class="hidden" value="1">
                              </div>
                              {{--  --}}

                              {{-- file-upload  --}}
                              <div class="file-upload">
                                <div class="image-upload-wrap">
                                  <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="img" />
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
                              {{-- file-upload  --}}
                          </div>
                      </div>
                      
                      <div class="clearfix"></div>
                    </form>
                    <button class="btn btn-primary pull-right " onclick="AddProduct()">Add Product</button>
                  </div>
                  {{--  --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      {{--  --}}
@endsection
        
      