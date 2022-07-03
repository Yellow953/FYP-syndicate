@extends('layouts.appadmin')

@section('content')
<div class="container-fluid">
    
    <div class="align">
        <h1 class="h3 mb-2 text-gray-800">Insurance Applications</h1>
        
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
                            <th>Application Id</th>
                            <th>Member Name</th>
                            <th>Member Email</th>
                            <th>Member Phone</th>
                            <th>Submit date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($insuranceApplications as $ia)
                            @foreach ($users as $user)
                                @if ($user->id == $ia->user_id)
                                    <tr>
                                        <td>{{$ia->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$ia->created_at}}</td>
                                        <td>
                                            <a href="" class="btn btn-warning m-1">View Application</a>
                                            <a href="/admin/insuranceApplication/{{$ia->id}}/accept" class="btn btn-success m-1">Approve</a>
                                            <a href="/admin/insuranceApplication/{{$ia->id}}/reject" class="btn btn-danger m-1">Reject</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                       @empty
                           <tr>
                            <td colspan="6">No Insurance Applications For Now</td>
                           </tr>
                       @endforelse
                        <tr>
                            <td colspan="6">{{$insuranceApplications->links()}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection