@extends('layouts.appadmin')

@section('content')
    <div class="container-fluid p-0 m-0">
        <div class="my-5">
            <h1 class="text-center"><u>New User:</u></h1>
        </div>

        <div class="m-5 px-5">
            <form action="/admin/user/save" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" autocomplete="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" autocomplete="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" name="phone" placeholder="Enter Phone" autocomplete="phone" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" autocomplete="password" required>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <input type="number" class="form-control" name="role" placeholder="0 user, 1 admin, 2 member" required>
                </div>
                <div class="form-group">
                    <label for="active">Active</label>
                    <input type="number" class="form-control" name="active" placeholder="0 inactive, 1 active" required>
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" class="form-control" name="start_date">
                </div>
                <div class="form-group">
                    <label for="end_date">End Date</label>
                    <input type="date" class="form-control" name="end_date">
                </div>
                <div class="form-group">
                    <label for="image">Profile Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
              </form>
        </div>
    </div>
@endsection