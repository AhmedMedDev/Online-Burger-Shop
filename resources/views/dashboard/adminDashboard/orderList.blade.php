@extends('layouts.dashboard.adminDashboard')

@section('title','Order-List')

@section('mainContent')
        {{--  --}}
        <div class="content dash">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-md-9">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">User List</h4>
                    <p class="card-category">Add New Product</p>
                  </div>
                  {{--  --}}
                  <div class="card-body">
                    <table class="table">
                      <thead>
                          <tr>
                              <th>Avatar</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Job Position</th>
                              <th class="text-right">Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                        {{--  --}}
                          @foreach ($users as $user)
                            <tr>
                              <td>
                                <div class="img-container">
                                    <img src="{{asset('images/upload/userAvatar/'. $user->img)}}" rel="nofollow" alt="..." width="50px">
                                </div>
                              </td>
                              <td>{{$user->Fname}} {{$user->Lname}}</td>
                              <td>{{$user->email}} </td>
                              <td>{{$user->jobTitle}} </td>
                              <td class="td-actions text-right">
                                  <button type="button" rel="tooltip" class="btn btn-info">
                                      <i class="material-icons">person</i>
                                  </button>
                                  <button type="button" rel="tooltip" class="btn btn-success">
                                      <i class="material-icons">edit</i>
                                  </button>
                                  <button type="button" rel="tooltip" class="btn btn-danger">
                                      <i class="material-icons">close</i>
                                  </button>
                              </td>
                            </tr>
                          @endforeach
                        {{--  --}}
                      </tbody>
                  </table>
                  </div>
                  {{--  --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      {{--  --}}
@endsection
        
      