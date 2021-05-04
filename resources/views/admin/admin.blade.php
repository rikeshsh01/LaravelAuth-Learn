
@extends('admin.layout')
@section('content')
<div class="container">
    <button class="btn btn-dark"><a href="{{route('new')}}">Add Todo</a></button>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">Sn</th>
            <th scope="col">Todo</th>
            <th scope="col">Photo</th>
            <th scope="col">Operation</th>
 
          </tr>
        </thead>
        <tbody>
            @foreach ($todo as $t)
          <tr>
            
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$t->todo}}</td>
            <td>
              
              <img src="{{asset('/images/'.$t->photo)}}" width="100px" alt="Image">
            </td>
            <td>
            <button class="btn btn-outline-dark"><a href="{{route('edit',$t->id)}}">Edit</a></button>  
            <button class="btn btn-warning"><a href="{{route('delete',$t->id)}}">Delete</a> </button>
            </td> 
            
           </tr>
           @endforeach
        </tbody>
      </table>

</div>


@endsection