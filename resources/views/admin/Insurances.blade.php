@extends('layouts.appadmin')

@section('content')
<div class="container-fluid">
    
    <div class="align">
        <h1 class="h3 mb-2 text-gray-800">Insurance</h1>
        
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
                            <th>Insurance Id</th>
                            <th>Client Name</th>
                            <th>Client Email</th>
                            <th>Client Phone</th>
                            <th>Start date</th>
                            <th>End date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                       @forelse ($insurances as $i)
                            @foreach ($users as $user)
                                @if ($user->id == $i->user_id)
                                    <tr>
                                        <td>{{$i->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$i->start_date}}</td>
                                        <td>{{$i->end_date}}</td>
                                        <td>
                                            <a href="/admin/insurances/{{$i->id}}/extend" class="btn btn-warning m-1">Extend</a>
                                            <a href="/admin/insurances/{{$i->id}}/delete" class="btn btn-danger m-1">Delete</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                       @empty
                           <tr>
                            <td colspan="7">No Insurances Yet</td>
                           </tr>
                       @endforelse
                        <tr>
                            <td colspan="7">{{$insurances->links()}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection