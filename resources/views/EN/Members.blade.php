@extends('layouts.appen')

@section('content')
   <div class="container-fluid p-0 m-0">
    <h1 class="text-center py-5"><u>Board Members</u></h1>
    
    <div class="board">
        <div class="card-deck">
            <div class="row">
                @forelse ($board as $b)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 my-3">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('assets/images/uploads/'.$b->image)}}" alt="Card image cap">
                            <div class="card-body p-0 pt-1">
                              <h4 class="card-title text-center">{{$b->name}}</h4>
                            </div>
                            <div class="card-footer">
                              <h6 class="text-muted text-center">{{$b->position}}</h6>
                            </div>
                          </div>
                    </div>
                @empty    
                    <div class="card m-5">
                      <div class="text-center">No Board Members Yet</div>
                    </div>
                @endforelse
            </div>
          </div>    
    </div>
</div>
@endsection