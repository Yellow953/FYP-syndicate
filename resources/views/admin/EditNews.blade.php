@extends('layouts.appadmin')

@section('content')
    <div class="container-fluid p-0 m-0">
        <div class="my-5">
            <h1 class="text-center"><u>Edit News:</u></h1>
        </div>

        <div class="m-5 px-5">
            <form action="/admin/news/{{$news->id}}/save" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$news->name}}" autocomplete="name">
                </div>
                <div class="form-group">
                    <label for="text">Text</label>
                    <input type="text" class="form-control" name="text" placeholder="Enter Text" value="{{$news->text}}" autocomplete="text">
                </div>
                <div class="form-group">
                    <label for="text">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>
    </div>
@endsection