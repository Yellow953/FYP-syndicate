@extends('layouts.appadmin')

@section('content')
<div class="container-fluid">
    
    <div class="align">
        <h1 class="h3 mb-2 text-gray-800">Member Applications</h1>
        
        <div>
            <form method="GET" action="en/admin/memberApplications" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
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
                            <th>Application Id</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Phone</th>
                            <th>Submit date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($memberApplications as $ma)
                            @foreach ($users as $user)
                                @if ($user->id == $ma->user_id)
                                    <tr>
                                        <td>{{$ma->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$ma->created_at}}</td>
                                        <td>
                                            <a href="" class="btn btn-warning m-1">View Application</a>
                                            <a href="/admin/memberApplication/{{$ma->id}}/accept" class="btn btn-success m-1">Approve</a>
                                            <a href="/admin/memberApplication/{{$ma->id}}/reject" class="btn btn-danger m-1">Reject</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                       @empty
                           <tr>
                            <td colspan="6">No Member Applications For Now</td>
                           </tr>
                       @endforelse
                        <tr>
                            <td colspan="6">{{$memberApplications->links()}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection