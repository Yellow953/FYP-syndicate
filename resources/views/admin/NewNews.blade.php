@extends('layouts.appadmin')

@section('content')
    <div class="container-fluid p-0 m-0">
        <div class="my-5">
            <h1 class="text-center"><u>New News:</u></h1>
        </div>

        <div class="m-5 px-5">
            <form action="/admin/news/save" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" autocomplete="name" required>
                </div>
                <div class="form-group">
                    <label for="text">Text</label>
                    <input type="text" class="form-control" name="text" placeholder="Enter Text" autocomplete="text" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
              </form>
        </div>
    </div>
@endsection