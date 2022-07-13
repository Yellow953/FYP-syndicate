@extends('layouts.app')

@section('content')
<div class="main-content position-relative max-height-vh-100 h-100">
    <div class="container-fluid px-2 px-md-4">
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row">
            <div class="col-12">
              <div class="card card-plain h-100 align-items-center">
                <div class="pb-0 p-3">
                    <h2 class="mb-0">Edit Profile</h2>
                </div>

                <div class="card-body">
                  <form action="/profile/{{auth()->user()->id}}/save" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row input-group input-group-outline my-3">
                        <div class="col-6">
                            <label for="name">Name</label>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="name" value="{{$user->name}}">
                        </div>
                    </div>

                    <div class="row input-group input-group-outline my-3">
                        <div class="col-6">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-6">
                            <input type="email" class="form-control" name="email" value="{{$user->email}}">
                        </div>
                    </div>

                    <div class="row input-group input-group-outline my-3">
                        <div class="col-6">
                            <label for="phone_number">Phone Number</label>
                        </div>
                        <div class="col-6">
                            <input type="number" class="form-control" name="phone" value="{{$user->phone}}">
                        </div>
                    </div>

                    <div class="row input-group input-group-outline my-3">
                        <div class="col-6">
                            <label for="password">Password</label>
                        </div>
                        <div class="col-6">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>

                    <div class="row input-group input-group-outline my-3">
                        <div class="col-6">
                            <label for="image">Image</label>
                        </div>
                        <div class="col-6">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>

                    <div class="row input-group input-group-outline my-3">
                        <div class="col-3 offset-9">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            
        </div>
      </div>
    </div>
  </div>
@endsection