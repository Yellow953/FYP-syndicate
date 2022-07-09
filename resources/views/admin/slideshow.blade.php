@extends('layouts.appadmin')

@section('content')
<div class="container-fluid">
    
    <div class="align">
        <h1 class="h3 mb-2 text-gray-800">Slideshow</h1>
    </div>

    <div class="card shadow my-4">
        <div class="card-body">
            <h1><a href="/admin/slideshow/new" class="btn btn-primary">New</a></h1>
            <div class="table-responsive my-2">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($slideshow as $s)
                            <tr>
                                <td>
                                    <img src="{{asset('assets/images/uploads/'.$s->image)}}" alt="" style="width: 200px; height:200px;">
                                </td>
                                <td>
                                    <a href="/admin/slideshow/{{$s->id}}/delete" class="btn btn-danger m-1">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">No Images Yet</td>
                            </tr>
                        @endforelse
                        <tr>
                            <td colspan="2">{{$slideshow->links()}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection