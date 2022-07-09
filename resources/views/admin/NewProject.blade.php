@extends('layouts.appadmin')

@section('content')
    <div class="container-fluid p-0 m-0">
        <div class="my-5">
            <h1 class="text-center"><u>New Project:</u></h1>
        </div>

        <div class="m-5 px-5">
            <form action="/admin/projects/save" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" autocomplete="name" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
              </form>
        </div>
    </div>
@endsection