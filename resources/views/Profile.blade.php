@extends('layouts.app')

@section('content')
<div class="main-content position-relative max-height-vh-100 h-100">
    <div class="container-fluid px-2 px-md-4">
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row mb-2">
          <div class="col-auto">
            <div class="h-100">
                <img src="{{asset('assets/images/uploads/'.$user->profile_image)}}" alt="profile_image" class="w-100 rounded shadow-sm" style="width: 200px;height:200px;">
            </div>   
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h3 class="mb-1">
                {{ $user->name }}
              </h3>
              <p class="mb-0 font-weight-normal text-sm">
                @if ($user->role == 1)
                    Admin
                @elseif ($user->role == 2) 
                    Member
                @else
                    User    
                @endif
              </p>
              <h4 class="mb-1">
                <a href="/profile/{{auth()->user()->id}}/edit" class="btn-primary btn">Edit Profile</a>
              </h4>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-12">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                      <h4 class="mb-0">Profile Information : </h4>
                </div>

                <div class="card-body p-3">
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; {{ $user->name }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; {{$user->phone}}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{$user->email}}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Active:</strong> &nbsp; {{($user->active == 1? 'Yes' : 'No')}}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Start Date:</strong> &nbsp; {{$user->start_date}}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">End Date:</strong> &nbsp; {{$user->end_date}}</li>
                </ul>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection