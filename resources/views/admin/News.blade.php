@extends('layouts.appadmin')

@section('content')
<div class="container-fluid">
    
    <div class="align">
        <h1 class="h3 mb-2 text-gray-800">News</h1>
        
        <div>
            <form method="GET" action="{{route('news')}}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" name="search" value="{{request()->query('search')}}" placeholder="Name or Text"
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
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
                                <td>
                                    <a href="{{asset('assets/images/uploads/'.$n->image)}}"><img src="{{asset('assets/images/uploads/'.$n->image)}}" class="rounded admin-img"></a>
                                    {{$n->name}}
                                </td>
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
                            <td colspan="4">{{$news->appends(['search' => request()->query('search')])->links()}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection