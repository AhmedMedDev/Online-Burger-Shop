@extends('layouts.dashboard.userDashboard')

@section('title','User-Profile')
    
@section('mainContent')
        {{--  --}}
        <div class="content">
          <div class="container-fluid">
            <div class="row" style="justify-content: center;">
              <div class="col-md-6">
                <div class="card card-profile">
                  <div class="card-avatar">
                    <a href="javascript:;">
                      <img class="img" src="{{asset('images/upload/userAvatar/'.Auth::user()->img)}}" />
                    </a>
                  </div>
                  <div class="card-body">
                    <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                    <h4 class="card-title">Alec Thompson</h4>
                    <p class="card-description">
                      Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                    </p>
                    <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{--  --}}
@endsection

      