@extends('layouts.appadmin')

@section('content')
<div class="container-fluid">
    
    <div class="align">
        <h1 class="h3 mb-2 text-gray-800">User's Questions</h1>
        
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
            <div class="table-responsive my-2">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Question</th>
                            <th>Submit date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($questions as $q)
                            <tr>
                                <td>{{$q->email}}</td>
                                <td>{{$q->question}}</td>
                                <td>{{$q->created_at}}</td>
                                <td>
                                    <a href="mailto:{{$q->email}}" class="btn btn-warning m-1">Reply</a>
                                    <a href="/admin/questions/{{$q->id}}/delete" class="btn btn-danger m-1">Delete</a>
                                    <a href="/admin/questions/{{$q->id}}/addtofavorite" class="btn btn-success m-1">Add to Favorites</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No Questions Yet</td>
                            </tr>
                        @endforelse
                        <tr>
                            <td colspan="4">{{$questions->links()}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection