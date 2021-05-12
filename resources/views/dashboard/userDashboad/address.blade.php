@extends('layouts.dashboard.userDashboard')

@section('title','Address')
    
@section('mainContent')
        {{--  --}}
        <div class="content address">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-md-10">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">Add Address</h4>
                      <p class="card-category">Make a new address</p>
                    </div>
                    {{--  --}}
                    <div class="card-body">
                      <form> 
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Country / Region *</label>
                                    <input type="text" class="form-control">
                                </div>
        
                                <div class="form-group">
                                    <label class="bmd-label-floating">House Number and Street Name *</label>
                                    <input type="text" class="form-control">
                                </div>
        
                                <div class="form-group">
                                    <label class="bmd-label-floating">Town / City *</label>
                                    <input type="text" class="form-control">
                                </div>
        
                                <div class="form-group">
                                    <label class="bmd-label-floating">Enter Postcode of Country *</label>
                                    <input type="text" class="form-control">
                                </div>
        
                                <div class="form-group">
                                    <label class="bmd-label-floating">Enter Your Phone *</label>
                                    <input type="text" class="form-control">
                                </div>
        
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="bmd-label-floating">Order notes (optional)</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        

                        <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                        <div class="clearfix"></div>

                      </form>
                    </div>
                    {{--  --}}
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        {{--  --}}
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header card-header-text card-header-primary">
                                  <div class="card-text">
                                    <h4 class="card-title">Here is the Text</h4>
                                  </div>
                                </div>
                                <div class="card-body">
                                    <form> 
                                      <div class="row justify-content-center">
                                          <div class="col-md-10">
                                              <div class="form-group">
                                                  <label class="bmd-label-static">Country / Region *</label>
                                                  <input type="text" class="form-control">
                                              </div>
                      
                                              <div class="form-group">
                                                  <label class="bmd-label-static">House Number and Street Name *</label>
                                                  <input type="text" class="form-control">
                                              </div>
                      
                                              <div class="form-group">
                                                  <label class="bmd-label-static">Town / City *</label>
                                                  <input type="text" class="form-control">
                                              </div>
                      
                                              <div class="form-group">
                                                  <label class="bmd-label-static">Enter Postcode of Country *</label>
                                                  <input type="text" class="form-control">
                                              </div>
                      
                                              <div class="form-group">
                                                  <label class="bmd-label-static">Enter Your Phone *</label>
                                                  <input type="text" class="form-control">
                                              </div>
                      
                                              <div class="form-group">
                                                  <label for="exampleFormControlTextarea1">Order notes (optional)</label>
                                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <button type="submit" class="btn btn-success pull-right ml-2"> Update </button>
                                      <button type="submit" class="btn btn-danger pull-right"> Delete </button>
                                      <div class="clearfix"></div>
              
                                    </form>
                                  </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header card-header-text card-header-primary">
                                  <div class="card-text">
                                    <h4 class="card-title">Here is the Text</h4>
                                  </div>
                                </div>
                                <div class="card-body">
                                    <form> 
                                      <div class="row justify-content-center">
                                          <div class="col-md-10">
                                              <div class="form-group">
                                                  <label class="bmd-label-floating">Country / Region *</label>
                                                  <input type="text" class="form-control">
                                              </div>
                      
                                              <div class="form-group">
                                                  <label class="bmd-label-floating">House Number and Street Name *</label>
                                                  <input type="text" class="form-control">
                                              </div>
                      
                                              <div class="form-group">
                                                  <label class="bmd-label-floating">Town / City *</label>
                                                  <input type="text" class="form-control">
                                              </div>
                      
                                              <div class="form-group">
                                                  <label class="bmd-label-floating">Enter Postcode of Country *</label>
                                                  <input type="text" class="form-control">
                                              </div>
                      
                                              <div class="form-group">
                                                  <label class="bmd-label-floating">Enter Your Phone *</label>
                                                  <input type="text" class="form-control">
                                              </div>
                      
                                              <div class="form-group">
                                                  <label for="exampleFormControlTextarea1">Order notes (optional)</label>
                                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                              </div>
                                          </div>
                                      </div>
                                      
              
                                      <button type="submit" class="btn btn-success pull-right ml-2">Update </button>
                                      <button type="submit" class="btn btn-danger pull-right ">Delete </button>
                                      <div class="clearfix"></div>
              
                                    </form>
                                  </div>
                            </div>
                        </div>
                        {{--  --}}
                    </div>
                </div>
            </div>
            </div>
          </div>
        {{--  --}}
@endsection