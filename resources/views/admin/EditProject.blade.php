@extends('layouts.appadmin')

@section('content')
    <div class="container-fluid p-0 m-0">
        <div class="my-5">
            <h1 class="text-center"><u>Edit Project:</u></h1>
        </div>

        <div class="m-5 px-5">
            <form action="/admin/projects/{{$project->id}}/save" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$project->name}}" autocomplete="name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" value="{{$project->description}}" autocomplete="description">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>
    </div>
@endsection