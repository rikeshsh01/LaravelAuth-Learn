@extends('admin.layout')
@section('content')

<div class="container">
    <form action="{{route('update',$edit->id)}}" method="POST">
        @csrf
        
        <input type="text" name="todo" value="{{$edit->todo}}">
        <input class="btn btn btn-secondary" type="submit" value="Submit">
    </form>
</div>
    
@endsection
