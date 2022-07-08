@extends('layouts.appadmin')

@section('content')
<div class="container-fluid m-0 p-0">
    <div class="card m-5 p-5">
        <h1 class="text-center"><u>Reply To Form</u></h1>
        <br><br>
        <form action="/admin/questions/{{$question->id}}/send" method="get">
            @csrf
            <h3 class="text-center">Email: {{$question->email}}</h3>
            <br>
            <h3 class="text-center">Question: {{$question->question}}</h3>
            <br>
            <div class="row">
                <div class="col-3">
                    <label for="answer">Answer:</label>
                </div>
                <div class="col-9">
                    <input type="text" name="answer" id="answer" class="form-control" required>
                </div>
            </div>
            <br>
            <button class="btn btn-primary" type="submit">Save</button>
            <a href="mailto:{{$question->email}}">Send</a>
        </form>   
    </div> 
</div>
@endsection
