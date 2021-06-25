@extends('layouts.dashboard.adminDashboard')

@section('title','Make-Offer')

@section('mainContent')
        <div class="content dash">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-md-9">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Product List</h4>
                        <p class="card-category">Make a New Offer</p>
                    </div>
                    {{--  --}}
                    <div class="card-body">
                        <form id="makeOfferForm">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Avatar</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{--  --}}
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-radio form-check-inline">
                                                    <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="product_id" id="inlineRadio{{$product->id}}" value="{{$product->id}}"> 
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                    </label>
                                                </div> 
                                            </td>
                                            <td>
                                                <div class="img-container">
                                                    <img src="{{asset($product->img)}}" rel="nofollow" alt="..." width="50px">
                                                </div>
                                            </td>
                                            <td>{{$product->name}} </td>
                                            <td>{{$product->price}} </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" class="btn btn-info">
                                                    <i class="material-icons">person</i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{--  --}}
                                </tbody>
                                </table>
                        </form>
                        {{-- Footer --}}
                        <div class="row pull-right" >
                            <div class="col-md-4">
                                <input type="number" name="percentage" class="form-control pull-right percentageInput" placeholder="Enter Percentage" style="width:150px">
                            </div>
                            <div class="col-md-8">
                                <button class="btn btn-primary pull-right " onclick="AddOffer()">Make Offer</button>
                            </div>
                        </div>
                        {{-- Footer --}}
                    </div>
                  {{--  --}}
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
        
      