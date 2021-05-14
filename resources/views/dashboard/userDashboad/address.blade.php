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
                      <form id="AddAddress"> 
                        <div class="row justify-content-center">
                            <div class="col-md-10">

                                <div class="form-group">
                                    <label class="bmd-label-floating">Set name to this location </label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>

                                <div class="form-group">
                                    <label class="bmd-label-floating">Country / Region *</label>
                                    <input type="text" class="form-control" id="country" name="country">
                                </div>
        
                                <div class="form-group">
                                    <label class="bmd-label-floating">House Number and Street Name *</label>
                                    <input type="text" class="form-control" id="street" name="street">
                                </div>
        
                                <div class="form-group">
                                    <label class="bmd-label-floating">Town / City *</label>
                                    <input type="text" class="form-control" id="city" name="city">
                                </div>
        
                                <div class="form-group">
                                    <label class="bmd-label-floating">Enter Postcode of Country *</label>
                                    <input type="text" class="form-control" id="postcode" name="postcode">
                                </div>
        
                                <div class="form-group">
                                    <label class="bmd-label-floating">Enter Your Phone *</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                </div>
        
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="bmd-label-floating">Order notes (optional)</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <input type="text" class="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                      </form>
                      <button type="submit" class="btn btn-primary pull-right" onclick="AddAddreass()">Add Address</button>

                    </div>
                    {{--  --}}
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-10">
                  
                    <div class="row AddressTableBody">
                        {{--  --}}
                        @foreach ($addresss as $address)
                            
                        <div class="col-sm-6" id="address{{$address->id}}">
                            <div class="card">
                                <div class="card-header card-header-text card-header-primary">
                                  <div class="card-text">
                                    <h4 class="card-title">{{$address->name}}</h4>
                                  </div>
                                </div>
                                <div class="card-body">
                                    <form id="formAddress{{$address->id}}" class="formAddress"> 
                                      <div class="row justify-content-center" >
                                          <div class="col-md-10">

                                              <div class="form-group">
                                                <label class="bmd-label-static">Name of Location *</label>
                                                <input type="text" class="form-control " id="name" name="name" value="{{$address->name}}" disabled>
                                              </div>

                                              <div class="form-group">
                                                  <label class="bmd-label-static">Country / Region *</label>
                                                  <input type="text" class="form-control " id="country" name="country" value="{{$address->country}}" disabled>
                                              </div>
                      
                                              <div class="form-group">
                                                  <label class="bmd-label-static">House Number and Street Name *</label>
                                                  <input type="text" class="form-control " id="street" name="street" value="{{$address->street}}" disabled>
                                              </div>
                      
                                              <div class="form-group">
                                                  <label class="bmd-label-static">Town / City *</label>
                                                  <input type="text" class="form-control " id="city" name="city" value="{{$address->city}}" disabled>
                                              </div>
                      
                                              <div class="form-group">
                                                  <label class="bmd-label-static">Enter Postcode of Country *</label>
                                                  <input type="text" class="form-control " id="postcode" name="postcode" value="{{$address->postcode}}" disabled>
                                              </div>
                      
                                              <div class="form-group">
                                                  <label class="bmd-label-static">Enter Your Phone *</label>
                                                  <input type="text" class="form-control " id="phone" name="phone" value="{{$address->phone}}" disabled>
                                              </div>
                      
                                              <div class="form-group">
                                                  <label for="exampleFormControlTextarea1">Order notes (optional)</label>
                                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="order_notes" value="{{$address->order_notes}}"></textarea>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      
                                      <div class="clearfix"></div>
              
                                    </form>
                                    <button type="submit" class="btn btn-default pull-right ml-2 hidden" id="UpdateAddress" onclick="UpdateAddress({{$address->id}})"> Update </button>
                                    <button type="submit" class="btn btn-info pull-right ml-2" id="EditAddress" address-id="{{$address->id}}"> Edit </button>
                                    <button type="submit" class="btn btn-danger pull-right" onclick="ConfirmDeleteAddress({{$address->id}})"> Delete </button>
                                    
                                  </div>
                            </div>
                        </div>

                        @endforeach

                        {{--  --}}
                    </div>
                </div>
            </div>
            </div>
          </div>
        {{--  --}}
@endsection