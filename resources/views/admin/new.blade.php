@extends('admin.layout')
@section('content')
<div class="container">
    <form action="{{route('store')}}" method="POST">
        @csrf
        <h3>Name</h3>
        <div class="">
            <input type="text" name="todo" placeholder="Add Full Name">
        </div>
       
       
        <div>
        <input class="btn btn-secondary" type="submit" value="Submit">

        </div>
    </form>
</div>

@endsection
