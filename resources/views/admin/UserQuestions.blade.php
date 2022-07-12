@extends('layouts.appadmin')

@section('content')
<div class="container-fluid">
    
    <div class="align">
        <h1 class="h3 mb-2 text-gray-800">User's Questions</h1>
        
        <div>
            <form method="GET" action="{{route('userQuestions')}}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" name="search" value="{{request()->query('search')}}" placeholder="Search for..."
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
            <div class="table-responsive my-2">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Topic</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Submit date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($questions as $q)
                            <tr>
                                <td>
                                    {{$q->name}} <br>
                                    {{$q->email}}
                                </td>
                                <td>
                                    {{$q->topic}} <br>
                                    {{$q->subject}}
                                </td>
                                <td>{{$q->question}}</td>
                                <td>
                                    @if ($q->answer == '')
                                        -
                                    @else
                                        {{$q->answer}}    
                                    @endif
                                </td>
                                <td>{{$q->created_at}}</td>
                                <td>
                                    <a href="/admin/questions/{{$q->id}}/reply" class="btn btn-warning m-1">Reply</a>
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
                            <td colspan="4">{{$questions->appends(['search' => request()->query('search')])->links()}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection