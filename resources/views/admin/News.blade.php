@extends('layouts.appadmin')

@section('content')
<div class="container-fluid">
    
    <div class="align">
        <h1 class="h3 mb-2 text-gray-800">News</h1>
        
        <div>
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow my-4">
        <div class="card-body">
            <a href="/admin/news/new" class="btn btn-primary">New</a>

            <div class="table-responsive my-2">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>text</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($news as $n)
                            <tr>
                                <td>{{$n->name}}</td>
                                <td>{{$n->text}}</td>
                                <td>{{$n->created_at}}</td>
                                <td>
                                    <a href="/admin/news/{{$n->id}}/edit" class="btn btn-warning m-1">Edit</a>
                                    <a href="/admin/news/{{$n->id}}/delete" class="btn btn-danger m-1">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4"> No News Yet</td>
                            </tr>
                        @endforelse
                        <tr>
                            <td colspan="4">{{$news->links()}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection